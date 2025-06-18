<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\Users;
use App\Models\ResumeBasicDetail;
use App\Models\UserMeta;
use App\Models\ReferFriends;
use App\Models\UserPlans;
use App\Models\Plans;
use Illuminate\Support\Facades\Hash;
use validator;
class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }
	
	// ajax usersearch by admin
	public function searchuser(Request $request){
		try{
		$query=  $request->q;
		
		$data = Users::where('first_name', 'LIKE', '%'.$query.'%')->orwhere('phone', 'LIKE', '%'.$query.'%')->orwhere('email', 'LIKE', '%'.$query.'%')->select('id','first_name','last_name','phone')->where('admin',0)->paginate(9);
			if(!empty($data)){
				foreach($data as $user){
				echo $html='<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch" style="float:left">
					  <div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
						  Digital Strategist
						</div>
						<div class="card-body pt-0">
						  <div class="row">
							<div class="col-7">
							  <h2 class="lead"><b>'.$user->first_name.' '.$user->last_name.'</b></h2>
							  
							  <ul class="ml-4 mb-0 fa-ul text-muted">
								<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <p>Address: '.$user->resume_basic_detail->street.' '.$user->resume_basic_detail->city.'&nbsp;'.$user->resume_basic_detail->state.'</p> </li>
								<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:+'.$user->phone.'</li>
							  </ul>
							</div>
							<div class="col-5 text-center">
							  <img src="'.url("/asset_new/img/user/user.jpg").'" alt="" class="img-circle img-fluid">
							</div>
						  </div>
						</div>
						<div class="card-footer">
						  <div class="text-right">
							<a href="'.route('admin.user-delete',['id' => $user->id]).'" class="btn btn-sm btn-danger">
							  <i class="fas fa-trash"></i> Delete
							</a>
							<a href="'.route('admin.user-profile',['id' => $user->id]).'" class="btn btn-sm btn-primary">
							  <i class="fas fa-user"></i> View Profile
							</a>
						  </div>
						</div>
					  </div>
					</div>';
				}
			}
			else
			{
				echo $html='<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch" >
					  <div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
						  Digital Strategist
						</div>
						<div class="card-body pt-0">
						  <div class="row">
							<div class="col-7">No Result Found</div>
						  </div>	
						</div>
				     </div>
				   </div>';
			}
	   }
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
    public function index() {		
		$users_detail = Users::where('is_delete', 0)->where('admin',0)->orderBy('id', 'desc')->paginate(9);
		
		$plans = Plans::where('status', 0)->orderBy('id', 'asc')->get(['id','name']);
        return view('backend.users.index',["users_detail" => $users_detail,"plans" => $plans]);
    }
	
    public function filterByPlan($id) {		
		$users_detail = Users::join('user_plans', 'users.id', '=', 'user_plans.user_id')->where(['users.is_delete' => 0, 'user_plans.plan_id' => $id])->orderBy('users.id', 'desc')->where('users.admin',0)->paginate(9);
		$plans = Plans::where('status', 0)->orderBy('id', 'asc')->get(['id','name']);
        return view('backend.users.index',["users_detail" => $users_detail,"plans" => $plans, 'selected' => $id]);
    }
	
	 public function userprofile(Request $request, $id) {
		$user = Users::find($id);
        return view('backend.users.user-profile',["user" => $user]);
    }
	public function deleteuserprofile(Request $request, $id) {
		try{
			if(isset($id)){
				$user = Users::where('id', $id)->update(['is_delete' => 1]);
			}
       return redirect()->back()->with('message-success', 'User deleted successfully');
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }
	
	public function add_user(){
		
		 return view('backend.users.add-user');
	}
	public function saveuserprofile(Request $request){
		try{
			
			$rules = [
				"first_name" => "required",
				"last_name" => "required",
				"email" => "required",
				"mobile" => "required",
				"password" => "required"
			]; 
			$validator =  Validator::make($request->all(), $rules);
            if ($validator->fails()) {
				$err_list = "<ul>";
				foreach($validator->errors()->all() as $error){
					$err_list .= "<li>".$error."</li>";
				}
				$err_list .= "</ul>";
                throw new \Exception($err_list, 1);
                return false;
            }
			
					  $credentials = [
					'first_name'    => $request->first_name,
					'last_name'    => $request->last_name,
					'phone' => $request->mobile,
					'email' => $request->email,
					'username' => $request->email,
					'password' => $request->password,					
					'permissions' =>  ['member' => true]
					];
					
					$user = \Sentinel::registerAndActivate($credentials);
					//update phone no -> not update in credentials
					Users::where('id', $user['id'])->update(['phone' => $request->mobile]);
				
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'User added successfully.'
				
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
		 //return view('backend.users.add-user');
	}
	
	
	public function updateuserprofile(Request $request){
		
		try{
				
			$rules = ['username' => 'required', 'email' => 'required','mobile' => 'required'];
				$id = $request->user_id;
				$mobile = $request->mobile;
				
				$username = $request->username;
				$name = explode(' ', $username);
				$first_name = $name[0];
				$last_name = $name[1];			
			
			$update = [
				'first_name' => $first_name, 
				'last_name' => $last_name,
				'email' => $request->email,
				'phone' => $mobile 
			];
			
			if($request->has('password')){
				$rules['password'] = "min:4|required_with:confirmpassword|same:confirmpassword";
				$rules['confirmpassword'] = "min:4";
				$pass = $request->input('password');
				$password = 	Hash::make($pass);	
						
				//$update['password'] = $password;	
					Users::where('id', $id)->update(['password' => $password]);
			}
			if($request->has('profile')){
				$rules['profile'] = "required|mimes:jpeg,png,jpg|max:5048";
			}			
			$this->validate($request, $rules);
			if($request->hasFile('profile')){
				if ($request->file('profile') != "") {
					$file = $request->file('profile');
					$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
					$file->move('images/users/', $fileName);
					$UserMeta->updateUserMeta($id, 'image_url', $fileName);
				}
			}
			
			// $user = \Sentinel::findById($id);			
			// \Sentinel::update($user, $update);
			
		Users::where('id', $id)->update(['first_name' => $first_name, 'last_name' => $last_name, 'email' => $request->email, 'phone' => $request->mobile]);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Profile details updated successfully.'
				
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	


    public function getList(Request $request){
		if($request->has("filter")){
			$filter = $request->input("filter");
			if($filter == "unsubscribed"){				
				$users = Users::where("is_unsubscribed", 1);
			} elseif($filter == "cash_requested"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","cash_request"],["usermeta.meta_value","=","0"]])->select(["users.*"]);
			} elseif($filter == "cash_approved"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","cash_request"],["usermeta.meta_value","=","1"]])->select(["users.*"]);
			} elseif($filter == "cash_rejected"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","cash_request"],["usermeta.meta_value","=","2"]])->select(["users.*"]);
			} elseif($filter == "partners_users"){
				$users = Users::where("is_publisher", 1);			
			} elseif($filter == "buy_house"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","buy_house"],["usermeta.meta_value","=","1"]])->select(["users.*"]);
			} elseif($filter == "missing_cash_back_users"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","missing_cb_request"],["usermeta.meta_value","=","1"]])->select(["users.*"]);
			} elseif($filter == "survey_questions"){
				$users = Users::leftjoin("usermeta", "users.id", "=", "usermeta.user_id")
				->where([["usermeta.meta_key","=","category_shop"],["usermeta.meta_value","!=",""]])->select(["users.*"]);
			} elseif($filter == "disabled"){
				$users = Users::where("is_disabled", 1);
			} else{
				$users = Users::orderBy('id', 'desc');
			}
		}else{
			$users = Users::orderBy('id', 'desc');
		}
		
		return Datatables::of($users)
				->addColumn('role', function ($model) {
					return strpos($model->permissions, 'admin') !== false ? "admin" : "user";
				})
				->addColumn('status', function ($model) {
					return "Need Confirmation";
				})
				->addColumn('signup_from', function ($model) {
					return "Signup Banner";
				})
				->addColumn('verification', function ($model) {
					return view('backend.users.verification')->with('model', $model);
				})
				->addColumn('member_type', function ($model) {
					return "Basic";
				})
				->addColumn('action', function ($model) {
					return view('backend.users.userAction')->with(['model'=> $model]);
				})
				
				->rawColumns(['verification','action'])
				
				->make(true);
    }
	
	
	
	public function edit($id){
		$user = Users::find($id);
		return view('backend.users.edit', ["user" => $user]);
	}
	
	
	public function update($id, Request $request, UserMeta $UserMeta)
	{
		try{
			
			$rules = ['first_name' => 'required', 'last_name' => 'required'];
			$update = [
				'first_name' => $request->input('first_name'), 
				'last_name' => $request->input('last_name')
			];
			if($request->has('password')){
				$rules['password'] = "min:4|required_with:cpassword|same:cpassword";
				$rules['cpassword'] = "min:4";
				$update['password'] = $request->input('password');
			}
			if($request->has('profile')){
				$rules['profile'] = "required|mimes:jpeg,png,jpg|max:5048";
			}
			$this->validate($request, $rules);
			if($request->hasFile('profile')){
				if ($request->file('profile') != "") {
					$file = $request->file('profile');
					$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
					$file->move('images/users/', $fileName);
					$UserMeta->updateUserMeta($id, 'image_url', $fileName);
				}
			}
			$user = \Sentinel::findById($id);
			\Sentinel::update($user, $update);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'User updated successfully.',
				'redirect'  =>  route('admin.users')
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function getUserReferralsList($id){
		try{
			$referrals = ReferFriends::where("refer_by", $id);
			if(isset($_GET['sDate']) && isset($_GET['eDate'])){
				$start_db1 	= 	date("Y-m-d 00:00:00", $_GET['sDate']);
				$start_db 	= 	date("Y-m-d 00:00:00", strtotime("$start_db1 + 1 days"));
				$end_db 	= 	date("Y-m-d 23:59:59", $_GET['eDate']);
				$referrals = $referrals->where(function($query) use($start_db, $end_db){
								$query->whereBetween("active_date", [$start_db, $end_db]);
								$query->orwhereBetween("active_shopper_date", [$start_db, $end_db]);
								$query->orwhereBetween("premium_member_date", [$start_db, $end_db]);
								$query->orwhereBetween("credit_card_date", [$start_db, $end_db]);
								$query->orwhereBetween("date", [$start_db, $end_db])->get();
							});
			}
			$referrals = $referrals->orderBy('id', 'desc');
			return Datatables::of($referrals)
					->editColumn('signupdate', function ($model) {
						return ($model->date != '0000-00-00 00:00:00')?date('m-d-Y',strtotime($model->date)):'-'; 
					})
					->addColumn('name', function ($model) {
						$user = \Sentinel::findByCredentials(["login" => $model->email]);
						if($user){
							return $user->first_name." ".$user->last_name;							
						} else {
							return "-";
						}
					})
					->editColumn('active_shopper_date', function ($model) {
						return ($model->active_shopper_date != '0000-00-00 00:00:00')?date('m-d-Y',strtotime($model->active_shopper_date)):'-';
					})
					->addColumn('first_purchase_referral', function ($model) {
						if($model->active_shopper_cb != ''){
							$first_purchase_referral = $model->active_shopper_cb;
						}elseif($model->active_shopper_expected != ''){
							$first_purchase_referral = $model->active_shopper_expected;
						}else{
							$first_purchase_referral = 0;
						}
						return '$'.$first_purchase_referral;
					})
					->editColumn('premium_purchase_date', function ($model) {
						return ($model->premium_member_date != '0000-00-00 00:00:00')?date('m-d-Y',strtotime($model->premium_member_date)):'-';
					})
					->addColumn('premium_purchase_referral', function ($model) {
						if($model->premium_member_cb != ''){
							$premium_purchase_referral = $model->premium_member_cb;
						}elseif($model->premium_member_expected != ''){
							$premium_purchase_referral = $model->premium_member_expected;
						}else{
							$premium_purchase_referral = 0;
						}
						return '$'.$premium_purchase_referral;

					})
					->make(true);
			
		} catch(\Exception $e){
			echo $e->getMessage();
		}
	}
	
	public function manual_subscribe(Request $request){
		try{
			$rules = ['plan' => 'required', 'u_id' => 'required'];
			$validator =  Validator::make($request->all(), $rules);
            if ($validator->fails()) {
				$err_list = "<ul>";
				foreach($validator->errors()->all() as $error){
					$err_list .= "<li>".$error."</li>";
				}
				$err_list .= "</ul>";
                throw new \Exception($err_list, 1);
                return false;
            }

			$user =  new UserPlans;
			
			$user->plan_id = $request->input('plan');
			$user->user_id = $request->input('u_id');
			$user->status = '1';
			$user->save();
		
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'User subscribed successfully.',
				'redirect'  =>  $request->input('redirect')
			]);
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function lock_user(Request $request){
		// echo 123;
		$user = Users::find($request->input('id'));
		$user->is_ban = $request->input('action');
		$user->save();
		
		if($request->input('action') == 1){
			$message = "User locked successfully.";
		}else if($request->input('action') == 0){
			$message = "User unlocked successfully.";
		}
		
		return \Response::json([
			'type'      =>  'success',
			'message'   =>  $message
		]);
	}
	
	public function userResume(){
		return view('backend.users.resumeList');
	}
	
    public function getResumeList(Request $request){
		$resume = ResumeBasicDetail::where('user_id', '!=',null)->orderBy('id', 'desc');
		
		return Datatables::of($resume)
				->addColumn('resume_name', function ($model) {
					return $model->resume_name != null ? $model->resume_name : $model->first_name."_".$model->last_name."_".$model->id;
				})
				->addColumn('user', function ($model) {
					return $model->user->first_name." ".$model->user->last_name;
				})
				->addColumn('name', function ($model) {
					return $model->first_name." ".$model->last_name;
				})
				->addColumn('email', function ($model) {
					return $model->email;
				})
				->addColumn('last_modify', function ($model) {
					return date('M d, Y', strtotime($model->updated_at));
				})
				->addColumn('action', function ($model) {
					return view('backend.users.action', compact('model'));
				})
				->rawColumns(['action'])
				->make(true);
    }
	
	public function userResumeEdit($id){
		$resume = ResumeBasicDetail::find($id);
		return view('backend.users.resumeEdit', compact('resume', 'id'));
	}

}
