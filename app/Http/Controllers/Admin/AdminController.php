<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Yajra\Datatables\Facades\Datatables;
use App\Models\Users;
use App\Models\ResumeBasicDetail;
use App\Models\UserMeta;
use App\Models\ReferFriends;
use App\Models\UserPlans;
use App\Models\Plans;
use Illuminate\Support\Facades\Hash;
use validator;
use Sentinel;
class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }
	
	public function add_admin(){
		
		 return view('backend.users.add-admin');
	}
	public function saveadminprofile(Request $request){
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
					'permissions' =>  ['admin' => true]					
					];
					
					$user = \Sentinel::registerAndActivate($credentials);
					//update phone no -> not update in credentials
					Users::where('id', $user['id'])->update(['phone' => $request->mobile, 'admin' => 1]);
				
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Admin added successfully.'
				
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
		 //return view('backend.users.add-user');
	}
	
	
    public function admin_list() {		
		$users_detail = Users::where('is_delete', 0)->where('id','!=',1)->where('admin',1)->orderBy('id', 'desc')->paginate(9);
		$plans = Plans::where('status', 0)->orderBy('id', 'asc')->get(['id','name']);
        return view('backend.users.admin-list',["users_detail" => $users_detail,"plans" => $plans]);
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
				'message'   =>  'User details updated successfully.'
				
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
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
	
	
	
	
	
	public function lock_admin(Request $request){
		// echo 123;
		$user = Users::find($request->input('id'));
		$user->is_ban = $request->input('action');
		$user->save();
		
		if($request->input('action') == 1){
			$message = "Admin locked successfully.";
		}else if($request->input('action') == 0){
			$message = "admin unlocked successfully.";
		}
		
		return \Response::json([
			'type'      =>  'success',
			'message'   =>  $message
		]);
	}
	
	
    

}
