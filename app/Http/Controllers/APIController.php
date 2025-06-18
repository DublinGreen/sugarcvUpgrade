<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\CoreData;
// use App\Models\TrackRevenue;
use Illuminate\Support\Facades\Validator;
use Socialite;

class APIController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index(Request $request){
		
		$action = $request['action'];
		
		if($action == ''){
			return 'Invalid Request';
		} else {
			if($action == 'get_user_profile'){
				return $this->get_user_profile($request);
			} else if($action == 'update_user_profile'){
				return $this->update_user_profile();
			} else if($action == 'update_user_password'){
				return $this->update_user_password();
			} else if($action == 'contact_us'){
				return $this->contact_us();
			} else if($action == 'ios_email_validate'){
				return $this->ios_email_validate();
			} else if($action == 'ios_userlogin'){
				return $this->ios_userlogin();
			} else if($action == 'ios_usersignup'){
				return $this->ios_usersignup();
			}
		}
		
		return 'Invalid Request';
	}
	
	public function get_user_profile(Request $request){
				
		if(!$request->has("userID")) {
			echo json_encode(array("response_code"=>401,"response"=>"error","message"=>"Invalid Request"));
		} else {
			$userID = urldecode($request['userID']);
			
			$user = \Sentinel::findById($userID);
			
			$user_email	=	$user->email;
			$first_name	=	$user->first_name;
			$last_name	=	$user->last_name;
			$is_publisher	=	$user->is_publisher;
			
			if($is_publisher == '1'){
				///get meta based company
				$usermeta	= new \App\Models\UserMeta;
				$company	= $usermeta->getUserMeta($userID, "company");
			} else {
				$company	=	'';
			}			
			
			echo json_encode(
				array(
					"response_code"		=>	200,
					"response"			=>	"success",
					"message"			=>	"",
					"result"			=>	array(
						"user_email"	=> 	$user_email,
						"first_name"	=>	$first_name,
						"last_name"		=>	$last_name,
						"company"		=>	$company
					)
				)
			);
		}
	}
	
	public function update_user_profile(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
	
	public function update_user_password(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
	
	public function contact_us(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
	
	public function ios_email_validate(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
	
	public function ios_userlogin(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
	
	public function ios_usersignup(Request $request){
		$request['userID'];
		$request['first_name'];
		$request['last_name'];
		$request['user_email'];
	}
}
