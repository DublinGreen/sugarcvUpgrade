<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CoreData;
use App\Models\Offers;
use App\Models\Users;
use Yajra\Datatables\Facades\Datatables;
use App\Models\TrackRevenue;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
   /*  public function __construct() {
        $this->middleware('admin');
    } */

    public function index() {
        
    }

    public function settings(CoreData $CoreData) {
		$data["morning_subject"] 	= $CoreData->getMeta("morning_subject");
		$data["morning_offers"] 	= $CoreData->getMeta("morning_offers");
		$data["morning_banner"] 	= $CoreData->getMeta("morning_banner");
		$data["evening_subject"] 	= $CoreData->getMeta("evening_subject");
		$data["evening_offers"] 	= $CoreData->getMeta("evening_offers");
		$data["evening_banner"] 	= $CoreData->getMeta("evening_banner");
        return view('backend.emails.index', ["data" => $data]);
    }
	
	public function updateSettings(Request $request, CoreData $CoreData) {
		try {
			if($request->has("email_type")){
				if($request->input("email_type") == "morning"){
					
					$rules = ['morning_subject' => 'required', 'morning_offers' => 'required'];
					if($request->has('morning_banner')){
						$rules['morning_banner'] = "required|mimes:jpeg,png,jpg|max:1024";
					}
					$this->validate($request, $rules);					
					if($request->has("morning_subject")){
						$CoreData->updateMeta("morning_subject", $request->input("morning_subject"));
					}
					if($request->has("morning_offers")){
						$CoreData->updateMeta("morning_offers", $request->input("morning_offers"));
					}
					if($request->hasFile('morning_banner')){
						if ($request->file('morning_banner') != "") {
							$file = $request->file('morning_banner');
							$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
							$file->move('images/banners/', $fileName);
							$CoreData->updateMeta("morning_banner", $fileName);
						}
					}
				}
				if($request->input("email_type") == "evening"){
					
					$rules = ['evening_subject' => 'required', 'evening_offers' => 'required'];
					if($request->has('evening_banner')){
						$rules['evening_banner'] = "required|mimes:jpeg,png,jpg|max:1024";
					}
					$this->validate($request, $rules);					
					if($request->has("evening_subject")){
						$CoreData->updateMeta("evening_subject", $request->input("evening_subject"));
					}
					if($request->has("evening_offers")){
						$CoreData->updateMeta("evening_offers", $request->input("evening_offers"));
					}
					if($request->hasFile('evening_banner')){
						if ($request->file('evening_banner') != "") {
							$file = $request->file('evening_banner');
							$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
							$file->move('images/banners/', $fileName);
							$CoreData->updateMeta("evening_banner", $fileName);
						}
					}
					
					
					
				}
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
	
	public function preview($type,CoreData $CoreData) {
		if($type == "morning" || $type == "evening"){
			
			$data["type"] 		= $type;
			$data["subject"] 	= $CoreData->getMeta($type."_subject");
			$data["offers"] 	= $CoreData->getMeta($type."_offers");
			$data["banner"] 	= $CoreData->getMeta($type."_banner");
			$offers = explode(',', $data["offers"]);
			$offers = Offers::whereIn('id',$offers)->get(['title','']);
			
			return view('backend.emails.preview', compact('data', 'offers'));
			
		}else{
			return redirect()->route('admin.emails.deals');
		}
		// $data["morning_subject"] 	= $CoreData->getMeta("morning_subject");
		// $data["morning_offers"] 	= $CoreData->getMeta("morning_offers");
		// $data["morning_banner"] 	= $CoreData->getMeta("morning_banner");
		// $data["evening_subject"] 	= $CoreData->getMeta("evening_subject");
		// $data["evening_offers"] 	= $CoreData->getMeta("evening_offers");
		// $data["evening_banner"] 	= $CoreData->getMeta("evening_banner");
        // return view('backend.emails.index', ["data" => $data]);
    }

	public function getOfferEmail(CoreData $CoreData) {
        return view('backend.emails.getOfferEmail');
    }

	public function offerEmailFilter(Request $request, CoreData $CoreData) {
		if(!isset($_GET['filter']) || $_GET['filter'] == "-1"){
			return Datatables::of([])->make(true);
		}
		if(isset($_GET['sdate']) && $_GET['sdate'] != '' && isset($_GET['edate']) && $_GET['edate'] != ''){
			$sdate_mdy  = $_GET['sdate'];
			$edate_mdy  = $_GET['edate'];
			$sdate = explode('-',$sdate_mdy);
			$edate = explode('-',$edate_mdy);
			
			if($sdate != ''){$start_date = trim($sdate[2]).'-'.$sdate[0].'-'.$sdate[1];}
			if($edate != ''){$end_date   = trim($edate[2]).'-'.$edate[0].'-'.$edate[1];}
			
			$extend = " and u.created_at >= '$start_date 00:00:00' and u.created_at <= '$end_date 23:59:59'";
			
		}
		$CoreData->updateMeta("offer_email_group", $request->input('filter'));
		if($request->input('filter') == 0){
			$sql = "select t.user_id, count(t.track_id) as total_orders, u.first_name, u.last_name, u.email from `track_revenue` as t, users as u where t.affiliate_with != 'Refer' and t.affiliate_with != 'Survey' and t.affiliate_with !='extension' and t.status !='2'".$extend." and t.user_id = u.ID group BY t.user_id";		
		} else {
			$sql = "select t.user_id, count(track_id) as total_orders from, u.first_name, u.last_name, u.email `track_revenue` as t, users as u where t.affiliate_with != 'Refer' and t.affiliate_with != 'Survey' and t.affiliate_with !='New User' and t.affiliate_with != 'Credit Card' and t.affiliate_with !='extension' and t.pointsAssigned = '1' and t.sale_amount != '0' and t.is_returned = '0' and t.status != '2'".$extend." and t.user_id = u.ID group BY t.user_id";
		}

		$users = \DB::select($sql);
		$user_ids = [];
		foreach($users as $user){
			$user_ids[]=$user->user_id;
		}
		$user_ids = @implode(',', $user_ids);
		$CoreData->updateMeta("offer_email_users", $user_ids);
		
		// $users =[];
		// for($i=1; $i<50;$i++){
			// $users[] = (object)["first_name" => "user_".$i, "last_name" => "user_".$i, "email"=>"user".$i."@gmail.com", "user_id" => $i];
		// }
		
		return Datatables::of($users)
				->addColumn("name", function($model){
					return $model->first_name.' '.$model->last_name;
				})
				->addColumn('action', function ($model) {
					return '<input data-name="'.$model->first_name.' '.$model->last_name.'" type="checkbox" class="selectBox" value="'.$model->user_id.'" />';
				})
				->rawColumns(['action'])
				->make(true);
    }

	public function offerEmailFilterRequest(Request $request, CoreData $CoreData){
		$no_of_orders = $request->input('order');
		$start_date = $request->input('sdate');
		$end_date = $request->input('edate');
		$msg = ' from '.date('dMY',strtotime($start_date)).' to '.date('dMY',strtotime($end_date));
		$email_cohort = $this->NumberFormatter($no_of_orders, $msg);
		$ids = $request->input('ids');
		if($ids != 'allselected'){
			$CoreData->updateMeta("offer_email_users", $ids);
		}
		
		$data['offer_email_content'] = urldecode($CoreData->getMeta("offer_email_content"));
		$data['offer_email_subject'] = $CoreData->getMeta("offer_email_subject");
		return view('backend.emails.emailTemplate', compact('data', 'email_cohort'));	
	}
	
	public function NumberFormatter($filter, $msg){
		if($filter == '0'){
			$word = 'Zero';
		} elseif($filter == '1'){
			$word = 'First';
		} elseif($filter == '2'){
			$word = 'Second';
		} elseif($filter == '3'){
			$word = 'Third';
		} elseif($filter == '4'){
			$word = 'Fourth';
		} elseif($filter == '5'){
			$word = 'Fifth';
		} elseif($filter == '6'){
			$word = 'Sixth';
		} elseif($filter == '7'){
			$word = 'Seven';
		} elseif($filter == '8'){
			$word = 'Eight';
		} elseif($filter == '9'){
			$word = 'Nine';
		} elseif($filter == '10'){
			$word = 'Ten';
		}
		return $word.' purchase users'.$msg;
	}
	
	public function offerEmailSaveContent(Request $request, CoreData $CoreData){
		try{
			$rules = [
				"offer_email_content" => "required",
				"offer_email_subject" => "required",
				"email_cohort"		  => "required"
			];
			$validator = Validator::make($request->all(), $rules);
			if($validator->fails()){
				throw new \Exception($validator->errors()->first(), 1);
			}
			$content = urlencode($request->input('offer_email_content'));
			$subject = $request->input('offer_email_subject');
			$description = $request->input('email_cohort');
			
			
			$CoreData->updateMeta("offer_email_content", $content);
			$CoreData->updateMeta("offer_email_subject", $subject);
			$CoreData->updateMeta("offer_email_description", $description);
			
			// $request->session()->put('offer_email_content', urldecode($content));
			
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Redirecting...',
				'redirect'  =>  route('admin.offerEmail.preview')
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function offerEmailPreview(Request $request, CoreData $CoreData){
		$offer_amount = $CoreData->getMeta("offer_amount");
		$offer_period = $CoreData->getMeta("offer_period");
		$offer_email_content = urldecode($CoreData->getMeta("offer_email_content"));
		// $offer_email_content = $request->session()->get('offer_email_content');
		$offer_email_content = str_replace("{{AMOUNT}}", '<span style="color:#fe432c;">$'.$offer_amount. ' BONUS</span>' , $offer_email_content);
		$offer_email_content = str_replace("{{DAYS}}", '<span style="color:#fe432c;">'.$offer_period.' DAYS!</span>', $offer_email_content);
		
		return view('backend.emails.offerEmailPreview', compact('offer_email_content'));
	}
	
	public function sendTestOfferEmail(Request $request, CoreData $CoreData){
		try{
			$rules = ["emails" => "required"];
			$validator = Validator::make($request->all(), $rules);
			if($validator->fails()){
				throw new \Exception($validator->errors()->first(), 1);
			}
			$emails = $request->input('emails');
			$emails = explode(',', $emails);
			$emails = array_unique($emails);
			
			$offer_amount = $CoreData->getMeta("offer_amount");
			$offer_period = $CoreData->getMeta("offer_period");
			$offer_email_subject = $CoreData->getMeta("offer_email_subject");
			$offer_email_content = urldecode($CoreData->getMeta("offer_email_content"));
			// $offer_email_content = $request->session()->get('offer_email_content');
			$offer_email_content = str_replace("{{AMOUNT}}", '<span style="color:#fe432c;">$'.$offer_amount. ' BONUS</span>' , $offer_email_content);
			$offer_email_content = str_replace("{{DAYS}}", '<span style="color:#fe432c;">'.$offer_period.' DAYS!</span>', $offer_email_content);
						
			\Mail::send('backend.emails.sendTestOfferEmail', compact('offer_email_content'), function($message) use ($emails, $offer_email_subject){
					// $message->to($user->email);
					$message->to($emails);
					$message->subject($offer_email_subject);
				});
						
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Email sent.',
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function offerEmailSchedule(Request $request, CoreData $CoreData){
		try{		
			$schedule_time 		= $_POST['schedule_time'];
			$user_ids 			= $CoreData->getMeta("offer_email_users");
			$cashback 			= $CoreData->getMeta("offer_amount");
			$days 				= $CoreData->getMeta("offer_period");
			
			$message 			= $CoreData->getMeta("offer_email_content");
			$subject 			= $CoreData->getMeta("offer_email_subject");
			$description 		= $CoreData->getMeta("offer_email_description");
			$purchase_group     = $CoreData->getMeta("offer_email_group");
			
			$datetime_array 	= explode(" ",$schedule_time);
			$date_array        	= explode("-",$datetime_array[0]);
			$time_array        	= explode(":",$datetime_array[1]);
			
			$cron_time_format = $date_array[2]."-". $date_array[0]."-". $date_array[1]." ".$time_array[0].":".$time_array[1].":00";
			$cron_time_format = strtotime($cron_time_format);

			$email_date = time();
						
			\DB::table('schedule_email_offers')->insert([
				'cashback_amount' => $cashback,
				'days_limit' => $days,
				'schedule_time' => $cron_time_format,
				'recipient_ids' => $user_ids,
				'total_purchases' => $purchase_group,
				'email_date' => $email_date,
				'subject' => $subject,
				'message' => $message,
				'description' => $description
			]);
						
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Schedule Setup successfully',
				'redirect'  => route('admin.offerEmail')
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function getOffersEmailListView(){
		return view('backend.emails.getOffersEmailListView');
	}
	
	public function getOffersEmailList(){
		$list = \DB::table('schedule_email_offers')->orderBy('id', 'desc');
		return Datatables::of($list)
		->editColumn("schedule_time", function($model){
			return date('m-d-Y h:i A',$model->schedule_time);
		})
		->addColumn("users", function($model){
			$recipient_ids = explode(',',$model->recipient_ids);
			$failed_ids    = explode(',',$model->failed_ids);
			$email_sent_ids= array_diff($recipient_ids, $failed_ids);
			return "<a title='View users' href='".route('admin.offerEmail.user', ['id' => $model->id])."' style='text-decoration:underline'>".count($recipient_ids)." (".count($email_sent_ids).")</a>";

		})
		->editColumn("status", function($model){
			$status = "";
			if($model->status == 0){
				$status = "Pending";
				$email_sent_ids = array();
			}elseif($model->status == 1){
				$status = "Email Sent";
			}
			return $status;

		})
		->editColumn("shopped_users", function($model){
			$shopped_users = $model->shopped_users;
			$shopped_users = explode(',',$shopped_users);
			$shopped_users = array_filter($shopped_users);  
			$shopped_users = count($shopped_users);
			return $shopped_users;
		})
		->addColumn("shopped_users_rate", function($model){
			$shopped_users = $model->shopped_users;
			$shopped_users = explode(',',$shopped_users);
			$shopped_users = array_filter($shopped_users);  
			$shopped_users = count($shopped_users);
			
			$recipient_ids = explode(',',$model->recipient_ids);
			$failed_ids    = explode(',',$model->failed_ids);
			$email_sent_ids= array_diff($recipient_ids, $failed_ids);

			return round((($shopped_users/count($email_sent_ids)) * 100), 2);
		})
		->addColumn("action", function($model){

			return '';
		})
		->rawColumns(['action', 'users'])
		->make(true);

	}
	
	public function getOffersEmailUsers($id){
		$list = \DB::table('schedule_email_offers')->where('id', $id)->get()->first();
		$users = $list->recipient_ids;
		$fusers = $list->failed_ids;
		$shopped_users = $list->shopped_users;
		if($list->status == 1){
			$status = 'Email Sent';
		} else {
			$status = 'Pending';
		}
		// echo "<pre>";
		if($users != ""){
			$u = explode(',',$users);
			$users = Users::whereIn('id', $u)->get();
			print_r($users->toArray());
		}
		

	}
	
}
