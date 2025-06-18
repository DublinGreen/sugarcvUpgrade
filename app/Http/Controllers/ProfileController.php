<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\CoreData;
use App\Models\TrackRevenue;
use App\Models\ReferFriends;
use App\Models\Buyhouse;
use App\Models\Plans;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Facades\Datatables;

class ProfileController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->middleware('member', ['except' => []]);
    }
	
    public function index() {
        //
    }
	
    public function getProfile() {
        return view('frontend.profile.MyPoints');
    }
	
    public function getEditProfile() {
		$user = \Sentinel::getUser();
		$plan = \App\Models\UserPlans::where(["user_id" => $user->id, "status" => 1])->orderBy('id','DESC')->first();
        $planList = Plans::where("status", 0)->get();
		return view('frontend.profile.editProfile', compact('user', 'plan','planList'));
    }
	
    public function updateProfile(Request $request) {
		try{
			$user = \Sentinel::getUser();
			if($request->has('change_password')){
				$validator =  Validator::make($request->all(), ["password" => 'required|min:4|required_with:repeat_password|same:repeat_password|without_spaces','repeat_password' => 'required|min:4']);
				if ($validator->fails()) {
					throw new \Exception($validator->errors()->first(), 1);
					return false;
				}
				$pwd = $request->input('password');
				$data = ["password" => $pwd];
			} 
			$validator =  Validator::make($request->all(), ["first_name" => "required", "last_name" => "required", "email" => "required|unique:users,email,".$user->id]);
			if ($validator->fails()) {
				throw new \Exception($validator->errors()->first(), 1);
				return false;
			}
			$fname = $request->input('first_name');
			$lname = $request->input('last_name');
			$email = $request->input('email');
			$phone = $request->input('phone');
			$data = ["email" => $email, "first_name" => $fname, "last_name" => $lname, "phone" => $phone];
			
			\Sentinel::update($user, $data);
			return \Response::json([
				'type'  =>  'success',
				'message'   =>  "Your profile has been updated."
			]);				
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }
	
	public function screenRecord(Request $request){
		$this->validate($request, [
			'record' => 'required',
			'pageId' => 'required',
			'userId' => 'required'
		]);
		$pageId = $request->input('pageId');
		$events = $request->input('record');
		$userId = $request->input('userId');
		$record = \DB::table('user_record')->where(['page_id' => $pageId, 'user_id' => $userId]);
		if($record->count()){
			$record->update(['events' => $events]);
		}else{
			\DB::table('user_record')->insert([
				'user_id' => $userId,
				'page_id' => $pageId,
				'events' => $events
			]);
		}
		
		return \Response::json([
			'type'  =>  'success',
			'message'   =>  "updated"
		]);				
	}
	
}
