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
use App\Models\PaymentTransaction;
use Illuminate\Support\Facades\Hash;
use validator;
class ReportController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }
		
    public function userReport() {		
        return view('backend.report.user');
    }
		
    public function getUserReportList(Request $request){
		$users = Users::orderBy('id', 'desc');
		
		return Datatables::of($users)
				->addColumn('plan', function ($model) {
					return $model->userPlan->status == "0" ? '<span class="badge badge-danger">Not Available</span>' : '<span class="badge badge-success">'.@$model->userPlan->plan->name.'</span>';
				})
				->rawColumns(['plan'])
				->make(true);
    }
		
    public function transactionReport() {		
        return view('backend.report.transaction');
    }
		
    public function getTransaction(Request $request){
		$transaction = PaymentTransaction::orderBy('id', 'desc');
		
		return Datatables::of($transaction)
				->addColumn('user', function ($model) {
					return $model->user->first_name;
				})
				->addColumn('email', function ($model) {
					return $model->user->email;
				})
				->addColumn('plan', function ($model) {
					return '<span class="badge badge-success">'.@$model->plan->name.'</span>';
				})
				->addColumn('status', function ($model) {
					if($model->status == "success"){
						$s = '<span class="badge badge-success">Success</span>';
					}else{
						$s = '<span class="badge badge-danger">Not Available</span>';
					}
					return $s;
				})
				->rawColumns(['plan', 'status'])
				->make(true);
    }
		
}
