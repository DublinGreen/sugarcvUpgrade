<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Repositories\MemberRepository;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class SiteController extends Controller
{
    public function __construct() {
        $this->middleware('admin', ['except' => [
            'getLogin',
            'postLogin',
            'getLogout'
        ]]);
    }

    public function getLogin () {
        return view('backend.login');
        //return view('admin.login');
    }

    public function getIndex () {
      return view('backend.home');
        //return view('admin.home');
    }

    public function getAccountSettings () {
        return view('back.settings');
    }

    public function getLogout () {
        if ($user = \Sentinel::getUser()) {
            \Sentinel::logout($user);
        }
        return redirect()->route('admin.login');
    }

    public function postLogin () {
        $data = \Input::get('data');
		
        try {
            $user = \Sentinel::authenticate([
                'username'  =>  $data['username'],
                'password'  =>  $data['password']
            ], (isset($data['remember'])));

            if (!$user) {
                throw new \Exception('Username / Password do not match.', 1);
                return false;
            }

            $permissions = $user->permissions;
            if (!isset($permissions['admin'])) {
                throw new \Exception('Cannot login here.', 1);
                return false;
            } else if ($permissions['admin'] != 1) {
                throw new \Exception('Cannot login here.', 1);
                return false;
            }
        } catch (\Exception $e) {
            \Sentinel::logout();
			return redirect()->back()->withErrors(['message'   =>  $e->getMessage()]);
        }

		return redirect()->route('admin.home');
    }
	
	public function getChannels() {
		return view('backend.stores.channel');
	}
	
	public function getExtensionFeedback(){
		return view('backend.feedback.extensionFeedback');
	}
	
	public function getExtensionFeedbackList(){
		$feedback = \DB::table("usermeta")->leftJoin('users', 'usermeta.user_id', '=', 'users.id')->select('usermeta.*', 'users.first_name', 'users.last_name', 'users.email')->where('meta_key', 'ext_uninstall_feedback')->orderBy('usermeta.umeta_id', 'desc');
						
		return Datatables::of($feedback)
				->addColumn("name", function($model){
					return $model->first_name.' '.$model->last_name;
				})
				->make(true);
	}
	
	public function settings(){
		return view('backend.settings.index');
	}
	
	public function updatePassword(Request $request){
		
		try{
			$rules = ['old_password' => 'required', 'new_password' => 'required', 'confirm_password' => 'required'];
			$this->validate($request, $rules);
			$input= $request->all();
			
			$current_user = Users::find(\Sentinel::getUser()->id);
			$old_user_password = $current_user->password;
			if(!Hash::check($input['old_password'],$old_user_password)){
				return \Response::json([
					'type'      =>  'error',
					'message'   =>  'Old password is incorrect.'
				]);
			}
			if($input['new_password'] != $input['confirm_password']){
				return \Response::json([
					'type'      =>  'error',
					'message'   =>  'New Password And Confirm Password are not same.'
				]);
			}
			
			$current_user->password = Hash::make($input['new_password']);
			$current_user->save();

			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Password Updated Successfully.',
				'redirect'  =>  ''
			]);
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
}
