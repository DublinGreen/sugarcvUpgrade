<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\UserPlans;
use App\Models\Plans;
use App\Models\Users;
use App\Models\UserMeta;
use App\Models\ReferFriends;

class PlanController extends Controller
{
	public function plans(){	
		$plans = Plans::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.plans.index',['plans' => $plans]);
	}
	public function add_plans(Request $request){
		try{
			 $rules = ['name' => 'required', 'prices' => 'required'];
			 $this->validate($request, $rules);
			 $input= $request->all();
			Plans::insert(
				['name' => $request->name, 'description' => $request->description, 'prices'=> $request->prices]
			);
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Plan Added successfully.',
				'redirect'  =>  route('admin.plans')
			]);
			
		}catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
		//return view('backend.plans.index');
	}
	function delete_plans(Request $request, $id){
		try{
			if(isset($id)){
				$plans = Plans::where('id', $id)->update(['status'=> 2]);
				return redirect()->back()->with('message-success', 'plan deleted successfully');

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function edit_plans(Request $request, $id){
		try{
			if(isset($id)){
				$plan_detail = Plans::where('id', $id)->first();
		$plans = Plans::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('backend.plans.index',['plans' => $plans, 'plan_detail' =>$plan_detail ]);

		}
		}
		catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}
	function update_plans(Request $request, $id){
		try{
			if(isset($id)){
				
				$plan_detail = Plans::where('id', $id)->update(['name' => $request->name, 'description' => $request->description, 'prices'=> $request->prices, 'status'=> $request->status]);
				
			$plan_detail = Plans::where('id', $id)->first();	
		$plans = Plans::where('status', '!=', 2)->orderby('id', 'desc')->get();
		//return view('backend.plans.index',['plans' => $plans, 'plan_detail' =>$plan_detail ]);
		return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Plan Update successfully.',
				'redirect'  =>  route('admin.edit_plan',['id' => $id])
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
