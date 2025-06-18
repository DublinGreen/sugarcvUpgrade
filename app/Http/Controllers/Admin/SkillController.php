<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\UserPlans;
use App\Models\Plans;
use App\Models\Skills;
use App\Models\Users;
use App\Models\UserMeta;
use App\Models\ReferFriends;
use validator;
class SkillController extends Controller
{
	public function skills(){	
		$Skills = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.skills.index',['Skills' => $Skills]);
	}
	public function add_skills(Request $request){
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
			 
			Skills::insert(
				['skill_name' => $request->skill_name, 'category_id' => $request->category]
			);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'skills Added successfully.',
				'redirect'  =>  route('admin.skills')
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		//return view('backend.plans.index');
	}
	function delete_skill(Request $request, $id){
		try{
			if(isset($id)){
				Skills::where('id', $id)->update(['status'=> 2]);
				return redirect('skills')->with('message-success', 'Skill deleted successfully');

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function edit_skill(Request $request, $id){
		try{
			if(isset($id)){
				$skill_detail = Skills::where('id', $id)->first();
		$Skills = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.skills.index',['Skills' => $Skills, 'skill_detail' =>$skill_detail ]);

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function update_skills(Request $request, $id){
		try{
			if(isset($id)){
				
				Skills::where('id', $id)->update(['skill_name' => $request->skill_name, 'category_id' => $request->category, 'status'=> $request->status]);
				
			
		//$plans = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		//return view('backend.plans.index',['plans' => $plans, 'plan_detail' =>$plan_detail ]);
		return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Plan Update successfully.',
				'redirect'  =>  route('admin.edit_skill',['id' => $id])
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
