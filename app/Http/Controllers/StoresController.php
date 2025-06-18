<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Channels;
use App\Models\StoreCategory;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Models\TrackRevenue;

class StoresController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->middleware('member', [
				'except' => [
					'gethomeStoreList',
					'gethomeTopStoreList',
					'getStoreGuidelines',
					'redirectToStore'
				]
			]);
    }

    public function index() {
        // return view('backend.stores.index');
    }

    public function gethomeStoreList() {
		$stores = Store::select(["id", "title", "thumbnail"])->find(["17790", "35756", "14100", "4250", "16247", "3425", "26508", "4239"]);
		foreach($stores as $store){
			$commissions = $store->commissions->where("premium_comm", "!=", null);
			if($commissions->count() == 1){
				$commission = $commissions->first();
				$premium_comm = $commission->premium_comm;
				$basic_comm = $commission->basic_comm;
			} else {
				foreach($commissions as $commission){
					$today = strtotime("today midnight");
					$expire = strtotime($commission->end_date);
					if($commission->all_time_valid != '0' && $today < $expire){
						$premium_comm = $commission->premium_comm;
						$basic_comm = $commission->basic_comm;
						break;
					}
				}
				if(!isset($premium_comm)){
					$commission = $commissions->first();
					$premium_comm = $commission->premium_comm;
					$basic_comm = $commission->basic_comm;
				}
			}
			$premium_sale_amount = "$99+";
			echo '<div class="col-sm-3 on_web animated fadeIn" style="">
					   <div class="store_wrap ">
						  <div class="store_logo">
							 <a href="javascript:void(0)" target="_blank">
							 <img src="'.url("/images/stores/".$store->thumbnail).'" class="img-responsive">
							 </a>
						  </div>
						  <div class="store_cb_container">
							 <div class="premium_cb">
								'.$premium_comm.'% Cash Back on purchases of '.$premium_sale_amount.'
							 </div>
							 <div class="basic_cb">
								<span>or</span> '.$basic_comm.'% cash back
							 </div>
						  </div>
						  <div class="store_btn">
							 <a href="javascript:void(0)" onclick="login_session(\''.url("/images/stores/".$store->thumbnail).'\',this,\''. route('redirect', ['id' => $store->id]) .'\' )" target="_blank">Shop Now</a>
							 <span data-url="'. route('stores.guidelines',['id'=>$store->id]) .'" class="sc_guidelines">Guidelines</span>
						  </div>
					   </div>
					</div>';
			}
    }
	
    public function getStoresCategoryList() {
		$categories = StoreCategory::where("status", "1")->select(["id", "title", "slug", "thumbnail"])->get();
		$view = view('frontend.content.home.category', ["categories" => $categories]);
		echo $view;
    }
	
	public function gethomeTopStoreList(){
		$stores = Store::select(["thumbnail"])->find(["14106", "4097", "14125", "16241", "26072", "3358", "3368", "4239", "4105", "15811", "23931", "3370", "26078", "17790"]);
		$view = view('frontend.home.topStores',["stores" => $stores]);
		echo $view;
	}
	
	public function getStoresList(Request $request){
		$stores = Store::where("status", "1")->select(["id", "title", "slug", "thumbnail"])->paginate(24);
		$clickCount = $request->session()->get("clickCount");
		$view = view('frontend.content.home.stores', ["stores" => $stores, "clickCount" => $clickCount]);
		$view .= '<script>jQuery.fn.totalPages='.$stores->lastPage().';jQuery.fn.btnDisable=false;</script>';
		if($stores->currentPage() == $stores->lastPage() ){
			$view .= '<script>jQuery.fn.btnDisable=true;</script>';
		}
		echo $view;
	}
	
	public function redirectToStore($store_id, TrackRevenue $TrackRevenue){
		$user = \Sentinel::getUser();
		if(!$user){
			$user_id = 1;
		} else {
			$user_id = $user->id;
		}
		$store = Store::find($store_id);
		if ($store == null) die("Route not found!");
		$offer_id = "";
		$affiliate_with = $store->affiliate_with;
		$ip = @$_SERVER['REMOTE_ADDR'];
		$user_revenue = null;
		$link = $store->link;
		$click_source = \BrowserDetect::detect();
		$track_id = $TrackRevenue->insertTracking($user_id, "basic" , "0", $user_revenue, $affiliate_with, "0", "0", $click_source, $offer_id, $store_id, $ip);
		
		$redirect_url = $this->redirect_url($store, $link, $track_id, $affiliate_with);
		return \Redirect::to($redirect_url);
	}
	
	public function redirect_url($store, $link, $track_id, $affiliateType){
		$channels = new Channels;
		if($affiliateType == "viglink"){
			$key = $channels->where("slug", "viglink")->get()->first()->key;
			$url = 'http://redirect.viglink.com?u='.urlencode($link)."&key=".$key."&cuid=".$track_id;
		}elseif($affiliateType == "commission_junction"){
			$without_deeplink = $store->is_deeplink_approved;
			if($without_deeplink == 1){
				if (strpos($link, '?') !== false) {
				   $url = urldecode($link).'&sid='.$track_id;
				}else{
					$url = urldecode($link).'?sid='.$track_id;
				}
			}else{
				$key = $channels->where("slug", "commission_junction")->get()->first()->key;
				$url = 'http://www.anrdoezrs.net/links/'.$key.'/type/dlg/sid/'.$track_id.'/'.urldecode($link);
			}
		}elseif($affiliateType == "link_share"){ 
			$key = $channels->where("slug", "link_share")->get()->first()->key;
			$store_id = $store->affiliate_storeid;
			$url = 'https://click.linksynergy.com/deeplink?id='.$key.'&mid='.$store_id.'&murl='.urlencode($link).'&u1='.$track_id;;
		}elseif($affiliateType == "amazon"){
			if(isset($_GET["store"]) || isset($_GET["aff-store"])){
				$url = $link.'?tag='.get_option('amazon_Aid').'&ascsubtag='.$track_id;
			} else {
				$url = $link.'&tag='.get_option('amazon_Aid').'&ascsubtag='.$track_id;
			} 
		}elseif($affiliateType == "impact_radius"){
			$ir_tracking_link = $store->ir_tracking_link;
			$url = $ir_tracking_link.'?subId1='.$track_id.'&u='.$link; 
		}elseif($affiliateType == "ebay"){
			$pub 	= "5575361386";
			$campid = "5338240340";
			$url = "http://rover.ebay.com/rover/1/711-53200-19255-0/1?ff3=4&pub=".$pub."&toolid=10001&campid=".$campid."&customid=".$track_id."&mpre=".urlencode($link);
		}elseif($affiliateType == "share_a_sale"){
			$uid 	= "1636424";
			$banner_id = 44;
			$mid = get_post_meta($store_id, 'sas_merchant_id', true);
			$url = "https://shareasale.com/r.cfm?b=".$banner_id."&u=".$uid."&m=".$mid."&urllink=".urlencode($link)."&afftrack=".$track_id;
		}else{
			$key = $channels->where("slug", "viglink")->get()->first()->key;
			$url = 'http://redirect.viglink.com?u='.urlencode($link).'&key='.$key."&cuid=".$track_id;
		}
		return $url;
	}
	
	public function getStoreGuidelines($id){
		try{
			$store = Store::find($id);
			if ($store == null){
				throw new \Exception($validator->errors()->first(), 1);
				return false;
			}
            return \Response::json([
                'guidelines'  =>  $store->guidelines,
                'logo_src'   =>  url('/images/stores/'.$store->thumbnail)
            ]);
		} catch (\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		
	}
	
	public function getCategoryStore($slug, Request $request){
		$user = \Sentinel::getUser();
		// $clickCount = TrackRevenue::whereNotIn("affiliate_with", ["New User", "Survey", "Refer", "Credit Card", "extension"])->where("user_id", $user->id)->count();
		// $request->session()->put("clickCount", $clickCount);
		$url = route("homepage.category.stores.list",["category" => $slug]);
		return view('frontend.logged-home',["isCategoryPage" => true, "slug" => $slug, "load_more" => $url]);
	}	
	
	public function getCategoryStoresList($category, Request $request){
		$cat_id = StoreCategory::where("slug",$category)->get()->first()->id;
		$stores = Store::where("status", "=", "1")->whereRaw('FIND_IN_SET('.$cat_id.',`categories`)')->select(["id", "title", "slug", "thumbnail"])->paginate(24);
		$clickCount = $request->session()->get("clickCount");
		$view = view('frontend.content.home.stores', ["stores" => $stores, "clickCount" => $clickCount]);
		$view .= '<script>jQuery.fn.totalPages='.$stores->lastPage().';jQuery.fn.btnDisable=false;</script>';
		if($stores->currentPage() == $stores->lastPage() ){
			$view .= '<script>jQuery.fn.btnDisable=true;</script>';
		}
		echo $view;
	}
	
	public function searchStore(Request $request){
		$search = $request->get('term');
		$result = Store::where('title', 'LIKE', '%'. $search. '%')->get();
		return \response()->json($result);		
	}
	
	public function countdownView(){
		$user = \Sentinel::getUser();
		if(!empty($user)){
			$user_id = $user->id;
			
			/////////////////////////////
			$signup_date = $user->created_at;
			$IsPublisher = $user->is_publisher;
			$usermeta = new \App\Models\UserMeta;
			$exp_days = $usermeta->getUserMeta($user_id, "signup_bonus_expire")->meta_value;
			$min_sale_amount = $usermeta->getUserMeta($user_id, "signup_bonus_min_sale_amt")->meta_value;
			if($min_sale_amount == ""){
				$min_sale_amount = "0";
			}
			
			$total_orders = TrackRevenue::whereNotIn("affiliate_with", ["New User", "Survey", "Refer", "Credit Card", "extension"])->where([["user_id", "=", $user_id], ["is_returned", "=", "0"], ["revenue", "!=", "0"], ["status", "!=", "2"], ["pointsAssigned", "=", '1'], ["sale_amount", ">=", $min_sale_amount]])->count();
						
			$date_60_days = date('Y-m-d', strtotime($signup_date ."+".$exp_days." days"));
			$current_date = date('Y-m-d');
			$show_banner = true;
			
			if(strtotime($date_60_days) < strtotime($current_date)){
				
				$extension_data = @$usermeta->getUserMeta($user_id, "extension")->meta_value;
				
				$ext_count 	= 0;
				$ext_value	= 0;
				$ext_date	= '';
				
				if(!empty($extension_data)){
					$show_banner = false;
					$extensionArr = json_decode($extension_data);
					for($i=0; $i<count($extensionArr); $i++){
						$ext_count 	= $extensionArr[$i]->extension_count;
						$ext_value 	= $extensionArr[$i]->extension_days;
						$ext_date 	= $extensionArr[$i]->extension_email_sent_on;
					}
					if($ext_value != 0 && $ext_count > 0 && $ext_count <= 3 && $ext_date !=''){
						// $ext_value = $ext_value + $hold_days;
						$date_60_days = date('Y-m-d', strtotime($ext_date ."+".$ext_value." days"));
						
						if(strtotime($date_60_days) >= strtotime($current_date)){
							$show_banner = true;
						}						
					}
				}
			}
			
			if($total_orders > 0){				
				$show_banner = false;
			}
			if($IsPublisher){
				$show_banner = false;
			}
			
			if($show_banner){
				$bonusAmount = TrackRevenue::where(["affiliate_with" => "New User", "user_id" => $user_id])->select(["user_revenue as bonus"])->get()->first()->bonus;
								
				$date_60_days_create = date_create($date_60_days);
				$current_date_create = date_create($current_date);
				$remaining_days = date_diff($date_60_days_create,$current_date_create);
				$remaining_days = $remaining_days->days;
				
				if($remaining_days == '1'){
					$remaining_message = "Get your <span class='txt_color'>$".$bonusAmount." BONUS<sup style='font-size:13px;'>*</sup></span> when you make your first purchase within the next <span class='txt_color'>".$remaining_days." DAY!</span>";
					
				}elseif($remaining_days == '0'){
					$remaining_message = "Get your <span class='txt_color'>$".$bonusAmount." BONUS<sup style='font-size:13px;'>*</sup></span> when you make your first purchase <span class='txt_color'>TODAY!</span>";
				}else{
					$remaining_message = "Get your <span class='txt_color'>$".$bonusAmount." BONUS<sup style='font-size:13px;'>*</sup></span> when you make your first purchase within the next <span class='txt_color'>".$remaining_days." DAYS!</span>";
				}
				
				echo '<div class="container-fluid">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-md-12 firstPurcahseText">
									'. $remaining_message .'
								</div>
							</div>
						</div>
					</div>
				</div>';
			} else {
				$next_purchase_email = $usermeta->getUserMeta($user_id, "next_purchase_email")->meta_value;
						
				if(!empty($next_purchase_email)){			
					$next_purchase_arr = json_decode($next_purchase_email);
					
					for($i=0; $i<count($next_purchase_arr);$i++){
						$email_count 		= $next_purchase_arr[$i]->email_count;
						$offer_days 		= $next_purchase_arr[$i]->offer_days;
						$offer_start_on 	= $next_purchase_arr[$i]->offer_start_on;
						// $min_sale_amount= $next_purchase_arr[$i]->offer_min_sale_amount;
						$offer_amount	= $next_purchase_arr[$i]->offer_amount;
											
						$offer_expiry = date('Y-m-d', strtotime($offer_start_on ."+".$offer_days." days"));
						
						if(strtotime($offer_expiry) >= strtotime($current_date)){
							
							$total_orders = TrackRevenue::whereNotIn("affiliate_with", ["New User", "Survey", "Refer", "Credit Card", "extension"])->where([["user_id", "=", $user_id], ["is_returned", "=", "0"], ["pointsAssigned", "=", '1'], ["status", "!=", '2']])->whereBetween('order_date', [$offer_start_on, $offer_expiry])->count();
							
							if($total_orders == '0'){
								$date_60_days_create = date_create($offer_expiry);
								$current_date_create = date_create($current_date);
								$remaining_days = date_diff($date_60_days_create,$current_date_create);
								$remaining_days = $remaining_days->days;
								
								$purchasecount = 'next';
								if($remaining_days == '1'){
									$remaining_message = "Earn an additional <span class='txt_color'>$".$offer_amount." BONUS</span> when you make your ".$purchasecount." purchase within the next <span class='txt_color'>".$remaining_days." DAY!</span>";
								}elseif($remaining_days == '0'){
									$remaining_message = "Earn an additional <span class='txt_color'>$".$offer_amount." BONUS</span> when you make your ".$purchasecount." purchase <span class='txt_color'>TODAY!</span>";
								}else{
									$remaining_message = "Earn an additional <span class='txt_color'>$".$offer_amount." BONUS</span> when you make your ".$purchasecount." purchase within the next <span class='txt_color'>".$remaining_days." DAYS!</span>";
								}
								
								echo '<div class="container-fluid">
									<div class="row">
										<div class="container">
											<div class="row">
												<div class="col-md-12 firstPurcahseText app_bonus_txt">
													'. $remaining_message .'
												</div>
											</div>
										</div>
									</div>
								</div>';								
							}
						}
					}
				} else {
					echo '';
				}
			}
			//////////////////////////////
			// $view = view('frontend.content.home.countdown', ['userId'=>$user_id]);
			// echo $view;
		} else {
			echo '';
		}
	}
}
