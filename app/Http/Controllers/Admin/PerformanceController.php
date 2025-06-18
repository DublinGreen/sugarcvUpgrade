<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TrackRevenue;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Validator;

class PerformanceController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
		$currentMonth = date('m');
		$start_date = date('Y-m-01 00:00:00');
		$end_date   = date('Y-m-d 23:59:59');
		$users_count = \DB::table("users")->whereRaw('MONTH(created_at) = ?',[$currentMonth])->count();
		$report = TrackRevenue::whereNotIn("affiliate_with", ["Refer", "Survey", "New User", "Credit Card", "extension"])
		  ->whereNotIn("revenue",["0", "NA", ""])
		  ->whereNotIn("user_id",["164", "1"])
		  ->where([
				["pointsAssigned", "=", "1"],
				["status", "!=", "2"],
				["is_returned", "=", '0'],
				["sale_amount", "!=", '0'],
				["sale_amount", "!=", '0.0']
			])
		  ->whereBetween('order_date', [$start_date, $end_date])
		  ->select([\DB::raw('COUNT(*) as total_orders'), \DB::raw('SUM(sale_amount) as sale_amount')])->get()->first();
		  
	   $total_referred_users_data = \DB::table("refer_friends")->join("users", "refer_friends.refer_by", "=", "users.id")
									->whereBetween('refer_friends.date', [$start_date, $end_date])
									->get(["refer_friends.refer_by"]);
		$total_referred_users = count($total_referred_users_data);
		foreach($total_referred_users_data as $refer_by_id){
			$referred_by_ids_array[] = $refer_by_id->refer_by;
		}
		$referred_by_ids_count = array_count_values($referred_by_ids_array);
		
		$total_publishers = \DB::table("users")->where("is_publisher", "1")->get(["id"]);
		$publisher_referrals = 0;
		foreach($total_publishers as $publisher_id){
			$publisher_referrals += @$referred_by_ids_count[$publisher_id->id];
		}
		
		$total_direct_users     	=  $users_count - $total_referred_users;
		$total_member_referrals		= $total_referred_users - $publisher_referrals;
		$data = [
			"total_referred_users" => $total_referred_users,
			"total_direct_users" => $total_direct_users,
			"total_publisher_referrals" => $publisher_referrals,
			"total_member_referrals" => $total_member_referrals
			
		];
		
        return view('backend.performance.index', ["users_count" => $users_count, "report" => $report, "data" => $data ]);
    }
	
	public function search(Request $request){
		$this->validate($request, ["start_date" => "required", "end_date" => "required"]);
		$start_date = date('Y-m-d 00:00:00', strtotime($request->input("start_date")));
		$end_date   = date('Y-m-d 23:59:59', strtotime($request->input("end_date")));
		$users_count = \DB::table("users")->whereBetween('created_at',[$start_date, $end_date])->count();
		$report = TrackRevenue::whereNotIn("affiliate_with", ["Refer", "Survey", "New User", "Credit Card", "extension"])
		  ->whereNotIn("revenue",["0", "NA", ""])
		  ->whereNotIn("user_id",["164", "1"])
		  ->where([
				["pointsAssigned", "=", "1"],
				["status", "!=", "2"],
				["is_returned", "=", '0'],
				["sale_amount", "!=", '0'],
				["sale_amount", "!=", '0.0']
			])
		  ->whereBetween('order_date', [$start_date, $end_date])
		  ->select([\DB::raw('COUNT(*) as total_orders'), \DB::raw('SUM(sale_amount) as sale_amount')])->get()->first();
		  
	   $total_referred_users_data = \DB::table("refer_friends")->join("users", "refer_friends.refer_by", "=", "users.id")
									->whereBetween('refer_friends.date', [$start_date, $end_date])
									->get(["refer_friends.refer_by"]);
		$total_referred_users = count($total_referred_users_data);
		foreach($total_referred_users_data as $refer_by_id){
			$referred_by_ids_array[] = $refer_by_id->refer_by;
		}
		$referred_by_ids_count = array_count_values($referred_by_ids_array);
		
		$total_publishers = \DB::table("users")->where("is_publisher", "1")->get(["id"]);
		$publisher_referrals = 0;
		foreach($total_publishers as $publisher_id){
			$publisher_referrals += @$referred_by_ids_count[$publisher_id->id];
		}
		
		$total_direct_users     	=  $users_count - $total_referred_users;
		$total_member_referrals		= $total_referred_users - $publisher_referrals;
		$data = [
			"total_referred_users" => $total_referred_users,
			"total_direct_users" => $total_direct_users,
			"total_publisher_referrals" => $publisher_referrals,
			"total_member_referrals" => $total_member_referrals
			
		];
		
        return view('backend.performance.index', ["users_count" => $users_count, "report" => $report, "data" => $data ]);

	}

    public function getOrders() {
		$last_90_days = date("Y-m-d",strtotime('-90 days'));
		$today = date("Y-m-d");
		$report = TrackRevenue::whereNotIn("affiliate_with", ["Refer", "Survey", "New User", "Credit Card", "extension"])
				  ->where([
						["pointsAssigned", "=", "1"],
						["status", "!=", "2"],
						["is_returned", "=", '0'],
						["sale_amount", "!=", '0'],
						["sale_amount", "!=", '0.0']
					])
				  ->whereBetween('order_date', [$last_90_days, $today])
				  ->select(["user_id", \DB::raw('COUNT(*) as total_orders'), \DB::raw('SUM(sale_amount) as sale_amount')])->groupBy("user_id");
				  
		return Datatables::of($report)
				->addColumn('user', function ($model) {
					return $model->user->first_name. " ". $model->user->last_name;
				})
				->addColumn('email', function ($model) {
					return $model->user->email;
				})
				->addColumn('total_orders', function ($model) {
					return $model->total_orders;
				})
				->addColumn('sale_amount', function ($model) {
					return $model->sale_amount;
				})
				->addColumn('action', function ($model) {
					return '<a href="#" data-user_id="'.$model->user_id.'" data-event="fatch" aria-expanded="false" style="font-size: 20px;"><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i><span class="fa btn-spinner fa-lg fa-spinner fa-spin"></span></a>';
				})
				->rawColumns(['action'])
				->make(true);

    }
	
	public function getUserOrders(Request $request){
		try{
			$last_90_days = date("Y-m-d",strtotime('-90 days'));
			$today = date("Y-m-d");
			$user = $request->input("user_id");
			$report = TrackRevenue::leftJoin("store", "track_revenue.store_id", "=", "store.id")
					  ->whereNotIn("track_revenue.affiliate_with", ["Refer", "Survey", "New User", "Credit Card", "extension"])
					  ->where([
							["track_revenue.pointsAssigned", "=", "1"],
							["track_revenue.status", "!=", "2"],
							["track_revenue.is_returned", "=", '0'],
							["track_revenue.sale_amount", "!=", '0'],
							["track_revenue.sale_amount", "!=", '0.0'],
							["track_revenue.user_id", "=", $user]
						])
					  ->whereBetween('track_revenue.order_date', [$last_90_days, $today])
					  ->select(["track_revenue.user_id", 'track_revenue.sale_amount', 'track_revenue.order_number', 'track_revenue.order_date', 'track_revenue.store_id', 'store.title as store'])->orderBy('track_revenue.ID', 'desc')
					  ->get();

			return \Response::json([
				'type'      =>  'success',
				'data'   =>  $report
			]);
		} catch (\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	
	public function singlePurchasedUsers(){		
        return view('backend.performance.singlePurchasedUsers');
	}
	
	public function singlePurchasedUsersList(){		
		$last_60_days = date("Y-m-d",strtotime('-60 days'));
		$today = date("Y-m-d");
		$report = TrackRevenue::whereNotIn("affiliate_with", ["Refer", "Survey", "New User", "Credit Card", "extension"])
				  ->where([
						["pointsAssigned", "=", "1"],
						["status", "!=", "2"],
						["is_returned", "=", '0'],
						["sale_amount", "!=", '0'],
						["sale_amount", "!=", '0.0']
					])
				  ->whereBetween('order_date', [$last_60_days, $today])
				  ->select(['order_date', 'store_id', 'sale_amount', 'user_id', \DB::raw('COUNT(user_id)')])->having(\DB::raw('COUNT(*)'), '=', 1)->groupBy('user_id');//, 'sale_amount', 'store_id', 'order_date'
		return Datatables::of($report)
				->addColumn('user', function ($model) {
					return '<span data-id="'.$model->user_id.'" >'.@$model->user->first_name. " ". @$model->user->last_name .'</div>';
				})
				->addColumn('email', function ($model) {
					return @$model->user->email;
				})
				->addColumn('signup_date', function ($model) {
					return @$model->user->created_at;
				})
				->addColumn('store', function ($model) {
					return @$model->store->title;
				})
				->addColumn('remarks', function ($model) {
					if($model->remarks != ""){
						return $model->remarks;
					}
					return $model->manual_remarks;
				})
				->addColumn('sale_amount', function ($model) {
					return $model->sale_amount;
				})
				->rawColumns(['user'])
				->make(true);

	}

}
