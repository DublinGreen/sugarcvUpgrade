<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\UserPlans;
use App\Models\WorkJobTitle;
use App\Models\Plans;
use App\Models\Users;
use App\Models\UserMeta;
use App\Models\ReferFriends;
use validator;
class WorkJobController extends Controller
{
	public function work_job(){	
		
		$work_job = WorkJobTitle::where('status', '!=', 2)->orderby('id', 'desc')->get();
		//
		
		return view('backend.work.add-job',['work_job' => $work_job]);
	}
	public function add_job_title(Request $request){
		try{
			 $rules = [
				"job_title" => "required",
				"category" => "required",
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
			 $input= $request->all();
			WorkJobTitle::insert(
				['job_title' => $request->job_title, 'category_id' => $request->category]
			);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Job title Added successfully.',
				'redirect'  =>  route('admin.work_job')
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		//return view('backend.plans.index');
	}
	function delete_work_job(Request $request, $id){
		try{
			if(isset($id)){
				 WorkJobTitle::where('id', $id)->update(['status'=> 2]);
				return redirect()->back()->with('message-success', 'Work job deleted successfully');

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function edit_work_job(Request $request, $id){
		try{
			if(isset($id)){
				$job_detail = WorkJobTitle::where('id', $id)->first();
		$work_job = WorkJobTitle::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.work.add-job',['work_job' => $work_job, 'job_detail' =>$job_detail ]);

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function update_work_job(Request $request, $id){
		try{
			if(isset($id)){
				
				WorkJobTitle::where('id', $id)->update(['job_title' => $request->job_title, 'category_id' => $request->category, 'status'=> $request->status]);
				
			 WorkJobTitle::where('id', $id)->first();	
		
		$work_job = WorkJobTitle::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Work Job Update successfully.',
				'redirect'  =>  route('admin.edit_work_job',['id' => $id])
			]);
			
		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function user_per_plan(Request $request, $id){
		try{
			if(isset($id)){
				$plans = Plans::where('id', $id)->first();
				$user_plans = UserPlans::where('plan_id', $id)->get();
				return view('backend.plans.users-plan',['plans' => $plans, 'user_plans'=>$user_plans ]);

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
}
