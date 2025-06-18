<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\CoreData;
use App\Models\CommissionPayout;

class SettingsController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        
    }

    public function getSendGrid(CoreData $CoreData) {
		$data["sendgrid_apikey"] 	= $CoreData->getMeta("sendgrid_apikey");
		$data["sendgrid_name"] 		= $CoreData->getMeta("sendgrid_name");
		$data["sendgrid_email"] 	= $CoreData->getMeta("sendgrid_email");
        return view('backend.settings.sendgrid.index', ["data" => $data]);
    }

    public function sendGridSave(Request $request, CoreData $CoreData) {
		try {
			if($request->has("sendgrid_apikey")){
				$CoreData->updateMeta("sendgrid_apikey", $request->input("sendgrid_apikey"));
			}
			
			if($request->has("sendgrid_name")){
				$CoreData->updateMeta("sendgrid_name", $request->input("sendgrid_name"));
			}
			
			if($request->has("sendgrid_email")){
				$CoreData->updateMeta("sendgrid_email", $request->input("sendgrid_email"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }
	
    public function getSocialLogin(CoreData $CoreData) {
		$data["facebook_enabled"] 		= $CoreData->getMeta("facebook_enabled");
		$data["facebook_app_id"] 		= $CoreData->getMeta("facebook_app_id");
		$data["facebook_app_secret"] 	= $CoreData->getMeta("facebook_app_secret");
		$data["google_enabled"] 		= $CoreData->getMeta("google_enabled");
		$data["google_app_id"] 			= $CoreData->getMeta("google_app_id");
		$data["google_app_secret"] 		= $CoreData->getMeta("google_app_secret");
        return view('backend.settings.sociallogin.index',["data" => $data]);
    }

    public function socialLoginSave(Request $request, CoreData $CoreData) {
		try {
			if($request->has("facebook_enabled")){
				$CoreData->updateMeta("facebook_enabled", $request->input("facebook_enabled"));
			}
			
			if($request->has("facebook_app_id")){
				$CoreData->updateMeta("facebook_app_id", $request->input("facebook_app_id"));
			}
			
			if($request->has("facebook_app_secret")){
				$CoreData->updateMeta("facebook_app_secret", $request->input("facebook_app_secret"));
			}
			
			if($request->has("google_enabled")){
				$CoreData->updateMeta("google_enabled", $request->input("google_enabled"));
			}
			
			if($request->has("google_app_id")){
				$CoreData->updateMeta("google_app_id", $request->input("google_app_id"));
			}
			
			if($request->has("google_app_secret")){
				$CoreData->updateMeta("google_app_secret", $request->input("google_app_secret"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }
	public function getEmailConfigurations(CoreData $CoreData){
		 $data["offer_amount"] 					= $CoreData->getMeta("offer_amount");
		 $data["offer_period"] 					= $CoreData->getMeta("offer_period");
		 $data["app_bonus"] 					= $CoreData->getMeta("app_bonus");
		 $data["extension_bonus"] 				= $CoreData->getMeta("extension_bonus");
		 $data["signup_bonus_expire_days"] 		= $CoreData->getMeta("signup_bonus_expire_days");
		 $data["signup_bonus_amount"] 			= $CoreData->getMeta("signup_bonus_amount");
		 $data["days_before_bonus_expire30"] 	= $CoreData->getMeta("days_before_bonus_expire30");
		 $data["signup_bonus_min_sale_amt"] 	= $CoreData->getMeta("signup_bonus_min_sale_amt");
		 $data["signup_bonus_extension1"] 		= $CoreData->getMeta("signup_bonus_extension1");
		 $data["signup_bonus_extension2"] 		= $CoreData->getMeta("signup_bonus_extension2");
		 $data["signup_bonus_extension3"] 		= $CoreData->getMeta("signup_bonus_extension3");
		 $data["welcome_series1"] 				= $CoreData->getMeta("welcome_series1");
		 $data["welcome_series2"] 				= $CoreData->getMeta("welcome_series2");
		 $data["welcome_series3"] 				= $CoreData->getMeta("welcome_series3");
		 $data["confirm_email_reminder_days"] 	= $CoreData->getMeta("confirm_email_reminder_days");
		 $data["first_click_email_subject"] 	= $CoreData->getMeta("first_click_email_subject");
		 $data["is_enable_welcome_series1"] 	= $CoreData->getMeta("is_enable_welcome_series1");
		 $data["is_enable_welcome_series2"] 	= $CoreData->getMeta("is_enable_welcome_series2");
		 $data["is_enable_welcome_series3"] 	= $CoreData->getMeta("is_enable_welcome_series3");
		 return view('backend.settings.emailConfigurations.index',["data" => $data]);
	}
	
	public function offerEmailConf(Request $request, CoreData $CoreData){
		try {
			if($request->has("offer_amount")){
				$CoreData->updateMeta("offer_amount", $request->input("offer_amount"));
			}
			
			if($request->has("offer_period")){
				$CoreData->updateMeta("offer_period", $request->input("offer_period"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function appExtensionDownloadBonus(Request $request, CoreData $CoreData){
		
		try {
			
			if($request->has("app_bonus")){
				$CoreData->updateMeta("app_bonus", $request->input("app_bonus"));
			}
			
			if($request->has("extension_bonus")){
				$CoreData->updateMeta("extension_bonus", $request->input("extension_bonus"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	
	public function firstPurchaseEmailConf(Request $request, CoreData $CoreData){
		
		try {
			
			if($request->has("signup_bonus_expire_days")){
				$CoreData->updateMeta("signup_bonus_expire_days", $request->input("signup_bonus_expire_days"));
			}
			
			if($request->has("signup_bonus_amount")){
				$CoreData->updateMeta("signup_bonus_amount", $request->input("signup_bonus_amount"));
			}
			
			if($request->has("days_before_bonus_expire30")){
				$CoreData->updateMeta("days_before_bonus_expire30", $request->input("days_before_bonus_expire30"));
			}
			
			if($request->has("signup_bonus_min_sale_amt")){
				$CoreData->updateMeta("signup_bonus_min_sale_amt", $request->input("signup_bonus_min_sale_amt"));
			}
			
			if($request->has("signup_bonus_extension1")){
				$CoreData->updateMeta("signup_bonus_extension1", $request->input("signup_bonus_extension1"));
			}
			
			if($request->has("signup_bonus_extension2")){
				$CoreData->updateMeta("signup_bonus_extension2", $request->input("signup_bonus_extension2"));
			}
			
			if($request->has("signup_bonus_extension3")){
				$CoreData->updateMeta("signup_bonus_extension3", $request->input("signup_bonus_extension3"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function welcomeSeriesEmail(Request $request, CoreData $CoreData){
		
		try {
			
			if($request->has("welcome_series1")){
				$CoreData->updateMeta("welcome_series1", $request->input("welcome_series1"));
			}
			
			if($request->has("welcome_series2")){
				$CoreData->updateMeta("welcome_series2", $request->input("welcome_series2"));
			}
			
			if($request->has("welcome_series3")){
				$CoreData->updateMeta("welcome_series3", $request->input("welcome_series3"));
			}
			
			if($request->has("is_enable_welcome_series1")){
				$CoreData->updateMeta("is_enable_welcome_series1", $request->input("is_enable_welcome_series1"));
			} else {
				$CoreData->updateMeta("is_enable_welcome_series1", '0');
			}
			
			if($request->has("is_enable_welcome_series2")){
				$CoreData->updateMeta("is_enable_welcome_series2", $request->input("is_enable_welcome_series2"));
			} else {
				$CoreData->updateMeta("is_enable_welcome_series2", '0');
			}
			
			if($request->has("is_enable_welcome_series3")){
				$CoreData->updateMeta("is_enable_welcome_series3", $request->input("is_enable_welcome_series3"));
			} else {
				$CoreData->updateMeta("is_enable_welcome_series3", '0');
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function confirmEmailAfterSignup(Request $request, CoreData $CoreData){
		
		try {
			
			if($request->has("confirm_email_reminder_days")){
				$CoreData->updateMeta("confirm_email_reminder_days", $request->input("confirm_email_reminder_days"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function firstEmailClickSubject(Request $request, CoreData $CoreData){
		
		try {
			
			if($request->has("first_click_email_subject")){
				$CoreData->updateMeta("first_click_email_subject", $request->input("first_click_email_subject"));
			}
			
            return \Response::json([
                'type'  =>  'success',
                'message'   =>  "Updated successfully."
            ]);
		} catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function getCommissionPayout() {
		return view('backend.settings.commission-payout.index');
	}
	
	public function getCommissionPayoutList() {
		return Datatables::of(CommissionPayout::orderBy('id', 'desc'))
				->addColumn('action', function ($model) {
					return view('backend.settings.commission-payout.action')->with(['model'=> $model]);
				})
				->rawColumns(['action'])
				->addIndexColumn()
				->make(true);
	}
	
	public function getCommissionPayoutStore($id) {
        try {
			$commissionpayout = CommissionPayout::find($id);
			return \Response::json([
				'type'      =>  'success',
				'data'		=>  $commissionpayout
			]);
        } catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
        }

	}
	
	public function commissionPayoutStore(Request $request){
        try {
			$this->validate($request, ["commission_type" => "required"]);
			$commission_type = $request->input('commission_type');
			CommissionPayout::create(["publisher_comm_type" => $commission_type]);
        } catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
        }

        return \Response::json([
            'type'      =>  'success',
            'message'   =>  'Commission added successfully.',
            'redirect'  =>  route('admin.settings.CommissionPayout')
        ]);
	}
	
	public function commissionPayoutUpdate(Request $request){
        try {
			$this->validate($request, ["type_id" => "required", "commission_type" => "required"]);
			$id = $request->input('type_id');
			$commission_type = $request->input('commission_type');
			CommissionPayout::where("id", $id)->update(["publisher_comm_type" => $commission_type]);
        } catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
        }

        return \Response::json([
            'type'      =>  'success',
            'message'   =>  'Commission updated successfully.',
            'redirect'  =>  route('admin.settings.CommissionPayout')
        ]);
	}
	
	public function commissionPayoutDelete(Request $request){
        try {
			$this->validate($request, ["id" => "required"]);
			$id = $request->input('id');
			CommissionPayout::where("id", $id)->delete();
        } catch (\Exception $e) {
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
        }

        return \Response::json([
            'type'      =>  'success',
            'message'   =>  'Commission Deleted successfully.',
            'redirect'  =>  route('admin.settings.CommissionPayout')
        ]);
	}

}
