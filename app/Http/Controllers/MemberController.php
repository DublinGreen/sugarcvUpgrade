<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoreData;
use App\Models\TrackRevenue;
use Illuminate\Support\Facades\Validator;
use App\Jobs\EmailAfterRegisterJob;
use App\Models\ResumeBasicDetail;
use Carbon\Carbon;
use Socialite;
use Session;
use Illuminate\Support\Facades\Auth;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class MemberController extends Controller
{
	protected $email, $user_id;
    /**
     * Create a new MemberController instance.
     *
     * @param \App\Repositories\MemberRepository $MemberRepository
     * @return void
     */
    public function __construct() {
		parent::__construct();
        $this->middleware('member', ['except' => [
			'postLogin', 
			'register', 
			'sendWelcomeEmail', 
			'userActivate', 
			'changePassword',
			'resetPassword',
			'resetPasswordPost',
			'handleFacebookCallback',
			'handleGoogleCallback'
		]]);
		$this->email = null;
		$this->user_id = null;
    }

    /**
     * Login
     * @return [type] [description]
     */
    public function postLogin (Request $request) {
        $data = $request->input('data');

		try {	
            $user = \Sentinel::authenticate([
                'email'  =>  $data['username'],
                'password'  =>  $data['password']
            ], (isset($data['remember'])));

            if (!$user) {
                throw new \Exception(\Lang::get('error.loginError'), 1);
                return false;
            }

            $permissions = $user->permissions;
            if (!isset($permissions['member'])) {
                throw new \Exception(\Lang::get('error.userError'), 1);
                return false;
            } else if ($permissions['member'] != 1) {
                throw new \Exception(\Lang::get('error.userError'), 1);
                return false;
            }

            if ($user->is_ban) {
                throw new \Exception(\Lang::get('error.userBan'), 1);
                return false;
            }
        } catch (\Exception $e) {
            \Sentinel::logout();
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
        }
		if($request->has("create_resume") && Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			ResumeBasicDetail::where("id", $resume_id)->update(["user_id" => $user->id]);

		}
		
        return \Response::json([
            'type'      =>  'success',
            'message'   =>  \Lang::get('message.loginSuccess'),
            'redirect'  =>  $request->has('redirect') ? $request->input('redirect') : route('home')
        ]);
    }
	
	public function register(Request $request, \App\Models\UserMeta $usermeta, CoreData $CoreData, TrackRevenue $TrackRevenue){
		try{
			$rules = [
				"email" => "required|unique:users,email",
				"first_name" => "required",
				"last_name" => "required",
				"password" => 'min:4|required_with:repeat_password|same:repeat_password|without_spaces',
				'repeat_password' => 'min:4',
				"captcha" => "required"
			];
			
			$validator =  Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                throw new \Exception($validator->errors()->first(), 1);
                return false;
            }
			
			if($request->input("captcha") != $request->session()->get('captcha_code')){
                throw new \Exception("Captcha invalid.", 1);
                return false;
			}
			
			$input = [
				'email' => $request->input('email'),
				'username' => $request->input('email'),
				'first_name' => $request->input('first_name'),
				'last_name' => $request->input('last_name'),
				'password' => $request->input('password'),
				'permissions' =>  ['member' => true]
			];
			
			if($request->has('is_publisher')){
				$input["is_unsubscribed"] = 1;
				$input["is_publisher"] = 1;
			}
			
			// $user = \Sentinel::register([]);
			
			//create User
			$user = \Sentinel::registerAndActivate($input);
			
			//add meta data
			$usermeta->updateUserMeta($user->id, 'user_active_status', 'inactive');
			$usermeta->updateUserMeta($user->id, 'signup_from', $request->input('signup_from'));
			$usermeta->updateUserMeta($user->id, 'ip_address', $this->getIp());
			$usermeta->updateUserMeta($user->id, 'signup_bonus_expire', $CoreData->getMeta("signup_bonus_expire_days"));
			$usermeta->updateUserMeta($user->id, 'signup_bonus_min_sale_amt', $CoreData->getMeta("signup_bonus_min_sale_amt"));
			$usermeta->updateUserMeta($user->id, 'series_email', 0);
			
			//check if user publisher
			if(!$request->has('is_publisher')){
				$user_revenue = $CoreData->getMeta("signup_bonus_amount");
				$click_source = \BrowserDetect::detect();
				$track_id = $TrackRevenue->insertTracking($user->id, "basic" , "1", $user_revenue, "New User", "NA", "0", $click_source);
			}
			$this->email = $request->input('email');
			$this->user_id = $user->id;
			
			//set referral
			$this->setReferral();
			
			//send confirmation email
			$activation = \Activation::create($user);
			$this->sendActivationEmail($user, $activation);
			
			// auto login after register
			\Sentinel::authenticate(['username' => $request->input('email'),'password' => $request->input('password')]);

			// setcookie("aff_SID", $user->id.'_basic', time() + (86400 * 7), COOKIEPATH, COOKIE_DOMAIN);  

			// dispatchNow(new EmailAfterRegisterJob($user));
			// dispatch(new EmailAfterRegisterJob($user))->onQueue('queue-email-register');
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "success",
				'redirect_to'	=> route('thankyou')
            ]);

			
		} catch (\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
    private function sendActivationEmail($user, $code){
		try{
			$subject = 'Thank you for joining Affinityy - Please confirm your account!';
			$usermeta = new \App\Models\UserMeta;
			$exp_days = $usermeta->getUserMeta($user->id, "signup_bonus_expire");
			if($exp_days->meta_value == '1'){
				$days = $exp_days->meta_value." day";
			}else{
				$days = $exp_days->meta_value." days";
			}
			$min_sale_amount 	= $usermeta->getUserMeta($user->id, "signup_bonus_min_sale_amt");
			if($min_sale_amount == ""){
				$min_sale_amount = "0";
			}
			
			$TrackRevenue = new \App\Models\TrackRevenue;
			$bonus = $TrackRevenue->where(["affiliate_with" => "New User", "user_id" => $user->id])->select(["user_revenue as bonus"])->get()->first()->bonus;

			\Mail::send('frontend.emails.activation', [
					'user' => $user,
					'code' => $code,
					'days'  => $days,
					'bonus' => $bonus,
					'min_sale_amount' => $min_sale_amount
				], function($message) use ($user, $subject){
					// $message->to($user->email);
					$message->to("php.essitco1@gmail.com");
					$message->subject($subject);
				});
		} catch(\Exception $e){
			return $e->getMessage();
		}
    }
	
	public function getIp(){
		foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
			if (array_key_exists($key, $_SERVER) === true){
				foreach (explode(',', $_SERVER[$key]) as $ip){
					$ip = trim($ip); // just to be safe
					if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
						return $ip;
					}
				}
			}
		}
	}
	
	public function setReferral(){
		if(\Session::has('refer_id')){
			$usermeta = new \App\Models\UserMeta;
			if(\Session::has('transid')){
				$usermeta->updateUserMeta($user->id, 'pixel_transid', \Session::get('transid'));
				\Session::forget('transid');
			}

			if(\Session::has('pixel_subid')){
				$usermeta->updateUserMeta($user->id, 'pixel_subid', \Session::get('pixel_subid'));
				\Session::forget('pixel_subid');
			} 

			if(\Session::has('pixel_device')){
				$usermeta->updateUserMeta($user->id, 'pixel_device', \Session::get('pixel_device'));
				\Session::forget('pixel_device');
			}

			if(\Session::has('pixel_email')){
				$usermeta->updateUserMeta($user->id, 'pixel_email', \Session::get('pixel_email'));
				\Session::forget('pixel_email');
			}
			
			if(\Session::has('pixel_affid')){
				$usermeta->updateUserMeta($user->id, 'pixel_affid', \Session::get('pixel_affid'));
				\Session::forget('pixel_affid');
			}
			
			if(\Session::has('pixel_sourceid')){
				$usermeta->updateUserMeta($user->id, 'pixel_sourceid', \Session::get('pixel_sourceid'));
				\Session::forget('pixel_sourceid');
			}
			
			if(\Session::has('pixel_subsource')){
				$usermeta->updateUserMeta($user->id, 'pixel_subsource', \Session::get('pixel_subsource'));
				\Session::forget('pixel_subsource');
			}
			
			if(\Session::has('pixel_articleID')){
				$usermeta->updateUserMeta($user->id, 'pixel_articleID', \Session::get('pixel_articleID'));
				\Session::forget('pixel_articleID');
			}
			
			if(\Session::has('pixel_specialCategory')){
				$usermeta->updateUserMeta($user->id, 'pixel_specialCategory', \Session::get('pixel_specialCategory'));
				\Session::forget('pixel_specialCategory');
			}
			$email = $this->email;
			$user_id = $this->user_id;
			$refer_by_id = base64_decode(\Session::get('refer_id')); 
			if($refer_by_id != '' && $refer_by_id != '0' ){
				$invite_date = date('Y-m-d H:i:s');
				$flight = \App\Models\ReferFriends::updateOrCreate(
					['current_email_address' => $email],
					['refer_by' => $refer_by_id, 'email' =>$email, 'signed_up' => '1', 'date' => $invite_date, 'user_id' => $user_id]
				);
			}
		}
		return true;
	}
	
	public function userActivate($code){
		try{
			$user = \Sentinel::findUserByActivationCode($code);
			if($user->attemptActivation($code)){
			
			} else {
			// User activation failed
			}
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
			echo 'User was not found.';
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e){
			echo 'User is already activated.';
		}
	}
	
	public function changePassword(Request $request){
		try{
			if(!$request->has("email")){
                throw new \Exception("Email is empty or invalid", 1);
                return false;
			}
			$credentials = [
				'login' => $request->input("email")
			];
			$user = \Sentinel::findByCredentials($credentials);
			if( empty($user) ){
                throw new \Exception("There is no user with the provided email address", 1);
                return false;
			}
			$activation = \Activation::create($user);
			
			$subject = "CashDirectClub | Password Recover";
			\Mail::send('frontend.emails.forgotPassword', [
					'userData' => $user,
					'code' => $activation->code
				], function($message) use ($user, $subject){
					$message->to($user->email);
					// $message->to("php.essitco1@gmail.com");
					$message->subject($subject);
				});
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Email sent."
            ]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function resetPassword($user_id, $code){
		try{
			if (\Activation::where(["user_id" => $user_id, "code" => $code, "completed" => 0])->count()){
				return view('frontend.pages.changePassword', ["reset" => true, 'userID' => $user_id, 'code' => $code]);
			} else {
				return view('frontend.pages.changePassword', ["error" => "User or activation code not found."]);
			}
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function resetPasswordPost($user_id, $code, Request $request){
		try{
			$rules = [
				"password" => 'required|min:4|required_with:repeat_password|same:repeat_password|without_spaces',
				'repeat_password' => 'min:4'
			];
			
			$validator =  Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                throw new \Exception($validator->errors()->first(), 1);
                return false;
            }
			
			$user = \Sentinel::findById($user_id);
			if (\Activation::complete($user, $code)){
				\Sentinel::update($user, ["password" => $request->input('password')]);
			} else {
                throw new \Exception("Something wrong with request.", 1);
                return false;
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Password updated successfully. Redirecting...",
				'redirect' => route('home')
            ]);

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function handleFacebookCallback(){
        try {
            $fbuser = Socialite::driver('facebook')->stateless()->user();
			// print_r($fbuser);
			// die;
			$isSiginUp = \Sentinel::findByCredentials(['login' => $fbuser->getEmail()]);
			if(!empty($isSiginUp)){
				\Sentinel::login($isSiginUp);
				return redirect()->route('home');
			}
			
			$credentials = [
				'email' => $fbuser->email,
				'username' => $fbuser->email,
				'first_name' => $fbuser->name,
				'password' => rand(1000, 1000000),
				'permissions' =>  ['member' => true],
				 
			];
			
			// print_r($credentials);
			// die();
			if(!empty($credentials)){
			$data = \Sentinel::register($credentials);
			$user = \Sentinel::findById($data['id']);
			$activation = \Activation::create($user);
			\Activation::complete($user, $activation->code);
			\Sentinel::login($user);	
			}
			return redirect()->route('home');

        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e)
			{
			print_r($e->getMessage());
            // return redirect('auth/facebook');
        }
    }
	
	public function handleGoogleCallback(){
        try {
            $fbuser = Socialite::driver('google')->user();
			// print_r($fbuser->);
			// die(); 
			$isSiginUp = \Sentinel::findByCredentials(['login' => $fbuser->email]);
			if(!empty($isSiginUp)){
				
				\Sentinel::login($isSiginUp);
				return redirect()->route('home');
			}
			
			// $credentials = [
				// 'email' => $fbuser->getEmail(),
				// 'username' => $fbuser->getEmail(),
				// 'first_name' => $fbuser->getName(),
				// 'password' => rand(1000, 1000000),
				// 'permissions' =>  ['member' => true]
			// ];
			
			$credentials = [
				'email' => $fbuser->email,
				'username' => $fbuser->email,
				'first_name' => $fbuser->name,
				'password' => rand(1000, 1000000),
				'permissions' =>  ['member' => true],
				 
			];
						
			if(!empty($credentials)){
			$data = \Sentinel::register($credentials);
			$user = \Sentinel::findById($data['id']);
			    $activation = \Activation::create($user);
				\Activation::complete($user, $activation->code);
				\Sentinel::login($user);
			}
			return redirect()->route('home');

        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e)
			{
			print_r($e->getMessage());
            // return redirect('auth/facebook');
        }
		
	}
}
