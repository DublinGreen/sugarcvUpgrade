<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\UserPlans;
use App\Models\Plans;
use App\Models\Skills;
use App\Models\Users;
use App\Models\ResumeBasicDetail;
use App\Models\Resumeworkdetail;
use App\Models\Resumeeducationdetail;
use App\Models\Extrasection;
use App\Models\Summary;
use App\Models\Resumeskills;
use validator;
class ResumeController extends Controller
{

    public function __construct() {
        parent::__construct();
        $this->middleware('admin');
	}
	
	public function editResume($id){	
		$resume = ResumeBasicDetail::find($id);
        return view('backend.resume.contactEdit',compact("resume", "id"));
	}
	
	public function updateResume($id, Request $request){
		$rules = [
			'first_name' => 'required',
			'last_name' => 'required',
			'Phone' => 'required',
			'email' => 'required',
			'street' => 'required',
			'city' => 'required',
			'state' => 'required',
			'zip' => 'required'
		];
		$this->validate($request, $rules);
		
		$update = [
			'first_name' => $request->input('first_name'), 
			'last_name' => $request->input('last_name'),
			'phone' => $request->input('Phone'), 
			'email' => $request->input('email'), 
			'profession' => $request->input('profession'), 
			'street' => $request->input('street'), 
			'city' => $request->input('city'), 
			'zip' => $request->input('zip')
		];
		$update = ResumeBasicDetail::where('id', $id)->update($update);
		return redirect()->route('admin.users.resume.edit', ['id' => $id])->withSuccess("Updated successfully");
	}
	
	public function editSummary($id){
		$resume = ResumeBasicDetail::find($id);
        return view('backend.resume.summaryEdit',compact("resume", "id"));
	}
	
	public function updateSummary($id, Request $request){
	  Summary::where("resume_id", $id)->update([
		"resume_id" => $id,
		"summary" => $request->input('summary')
	  ]);
	  return redirect()->route('admin.users.resume.edit', ['id' => $id])->withSuccess("Updated successfully");
	}
	
	public function educationList($id){
		return view('backend.resume.educationList', compact('id'));	
	}
	
	public function getEducationList($id){
		$edu = Resumeeducationdetail::where('resume_id', $id)->orderby('sort_order', 'asc');
		
		return Datatables::of($edu)
				->addColumn('start_date', function ($model) {
					return $model->graduation_start_date;
				})
				->addColumn('end_date', function ($model) {
					return $model->current == '1' ? '<span class="badge badge-success">Current</span>' : $model->graduation_end_date;
				})
				->addColumn('action', function ($model) {
					return view('backend.resume.action', compact('model'));
				})
				->rawColumns(['action', 'end_date'])
				->make(true);
	}
	
	public function editEducation($id){
		$education = Resumeeducationdetail::find($id);
        return view('backend.resume.educationEdit', compact('education', 'id'));
	}
	
	public function updateEducation($id, Request $request){
		
		$this->validate($request, [
			'school_name' => 'required',
			'school_location' => 'required',
			'degree' => 'required',
			'start_date' => 'required'
		]);
		
		$education = Resumeeducationdetail::find($id);
		$education->school_name = $request->input('school_name');
		$education->school_location = $request->input('school_location');
		$education->degree = $request->input('degree');
		$education->study_field = $request->input('study_field');
		$education->current = $request->has('current_att') ? '1' : '0';
		$education->graduation_start_date = $request->input('start_date');
		$education->graduation_end_date = $request->input('end_date');
		$education->description = $request->input('txtEditor');
		$education->save();
        return redirect()->route('admin.education-list', ['id' => $education->resume_id])->withSuccess("Updated successfully");
	}
	
	public function skills($id){
		$skills = Resumeskills::where('resume_id', $id)->first();
		return view('backend.resume.skills', compact('skills', 'id'));
	}
	
	public function updateSkills($id, Request $request){
		$skill = $request->input("skill");
		$rating = $request->input("rating");
		
		$data = [];
		for($i=0;$i<count($skill);$i++){
			$row = ["skill" => $skill[$i], "rating" => $rating[$i]];
			$data[] = $row;
		}
		
		Resumeskills::where('resume_id', $id)->update([
			"skills" => json_encode($data)
		]);		
		return redirect()->route('admin.users.resume.edit', ['id' => $id])->withSuccess("Updated successfully");
	}
	
	public function workExperience($id){
		return view('backend.resume.workexpList', compact('id'));	
	}
	
	public function getWorkExp($id){
		$workexp = Resumeworkdetail::where('resume_id', $id)->orderby('job_count', 'asc');
		
		return Datatables::of($workexp)
				->editColumn('start_date', function ($model) {
					return date('D m,Y',strtotime($model->start_date));
				})
				->addColumn('end_date', function ($model) {
					return date('D m,Y',strtotime($model->end_date));
				})
				->addColumn('action', function ($model) {
					return '<a href="'.route('admin.edit-work-exp', ['id' => $model->id]).'"><i class="fa fa-edit"></i> Edit</a>';
				})
				->rawColumns(['action', 'end_date'])
				->make(true);
	}
	
	public function editWorkExp($id){
		$workexp = Resumeworkdetail::find($id);
		return view('backend.resume.workexpEdit',compact("workexp", "id"));
	}
	
	public function updateWorkExp($id, Request $request){
		$workexp = Resumeworkdetail::find($id);
		$workexp->job_title = $request->input('job_title');
		$workexp->employer = $request->input('employer');
		$workexp->city = $request->input('city');
		$workexp->state = $request->input('state');
		$workexp->start_date = $request->input('start_date');
		$workexp->end_date = $request->input('end_date');
		$workexp->work_history = $request->input('work_expr');
		$workexp->is_current = $request->has('is_current') ? '1' : '0';;
		$workexp->save();
		return redirect()->route('admin.work-exp', ['id' => $workexp->resume_id])->withSuccess("Updated successfully");
	}
	
	public function section($id){
		$section = Extrasection::where('resume_id', $id)->first();
		return view('backend.resume.section',compact("section", "id"));
	}
	
	public function updateSection($id, Request $request){
		$section = Extrasection::find($id);
		$section->title = $request->input('title');
		$section->content = $request->input('content');
		$section->save();
		
		return redirect()->route('admin.users.resume.edit', ['id' => $section->resume_id])->withSuccess("Updated successfully");
	}
	
}
