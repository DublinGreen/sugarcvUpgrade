<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\UserPlans;
use App\Models\Plans;
use App\Models\Skills;
use App\Models\SummaryCategory;
use App\Models\Users;
use App\Models\UserMeta;
use App\Models\ReferFriends;
use validator;
class SummaryController extends Controller
{
	public function work_summary(){	
		$Skills = SummaryCategory::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.work-summary.index',['Skills' => $Skills]);
	}
	public function add_Summry(Request $request){
		try{
			
			$rules = [
				"skill_name" => "required",
				"category" => "required"
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
			 
			SummaryCategory::insert(
				['name' => $request->skill_name, 'category_id' => $request->category]
			);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'summary Added successfully.',
				'redirect'  =>  route('admin.work-summary')
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		//return view('backend.plans.index');
	}
	function delete_summary(Request $request, $id){
		try{
			if(isset($id)){
				SummaryCategory::where('id', $id)->update(['status'=> 2]);
				return redirect('admin/work-summary')->with('message-success', 'Summary deleted successfully');

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function edit_summary(Request $request, $id){
		try{
			if(isset($id)){
				$skill_detail = SummaryCategory::where('id', $id)->first();
		$Skills = SummaryCategory::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.work-summary.index',['Skills' => $Skills, 'skill_detail' =>$skill_detail ]);

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function update_summary(Request $request, $id){
		try{
			if(isset($id)){
				
				SummaryCategory::where('id', $id)->update(['name' => $request->skill_name, 'category_id' => $request->category, 'status'=> $request->status]);
				
			
		//$plans = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		//return view('backend.plans.index',['plans' => $plans, 'plan_detail' =>$plan_detail ]);
		return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Summary Update successfully.',
				'redirect'  =>  route('admin.work-summary',['id' => $id])
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
