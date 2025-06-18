<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\CoreData;
use App\Models\TrackRevenue;
use App\Models\UserMeta;
use App\Models\Categories;
use App\Models\ResumeBasicDetail;
use App\Models\Resumeworkdetail;
use App\Models\Resumeeducationdetail;
use App\Models\Resumeskills;
use App\Models\Summary;
use App\Models\SummaryCategory;
use App\Models\Extrasection;
use App\Models\PaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Socialite;
use Session;
use Mail;
use DB;
use PDF;
use Redirect;
use App\Models\WorkJobTitle;
use App\Models\Skills;
use App\Models\UserPlans;

class SiteController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->middleware('member', [
				'except' => [
					'getLogin',
					'getLogout',
					'getHome',
					'cvtemplate',
					'createnewresume',
					'selectresume',
					'createresume',
					'workhistory',
					'educationdetail',
					'workdetail',
					'saveworkdetails',
					'saveeditworkdetail',
					'saveworkhistory',
					'updateworkhistory',
					'workexpr',
					'workexprupdate',
					'editworkdetail',
					'workeducation',
					'getTermsConditions',
					'getPrivacyNotice',
					'getPrivacyPolicy',
					'getContact',
					'getPartners',
					'getEmail',
					'changePassword',
					'redirectToFacebook',
					'redirectToGoogle',
					'entereducation',
					'saveeducationdata',
					'skills',
					'summary',
					'workskills',
					'saveskills',
					'exprList',
					'orderWorkdetail',
					'deleteWorkdetail',
					'educationList',
					'editEducation',
					'updateEducation',
					'deleteEducation',
					'orderEducation',
					'entersummary',
					'saveSummary',
					'addSection',
					'saveSection',
					'savelogin',
					'contact',
					'faq',
					'resumeTips',
					'send_contact_email',
					'terms_and_conditions',
					'privacy_policy',
					'imageUploadPost',
					
				]
			]);
    }

    public function getLogin () {
        if (!\Sentinel::check()){
			return view('frontend.pages.user-login',['email' => "", 'flag' => true]);
        }
    }

	public function summary() {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$resume = [];
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			$resume = ResumeBasicDetail::find($resume_id);
		}
		return view ('frontend.pages.summary',["resume" => $resume]);
    }

	public function entersummary() {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$resume_id = Session::get('resume_id');
		$detail = Summary::where("resume_id", $resume_id)->first();
		$summary = SummaryCategory::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view ('frontend.pages.summary-fields',["detail" => $detail,"summary" => $summary]);
    }

	public function editSummary($id) {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$detail = Summary::where("resume_id", $id)->first();
		$summary = SummaryCategory::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view ('frontend.pages.summary-fields',["detail" => $detail, "edit" => $id, "summary" => $summary]);
    }

	public function saveSummary(Request $request) {
    if (strpos($request->input('summary'), '<div><br></div>') !== false) {
$work_summ=str_replace("<div><br></div>", "",$request->input('summary'));
}
else{
$work_summ=$request->input('summary');
}

		try{
		  $resume_id = $request->has('id') ? $request->input('id') : Session::get('resume_id');
		  Summary::where("resume_id", $resume_id)->delete();
		  Summary::insert([
			"resume_id" => $resume_id,
			"summary" => $work_summ
		  ]);
		  return \Response::json([
			'type'      =>  'success',
			'message'   =>  'Updated successfully.',
			'redirect'  =>  $request->has('id') ? route('final-resume',['id' => $resume_id]) :route('add-section')
		  ]);

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}

    }

	public function deleteSummary(Request $request) {
		$resume_id = $request->input('id');
		Summary::where("resume_id", $resume_id)->delete();
		return \Response::json([
			'type'      =>  'success',
			'message'   =>  'Deleted successfully.'
		]);
	}

	public function addSection() {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$resume_id = Session::get('resume_id');
		$detail = Extrasection::where("resume_id", $resume_id)->first();
		return view('frontend.pages.addSection',["detail" => $detail]);
    }

	public function editSection($id) {
		$detail = Extrasection::where("resume_id", $id)->first();
		if($detail == null){
			$detail = [];
		}
		return view('frontend.pages.addSection',["detail" => $detail, "id" => $id]);
    }

	public function saveSection(Request $request) {
		try{
			$resume_id = $request->has('id') ? $request->input('id') : Session::get('resume_id');
			if($request->has('title') && !empty($resume_id)){
				$rules = [
					'title' => 'required',
					'content' => 'required'
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

				 //$resume_id = Session::get('resume_id');
				Extrasection::where("resume_id", $resume_id)->delete();
				Extrasection::insert([
					"resume_id" => $resume_id,
					"title" => $request->input('title'),
					"content" => $request->input('content')
				]);
			}
			Session::forget('resume_id');
		  return \Response::json([
			'type'      =>  'success',
			'message'   =>  'Updated successfully.',
			'redirect'  =>  route('final-resume', ['id' => $resume_id])
		  ]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }

	public function sectionTitle(Request $request) {
		//dd($request->all());
			$id = $request->input('id');
			$val = $request->input('title');
	$section = $request->input('section');
		if($section == 'education'){
			$table = Resumeeducationdetail::where("resume_id",$id);
		}else if($section == 'skill'){
			$table = Resumeskills::where("resume_id",$id);
		}else if($section == 'workdetail'){
			$table = Resumeworkdetail::where("resume_id",$id);
		}else if($section == 'aboutme'){
			$table = Summary::where("resume_id",$id);
		}else if($section == 'extrasection'){
		$table ='';
		Extrasection::where("resume_id",$id)->update([
			'title' => $request->input('title'),
		]);
		}else if($section == 'biosection'){
		$table ='';
		ResumeBasicDetail::where("id",$id)->update([
			'bio_section_title' => $request->input('title'),
		]);
		}else if($section == 'contact'){
		$table ='';
		ResumeBasicDetail::where("id",$id)->update([
			'contact_section_title' => $request->input('title'),
		]);
		}else{
		$table ='';
	}
	if($table != ''){
		$table->update([
			'section_title' => $request->input('title'),
		]);
	}

			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Updated successfully.'
			]);
		}
	public function deletSection(Request $request) {
		$resume_id = $request->input('id');
		Extrasection::where("resume_id", $resume_id)->delete();
		return \Response::json([
			'type'      =>  'success',
			'message'   =>  'Deleted successfully.'
		]);
	}

	public function workskills () {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$resume_id = Session::get('resume_id');
		$skills = Resumeskills::where("resume_id", $resume_id)->first();
		$profession = ResumeBasicDetail::where("id", $resume_id)->first()->profession??"";
		// dd($profession->profession);

		// $Skills_detail = Skills::where('status', '!=', 2)->where('category_id','like','%' .$profession. '%')->orderby('id', 'desc')->get();
		// dd($Skills_detail);
		$Skills_detail = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('frontend.pages.work-skills', ["skills" => $skills, 'Skills_detail' => $Skills_detail]);
    }

	public function editWorkSkills($id) {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$skills = Resumeskills::where("resume_id", $id)->first();
		$Skills_detail = Skills::where('status', '!=', 2)->orderby('id', 'desc')->get();
		return view('frontend.pages.work-skills', ["skills" => $skills, 'edit' => $id, 'Skills_detail' => $Skills_detail]);
    }

	public function saveskills(Request $request) {
		$skill = $request->input("skill");
		$rating = $request->input("rating");
		$resume_id = $request->has('id') ? $request->input('id') :Session::get('resume_id');

		//delete if skills are already exist this on update case
		$sectionTitle="";
		if($resume_id){
			$sectionTitle=Resumeskills::where("resume_id", $resume_id)->first()->section_title??'';
		}
		
		Resumeskills::where("resume_id", $resume_id)->delete();

		$data = [];
		if(($skill !== null)){
		for($i=0;$i<count($skill);$i++){
			$row = ["skill" => $skill[$i], "rating" => $rating[$i]];
			$data[] = $row;
		}
		}else{
			$row = ["skill" => $skill[0], "rating" => $rating[0]];
			$data[] = $row;
		}
		if($resume_id){
			Resumeskills::insert([
				"resume_id" => $resume_id,
				"skills" => json_encode($data),
				"section_title" => $sectionTitle
			]);
		}

		return $request->has('id') ? redirect()->route("final-resume", ["id" => $resume_id]) :redirect()->route("summary");
    }

	public function deleteSkills(Request $request) {
			$resume_id = $request->input('id');
			Resumeskills::where("resume_id", $resume_id)->delete();
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Deleted successfully.'
			]);
		}

	public function savelogin (Request $request) {

		// $pass = $request->password;
		// $password = 	Hash::make($pass);
		//print_r($password); die();

		// $users= 	\DB::table('users')->where('email', $request->email)->update(['password' => $password,'is_confirmed' => '1']);
			$rules = [
					'email' => 'required|email|unique:users,username',

				];
				$validator =  Validator::make($request->all(), $rules);
				if ($validator->fails()) {
					$err_list = "<ul>";
					foreach($validator->errors()->all() as $error){
						$err_list .= "<li>".$error."</li>";
					}
					$err_list .= "</ul>";
					// throw new \Exception($err_list, 1);
					// return false;
					return \Response::json([
					'type'  =>  'error',
					'message'   =>  "Email already Exist.",
					//'redirect' => route('login')
				]);
				}
		$credentials = [
			'email'    => $request->email,
			'username'    => $request->email,
			'password' => $request->password,
			'permissions' =>  ['member' => true]
		];

		$user = \Sentinel::registerAndActivate($credentials);

		if( $user){
			\Sentinel::login($user);
				Mail::send('frontend.emails.welcomeEmail', ['user' => $user], function ($m) use ($user) {
					$m->from('php.essitco1@gmail.com', 'SugarCV');
					$m->to($user->email)->subject('Welcome to SugarCV');
				});
				if( count(Mail::failures()) > 0 ) {

					foreach(Mail::failures as $email_address) {
						echo "$email_address <br />";
					 }
				 }
				$resume_id = Session::get('resume_id');
				$result="";
				if(!empty($resume_id)){
					$result = ResumeBasicDetail::where("id", $resume_id)->update(["user_id" => $user->id]);
				}
				if($result > 0){
					return \Response::json([
						'type'  =>  'success',
						'message'   =>  "Username and Password submit Successfully.",
						'redirect' => route('exprList')
					]);
				}else{
					return \Response::json([
						'type'  =>  'success',
						'message'   =>  "Username and Password submit Successfully.",
						'redirect' => route('home')
					]);
				}




		}else{
				return \Response::json([
					'type'  =>  'unsuccess',
					'message'   =>  "Something went wrong"
				]);
		}


        //return view('auth.login');
    }

    public function getLogout () {
        if ($user = \Sentinel::getUser()) {
            $member = $user->member;
            \Cache::forget('member.' . $user->id);
            \Sentinel::logout($user);
        }
        return redirect()->route("home");
    }

	public function saveworkhistory(Request $request) {

		$input = $request->all();

		$userId = Session::get('key');
		$user_id = Resumeworkdetail::where('user_id', $userId)->first();
		$job_count = Resumeworkdetail::where('user_id', $userId)->max('job_count');

		if(!empty($user_id->user_id))
			{
				$data = Resumeworkdetail::where(['user_id' => $userId, 'job_count' => $job_count])->update(['work_history' => $request->input('txtEditor')]);

			}

			$summary = Resumeworkdetail::where('user_id', $userId)->get();
			 return view('frontend.pages.work-summary',["summary" => $summary]);
	}

	public function exprList() {
        if (!\Sentinel::check()){
			return view('frontend.pages.user-login',['email' => "", 'create_resume' => true]);
        }
		$summary = [];
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			$summary = Resumeworkdetail::where('resume_id', $resume_id)->orderby('job_count', 'asc')->get();
		}
		return view('frontend.pages.work-summary',["summary" => $summary]);
	}

	public function editExprList($id) {

		$summary = [];
		$summary = Resumeworkdetail::where('resume_id', $id)->orderby('job_count', 'asc')->get();
		return view('frontend.pages.work-summary',["summary" => $summary, 'edit' => true, 'id' => $id]);
	}

	public function updateworkhistory(Request $request) {

		$input = $request->input('edit_id');
		//print_r($input); die();
		$userId = Session::get('key');
		$user_id = Resumeworkdetail::where('user_id', $userId)->first();

		if(!empty($user_id->user_id))
			{
				$data = Resumeworkdetail::where(['user_id' => $userId, 'id' => $input])->update(['work_history' => $request->input('txtEditor')]);

			}

			$summary = Resumeworkdetail::where('user_id', $userId)->get();
			 return view('frontend.pages.work-summary',["summary" => $summary]);
	}

    public function getEmail () {

		if(isset($_POST['email'])){
			$credentials = [
				'login' => $_POST['email'],
			];
			$user = \Sentinel::findByCredentials($credentials);

			if( !empty($user) && isset($user['id']) && $user['id'] > 1 ){
				echo "Email already exists.";
			} else {
				echo "success";
			}

		} else {
			echo "Invalid email address";
		}
    }

    public function getHome(Request $request) {
		if (\Sentinel::check()){

			$user = \Sentinel::getUser();
			$userPlan = UserPlans::where('user_id',$user->id)->where('status',1)->orderBy('id','DESC')->first();
			if(!empty($userPlan)){
				$end = Carbon::parse($userPlan->active_date);
				$current = Carbon::now();
				$days = $end->diffInDays($current);
				$length = $days/30;

				if($userPlan->plan_id == '1' && $length > 3){

					$userPlan->isExpired = '1';
					$userPlan->save();
				}elseif(($userPlan->plan_id == '2' || $userPlan->plan_id == '3') && $length > 12){
					$userPlan->isExpired = '1';
					$userPlan->save();
				}
			}

		}
       return view('frontend.home');
    }



	public function cvtemplate(Request $request) {
        return view('frontend.pages.cv-template');
    }

	public function workeducation(Request $request) {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$userId = Session::get('key');

		//print_r($userId ); die();
		$user_email = \DB::table('users')->where('id', $userId)->first();

		if(!empty($user_email->email) and $user_email->email != NULL)
		{
			return view('frontend.pages.user-login',['email' => $user_email]);
		}
		else
		{

			/* return \Response::json([
							'type'  =>  'error',
							'message'   =>  "Something went wrong"
						]); */
				//return view('frontend.pages.resume');
			 return redirect('create-resume')->with('message-danger', 'sorry, please enter your Email first');
		}
        //return view('frontend.pages.cv-template');
    }
	public function editworkdetail(Request $request, $id) {
		//print_r($id); die();
		$work_job = WorkJobTitle::where('status', 0)->orderby('id', 'desc')->get();
		$detail = Resumeworkdetail::where('id', $id)->first();
        return view('frontend.pages.work-detail',['detail' => $detail,'work_job' => $work_job]);
    }

	public function saveworkdetails(Request $request) {
  //  dd($request->work_expr);

		try{

			if($request->has('id')){
				 $job_title = $request->input('job_title');
				if(!empty($job_title)){
					$rules = [
						'job_title' => 'required',
						'employer' => 'required',
						// 'city' => 'required',
						'state' => 'required',
						'start_date' => 'required',
						// 'end_date' => 'required',
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
				}
				$resume_id = $request->input('id');
				$count = Resumeworkdetail::where("resume_id", $resume_id)->count();
        if (strpos($request->input('work_expr'), '<div><br></div>') !== false) {
    $work_exp=str_replace("<div><br></div>", "",$request->input('work_expr'));
}
else{
  $work_exp=$request->input('work_expr');
}

				if(!empty($job_title)){
				$data = Resumeworkdetail::insert([
					'resume_id' => $resume_id,
					'job_title' => $request->input('job_title'),
					'employer' => $request->input('employer'),
					'country' => $request->input('country'),
					'state' => $request->input('state'),
					'start_date' => date('Y-m-d', strtotime($request->input('start_date'))),
					'end_date' => date('Y-m-d',strtotime($request->input('end_date'))),
					'job_count' => $count,
					'is_current' => $request->has('is_current') ? '1' : '0',
					'work_history' => $work_exp
				]);
				}
				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Added successfully.',
					'redirect'  =>  route('editExprList',['id' => $resume_id])
				]);
			}elseif(Session::has('resume_id')){
				 $job_title = $request->input('job_title');
				if(!empty($job_title)){
					$rules = [
						'job_title' => 'required',
						'employer' => 'required',
						//'city' => 'required',
						//'state' => 'required',
						//'start_date' => 'required',
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
				}
				$resume_id = Session::get('resume_id');
				$count = Resumeworkdetail::where("resume_id", $resume_id)->count();
				if(!empty($job_title)){
				$data = Resumeworkdetail::insert([
					'resume_id' => $resume_id,
					'job_title' => $request->input('job_title'),
					'employer' => $request->input('employer'),
					'country' => $request->input('country'),
					'state' => $request->input('state'),
					'start_date' => date('Y-m-d', strtotime($request->input('start_date'))),
					'end_date' => date('Y-m-d',strtotime($request->input('end_date'))),
					'job_count' => $count,
					'is_current' => $request->has('is_current') ? '1' : '0',
					'work_history' => $request->input('work_expr')
				]);
				}
				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Added successfully.',
					'redirect'  =>  route('exprList')
				]);

			}else{
                throw new \Exception("Resume ID not exist.", 1);
                return false;
			}

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}

    }

	public function saveeditworkdetail($id, Request $request) {
	
		try{
			// if(Session::has('resume_id')){
				$rules = [
					//'job_title' => 'required',
					//'employer' => 'required',
					//'country' => 'required',
					//'state' => 'required',
					//'start_date' => 'required',
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
        if (strpos($request->input('work_expr'), '<div><br></div>') !== false) {
    $work_exp=str_replace("<div><br></div>", "",$request->input('work_expr'));
}
else{
  $work_exp=$request->input('work_expr');
}

				// $resume_id = Session::get('resume_id');
				// $data = Resumeworkdetaipl::where(["id" => $id, "resume_id" => $resume_id])->update([
				$data = Resumeworkdetail::where(["id" => $id])->update([
					'job_title' => $request->input('job_title'),
					'employer' => $request->input('employer'),
					'country' => $request->input('country'),
					'is_current' => $request->has('is_current') ? '1' : '0',
					'state' => $request->input('state'),
					'start_date' => date('Y-m-d', strtotime($request->input('start_date'))),
					'end_date' => date('Y-m-d',strtotime($request->input('end_date'))),
					'work_history' =>   $work_exp
				]);
				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Updated successfully.',
					'redirect'  =>  $request->has('redirect') ? $request->input('redirect') : route('exprList')
				]);

			// }else{
                // throw new \Exception("Resume ID not exist.", 1);
                // return false;
			// }

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }

	public function deleteWorkdetail(Request $request) {
		$id = $request->input('work_id');
		// echo "testing right now ,will remove after test";
		// dd($request->all());
		if(!empty($request->input('id'))){
			Resumeworkdetail::where("resume_id",$request->input('id'))->delete();
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Deleted successfully.'
			]);
		}else{
			$q = Resumeworkdetail::where("id",$id);
			$resumeid = $q->first()->resume_id;
			$q->delete();

			// return redirect()->route('exprList')->withErrors(['Deleted successfully.']);
			if(!empty($request->input('next'))){
				return redirect()->route('editExprList',['id'=>$resumeid])->withErrors(['Deleted successfully.']);
			}else{
				return redirect()->route('exprList')->withErrors(['Deleted successfully.']);
			}
		}


	}

	public function orderWorkdetail(Request $request) {
		$sort = $request->input('sort');
		$sort = json_decode($sort);
		foreach($sort as $sorting){
			Resumeworkdetail::where("id",$sorting->id)->update(["job_count" => $sorting->position]);
		}
		return \Response::json([
			'type'  =>  'success',
			'message'   =>  "Updated successfully."
		]);
	}

	public function finalPosition(Request $request) {
		$sort = $request->input('sort');
		$sort = json_decode($sort);
		foreach($sort as $sorting){
			\DB::table('final_position')->where("id",$sorting->id)->update(["job_count" => $sorting->position]);
		}
		return \Response::json([
			'type'  =>  'success',
			'message'   =>  "Updated successfully."
		]);
	}

	public function workexpr(Request $request) {

        return view('frontend.pages.work-experience');
    }
	public function workexprupdate(Request $request, $id) {

		$detail = Resumeworkdetail::where('id', $id)->first();
        //return view('frontend.pages.work-detail',['detail' => $detail]);

        return view('frontend.pages.work-experience',['detail' => $detail]);
    }

	public function selectresume($id, Request $request) {
		Session::put('skin', $id);
        return view('frontend.pages.select-resume');
    }

	public function skills(Request $request) {
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$resume = [];
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			$resume = ResumeBasicDetail::find($resume_id);
		}
        return view('frontend.pages.skills',["resume" => $resume]);
    }

	public function createresume(Request $request) {
		if(Session::has('skin')){
			$skin_id = Session::get('skin');
		}else{
			return redirect('/cv-template')->withErrors(['Please Choose Template First']);
		}
		$resume = [];
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			$resume = ResumeBasicDetail::find($resume_id);
		}
        return view('frontend.pages.resume',["resume" => $resume,"skin_id" => $skin_id]);
    }

	public function editResume($id) {
		$resume = ResumeBasicDetail::find($id);
        $plan = \App\Models\UserPlans::where(["user_id" => $resume->user_id, "status" => 1, 'isExpired' => '0'])->first();
        return view('frontend.pages.resume',["resume" => $resume, "edit" => true,"plan"=> $plan]);
    }


	public function createnewresume(Request $request){

		try{
			if($request->input('dob') != ''){
				$dob = $request->input('dob');
				$res = explode("/", $dob);
				// $changedDob = $res[2]."-".$res[0]."-".$res[1];
				$changedDob = date('Y-m-d', strtotime($dob));
			} else {
				$changedDob = NULL;
			}

			$arrSoc = array();
			if(!empty($request->input('socialWebsite'))){
				$arrSoc = array_combine($request->input('socialWebsite'),$request->input('socialLinks'));
			}
			if($request->has('id')){
				$rules = [

					'Phone' => 'required',
					'email' => 'required|email',
					// 'profession' => 'required',
					// 'street' => 'required',
					// 'city' => 'required',
					// 'state' => 'required',
					// 'zip' => 'required'
				];
			}else{
				$rules = [
					'first_name' => 'required',
					'last_name' => 'required',
					'Phone' => 'required',
					'email' => 'required|email',
					// 'profession' => 'required',
					// 'street' => 'required',
					// 'city' => 'required',
					// 'state' => 'required',
					// 'zip' => 'required'
				];
			}

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

			if($request->has('id')){
				$resume_id = $request->input('id');
				$resume = ResumeBasicDetail::find($resume_id);
				$update = [
					'first_name' => !empty($request->input('first_name'))?$request->input('first_name'):$resume->first_name,
					'last_name' => !empty($request->input('last_name'))?$request->input('last_name'):$resume->last_name,
					'phone' => $request->input('Phone'),
					'email' => $request->input('email'),
					'profession' => $request->input('profession'),
					'street' => $request->input('street'),
					'city' => $request->input('city'),
					'state' => $request->input('state'),
					'zip' => $request->input('zip'),
					'dob' => $changedDob,
					'originState' => $request->input('originState'),
					'maritalStatus' => $request->input('maritalStatus'),
					'gender' => $request->input('gender'),
					'facebook' => isset($arrSoc['facebook']) ? $arrSoc['facebook'] : '',
					'twitter' => isset($arrSoc['twitter']) ? $arrSoc['twitter'] : '',
					'linkedin' => isset($arrSoc['linkedin']) ? $arrSoc['linkedin'] : '',
					'website' => isset($arrSoc['website']) ? $arrSoc['website'] : ''
				];
				$update = $resume->update($update);
			}elseif(Session::has('resume_id')){
				$resume_id = Session::get('resume_id');

				$insert = [
					'first_name' => $request->input('first_name'),
					'last_name' => $request->input('last_name'),
					'phone' => $request->input('Phone'),
					'email' => $request->input('email'),
					'profession' => $request->input('profession'),
					'street' => $request->input('street'),
					'city' => $request->input('city'),
					'state' => $request->input('state'),
					'zip' => $request->input('zip'),
					'dob' => $changedDob,
					'originState' => $request->input('originState'),
					'maritalStatus' => $request->input('maritalStatus'),
					'gender' => $request->input('gender'),
					'facebook' => isset($arrSoc['facebook']) ? $arrSoc['facebook'] : '',
					'twitter' => isset($arrSoc['twitter']) ? $arrSoc['twitter'] : '',
					'linkedin' => isset($arrSoc['linkedin']) ? $arrSoc['linkedin'] : '',
					'website' => isset($arrSoc['website']) ? $arrSoc['website'] : ''
				];

				if (\Sentinel::check()){
					$user = \Sentinel::getUser();
					$insert["user_id"] = $user->id;
				}

				ResumeBasicDetail::where('id', $resume_id)->update($insert);
			}else{
				$skin = Session::get('skin');


				$insert = [
					'first_name' => $request->input('first_name'),
					'last_name' => $request->input('last_name'),
					'phone' => $request->input('Phone'),
					'email' => $request->input('email'),
					'profession' => $request->input('profession'),
					'street' => $request->input('street'),
					'city' => $request->input('city'),
					'state' => $request->input('state'),
					'zip' => $request->input('zip'),
					'dob' => $changedDob,
					'originState' => $request->input('originState'),
					'maritalStatus' => $request->input('maritalStatus'),
					'gender' => $request->input('gender'),
					'facebook' => isset($arrSoc['facebook']) ? $arrSoc['facebook'] : '',
					'twitter' => isset($arrSoc['twitter']) ? $arrSoc['twitter'] : '',
					'linkedin' => isset($arrSoc['linkedin']) ? $arrSoc['linkedin'] : '',
					'website' => isset($arrSoc['website']) ? $arrSoc['website'] : '',
					'skin_id' => $skin
				];

				if (\Sentinel::check()){
					$user = \Sentinel::getUser();
					$insert["user_id"] = $user->id;
				}

				$resume_id = \DB::table('resume_basic_detail')->insertGetId($insert);

				Session::put('resume_id', $resume_id);

			}

			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Updated successfully.',
				'redirect'  =>  $request->has('id') ? route('final-resume', ['id' => $request->input('id')])  : route('work-history')
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}

	public function workhistory(Request $request) {
		$resume = [];

		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			// dd($resume_id);
			$resume = ResumeBasicDetail::find($resume_id);
		}
        return view('frontend.pages.work-history',["resume" => $resume]);
    }

	public function educationList(Request $request) {
		$summary = [];
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			$summary = Resumeeducationdetail::where('resume_id', $resume_id)->orderby('sort_order', 'asc')->get();
		}
		return view('frontend.pages.education-summary',["summary" => $summary]);
	}

	public function editEducationList($id) {
		$summary = [];
		$summary = Resumeeducationdetail::where('resume_id', $id)->orderby('sort_order', 'asc')->get();
		return view('frontend.pages.education-summary',["summary" => $summary, 'edit' => $id]);
	}

	public function educationdetail(Request $request) {
		$resume = [];
		$count = 0;
		if(Session::has('resume_id')){

			$resume_id = Session::get('resume_id');
			$resume = ResumeBasicDetail::find($resume_id);
			$count = Resumeeducationdetail::where('resume_id', $resume_id)->count();
		}
        return view('frontend.pages.education-detail', ["resume" => $resume, "count" => $count]);
    }

	public function entereducation(Request $request) {

        return view('frontend.pages.education');
    }

	public function editEducation($id, Request $request) {
		$edu = Resumeeducationdetail::find($id);
        return view('frontend.pages.education', ["detail" => $edu]);
    }

	public function updateEducation($id, Request $request) {

		try{
			if(Session::has('resume_id') || $request->has('id')){
				$rules = [
					'school_name' => 'required',
					'school_location' => 'required',
					'degree' => 'required',
					'start_date' => 'required'
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

				$resume_id = Session::get('resume_id');
				$data  = Resumeeducationdetail::where('id',$id)->update([
					'school_name' => $request->input('school_name'),
					'school_location' => $request->input('school_location'),
					'degree' => $request->input('degree'),
					'study_field' => $request->input('study_field'),
					'current' => $request->has('current_att') ? '1' : '0',
					'graduation_start_date' => date('Y-m-d', strtotime($request->input('start_date'))),
					'graduation_end_date' => date('Y-m-d', strtotime($request->input('end_date'))),
					'description' => $request->input('txtEditor'),
				]);
				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Updated successfully.',
					'redirect'  =>  $request->has('redirect') ? $request->input('redirect') : route('educationList')
				]);

			}else{
				throw new \Exception("Something wrong reload page.", 1);
				return false;
			}
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }

	public function deleteEducation(Request $request) {
		$id = $request->input('edu_id');
		if(!empty($request->input('id'))){
			Resumeeducationdetail::where("resume_id",$request->input('id'))->delete();
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Deleted successfully.'
			]);
		}else{
			$q = Resumeeducationdetail::where("id",$id);
			$resumeid = $q->first()->resume_id;
			$q->delete();
			if(!empty($request->input('next'))){
				return redirect()->route('editEducationList',['id'=>$resumeid])->withErrors(['Deleted successfully.']);
			}else{
				return redirect()->route('educationList')->withErrors(['Deleted successfully.']);
			}

		}
	}

	public function orderEducation(Request $request) {
		$sort = $request->input('sort');
		$sort = json_decode($sort);
		foreach($sort as $sorting){
			Resumeeducationdetail::where("id",$sorting->id)->update(["sort_order" => $sorting->position]);
		}
		return \Response::json([
			'type'  =>  'success',
			'message'   =>  "Updated successfully."
		]);
	}

	public function saveeducationdata(Request $request) {
//    dd($request->has("id"));
		try{

			if(Session::has('resume_id') || $request->has("id")){
				$rules = [
					'school_name' => 'required',
					'school_location' => 'required',
					'degree' => 'required',
					'start_date' => 'required'
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

				$resume_id = $request->has("id") ? $request->input("id") : Session::get('resume_id');
				$count = Resumeeducationdetail::where('resume_id', $resume_id)->count();
				$data  = Resumeeducationdetail::insert([
					'resume_id' => $resume_id,
					'school_name' => $request->input('school_name'),
					'school_location' => $request->input('school_location'),
					'degree' => $request->input('degree'),
					'study_field' => $request->input('study_field'),
					'current' => $request->has('current_att') ? '1' : '0',
					'graduation_start_date' => date('Y-m-d', strtotime($request->input('start_date'))),
					'graduation_end_date' => date('Y-m-d', strtotime($request->input('end_date'))),
					'sort_order' => $count,
					'description' => $request->input('txtEditor'),
				]);
				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Added successfully.',
					'redirect'  =>  $request->has("id") ? $request->input("redirect") :route('educationList')
				]);

			}else{
				// throw new \Exception("Something wrong reload page.", 1);
				// return false;
				return \Response::json([
					'type'      =>  'unsuccess',
					'message'   =>  'Session Expire.',
					'redirect'  =>  route('login')
				]);
			}
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
    }

	public function workdetail(Request $request) {
		$work_job = WorkJobTitle::where('status', 0)->where('category_id','0')->orderby('id', 'desc')->get();
    //dd($work_job);
    if($request->ajax()){
      $category_id=$request->category_id;
$cat_id = Categories::where('profession_name','LIKE','%'.$category_id.'%')->get()->first()->id;
if($cat_id==""){
  	$work_job = WorkJobTitle::where('status', 0)->where('category_id','0')->orderby('id', 'desc')->get();

}else{
  $work_job = WorkJobTitle::where('status', 0)->where('category_id',$cat_id)->orderby('id', 'desc')->get();
}
//dd($work_job);
  return json_encode($work_job);
    }
        return view('frontend.pages.work-detail',['work_job' => $work_job]);
    }

    public function getRefer() {
        return view('frontend.pages.refer');
    }

    public function getTermsConditions() {
        return view('frontend.pages.termsConditions');
    }

    public function getPrivacyNotice() {
        return view('frontend.pages.privacyNotice');
    }

    public function getPrivacyPolicy() {
        return view('frontend.pages.privacyPolicy');
    }

    public function getContact() {
        return view('frontend.pages.contact');
    }

    public function getPartners() {
        return view('frontend.pages.partners');
    }

	public function changePassword(){
		return view('frontend.pages.changePassword');
	}

	public function redirectToFacebook(){
		 return Socialite::driver('facebook')->redirect();
	}

	public function redirectToGoogle(){
		 return Socialite::driver('google')->redirect();
	}

	public function documenthome(Request $request){
		$user = \Sentinel::getUser();
		// print_r($user->id);
		// die();
		$resume = ResumeBasicDetail::where(["user_id"=>$user->id, "isDeleted" => '0'])->orderby('id', 'desc')->paginate(10);
		$pending_resume = null;
		if(Session::has('resume_id')){
			$resume_id = Session::get('resume_id');
			// echo $resume_id;
			// die();
			$pending_resume = ResumeBasicDetail::where("id", $resume_id)->first();
		}
		return view('frontend.pages.documenthome',compact('resume', 'pending_resume'));
	}

	public function documentRename(Request $request){
		$user = \Sentinel::getUser();
		$resume = ResumeBasicDetail::where(["user_id" => $user->id, "id" => $request->input("id")])->update([
			"resume_name" => $request->input("rename")
		]);
		if($request->has('ajax')){
			return \Response::json([
				'type'      =>  'success',
				'message'   =>  'Updated successfully.'
			]);
		}
		return redirect()->back();
	}

	public function documentRemove(Request $request){
		$resume = ResumeBasicDetail::where("id" , $request->input("id"))->delete();
		return redirect('documenthome')->with('success','Deleted successfully.');
	}

	public function finalResume($id, Request $request){
		//Session::forget('resume_id');
		$resume = ResumeBasicDetail::find($id);

		if($resume->skin_id){
			Session::put('skin', $resume->skin_id);
		}
  // /  dd($resume->skin_id);
		return view('frontend.pages.final-resume', compact('resume', 'id'));
	}

	public function imageUpdate(Request $request){

		$rules = [
			'resumeImage' => 'image|mimes:jpeg,jpg|max:5000'
		];
		$this->validate($request, $rules);
	// $validator =  Validator::make($request->all(), $rules);
	// 	if ($validator->fails()) {
	// 		$err_list = "<ul>";
	// 		foreach($validator->errors()->all() as $error){
	// 			$err_list .= "<li>".$error."</li>";
	// 		}
	// 		$err_list .= "</ul>";
	// 		throw new \Exception($err_list, 1);
	// 		return false;
	// 	} 

		$resume_id = $request->input('id');
		$input = [];
		if($request->hasFile('resumeImage')) {

			$dir = public_path('images/resumeImages/');
			$extension = $request->file('resumeImage')->getClientOriginalExtension();
			$resumeImage = uniqid() . '_' . time() . '.' . $extension;
			// echo $resumeImage;
			// die();
			$request->file('resumeImage')->move($dir, $resumeImage);
			$input["image"] = $resumeImage;
		}
		$resume = ResumeBasicDetail::where("id", $resume_id)->update($input);

		// return \Response::json([
			// 'type'      =>  'success',
			// 'message'   =>  'Updated successfully.'
		// ]);

		 return redirect()->back()->with('success', 'Image has been uploaded successfully');
	}

	public function finalResumeFormatting(Request $request){
		//dd($request->all());
		try{

				$input = [];
				if($request->has('fontSize')){
					$input['fontSize'] = $request->input('fontSize');
				}

				if($request->has('lineSpacing')){
					$input['lineSpacing'] = $request->input('lineSpacing');
				}
				if($request->has('nameSize')){
					$input['nameSize'] = $request->input('nameSize');
				}
				if($request->has('color')){
					$input['color'] = $request->input('color');
				}

				if($request->has('fontFamily')){
					$input['fontFamily'] = $request->input('fontFamily');
				}
				if(!empty($request->backgroundColor)){
					$input['backgroundColor'] = $request->input('backgroundColor');
				}
				if(!empty($request->skin_id)){
					$input['skin_id'] = $request->input('skin_id');
					Session::put('skin', $input['skin_id']);
				}
				$id = $request->input('id');
				if(!empty($input)){
					$resume = ResumeBasicDetail::find($id);
					$resume->update($input);
					if(!empty($request->position)){
						\DB::table('final_position')->where("resume_id",$id)->delete();
						\DB::table('final_position')->insert([
							'resume_id'=>$id,
							'section'=>$request->position
						]);
					}

				}elseif(!empty($request->position)){
					\DB::table('final_position')->where("resume_id",$id)->delete();
						\DB::table('final_position')->insert([
							'resume_id'=>$id,
							'section'=>$request->position
						]);
				}

				return \Response::json([
					'type'      =>  'success',
					'message'   =>  'Updated successfully.'
					]);

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}

	public function packagePlans(){
		$plans = \App\Models\Plans::where("status", 0)->get();
		return view('frontend.pages.package-plans', compact('plans'));
	}

	public function selectPlan($id){
		$plan = \App\Models\Plans::find($id);
		if($plan == null){
			die("Plan not exist");
		}
		$user = \Sentinel::getUser();
		$reference = md5(rand(1, 10) . microtime());

		$secret = getenv('PAYSTACK_SECRET_KEY');
		if($secret == ""){
			die("paystack keys not set yet!");
		}

		\App\Models\PaymentTransaction::insert([
			"plan_id" => $plan->id,
			"user_id" => $user->id,
			"reference" => $reference
		]);


		$paystack = new \Yabacon\Paystack($secret);
		try
		{
			$tranx = $paystack->transaction->initialize([
				'amount'=>	(int)$plan->prices,       // in kobo
				'email'=>	$user->email,         // unique to customers
				'reference'=>	$reference, // unique to transactions
			]);
		} catch(\Yabacon\Paystack\Exception\ApiException $e){
		  print_r($e->getResponseObject());
		  die($e->getMessage());
		}

		header('Location: ' . $tranx->data->authorization_url);
		die;
		// return view('frontend.pages.payment', ["price" => $price]);
	}

	public function paymentCallback(Request $request){
		$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
		if(!$reference){
		  die('No reference supplied');
		}

		$secret = getenv('PAYSTACK_SECRET_KEY');
		if($secret == ""){
			die("paystack keys not set yet!");
		}

		$transaction = \App\Models\PaymentTransaction::where("reference", $reference)->first();
		if($transaction == null){
			die('Transaction not found.');
		}

		// initiate the Library's Paystack Object
		$paystack = new \Yabacon\Paystack($secret);
		try
		{
			// verify using the library
			$tranx = $paystack->transaction->verify([
				'reference'=>$reference, // unique to transactions
			]);
		} catch(\Yabacon\Paystack\Exception\ApiException $e){
			print_r($e->getResponseObject());
			die($e->getMessage());
		}
		$trxref = isset($_GET['trxref']) ? $_GET['trxref'] : '';
		$status = 'failed';
		if ('success' === $tranx->data->status) {
			\App\Models\UserPlans::insert([
				"plan_id" => $transaction->plan_id,
				"user_id" => $transaction->user_id,
				"status" => 1,
				"reference" => $reference,
				"trxref" => $trxref
			]);
			$status = 'success';
		}
		$transaction->update([
			"status" => $tranx->data->status,
			"amount" => $tranx->data->amount,
			"message" => $tranx->data->message,
			"gateway_response" => $tranx->data->gateway_response,
			"paid_at" => $tranx->data->paid_at,
			"channel" => $tranx->data->channel,
			"currency" => $tranx->data->currency,
			"ip_address" => $tranx->data->ip_address,
			"log" => json_encode($tranx->data->log),
			"authorization" => json_encode($tranx->data->authorization),
			"customer" => json_encode($tranx->data->customer),
		]);
		// echo "<pre>";
		// print_r($tranx->data);
		return redirect()->route('paymentComplete', ['id' =>$status, 'reference' =>  $reference]);

	}

	public function flutterwavePayment($id){
		$plan = \App\Models\Plans::find($id);
		if($plan == null){
			die("Plan not exist");
		}
		$user = \Sentinel::getUser();
		$reference = md5(rand(1, 10) . microtime());

		\App\Models\PaymentTransaction::insert([
			"plan_id" => $plan->id,
			"user_id" => $user->id,
			"reference" => $reference
		]);

		// \Rave::initialize(route('callback'));

		return view('frontend.flutterwave.paymentRedirect',compact('user', 'reference', 'plan'));
	}

	public function flutterwavePay(){
		\Rave::initialize(route('flutterwavePay-callback'));
	}

	public function flutterwavePayCallback(){
		$data = \Rave::verifyTransaction(request()->txref);
		dd($data);
	}

	public function paymentComplete($id, $reference){
		$transaction = \App\Models\PaymentTransaction::where("reference", $reference)->first();
		if($transaction == null){
			die('Transaction not found.');
		}

		return view('frontend.pages.paymentComplete',compact('id'));
	}

	public function duplicate(Request $request){
		$this->validate($request, [
			"id" => "required",
			"title" => "required"
		]);

		$id = $request->input("id");
		$name = $request->input("title");

		$ResumeBasicDetail = ResumeBasicDetail::find($id);
		if($ResumeBasicDetail == null){
			return redirect()->back();
		}

		$ResumeBasicDetail = $ResumeBasicDetail->replicate();
		$ResumeBasicDetail->resume_name = $name;
		$ResumeBasicDetail->save();

		$Resumeeducationdetail = Resumeeducationdetail::where("resume_id", $id)->first();
		if($Resumeeducationdetail != null){
			$Resumeeducationdetail = $Resumeeducationdetail->replicate();
			$Resumeeducationdetail->resume_id = $ResumeBasicDetail->id;
			$Resumeeducationdetail->save();
		}

		$Extrasection = Extrasection::where("resume_id", $id)->first();
		if($Extrasection != null){
			$Extrasection = $Extrasection->replicate();
			$Extrasection->resume_id = $ResumeBasicDetail->id;
			$Extrasection->save();
		}

		$Resumeskills = Resumeskills::where("resume_id", $id)->first();
		if($Resumeskills != null){
			$Resumeskills = $Resumeskills->replicate();
			$Resumeskills->resume_id = $ResumeBasicDetail->id;
			$Resumeskills->save();
		}

		$Summary = Summary::where("resume_id", $id)->first();
		if($Summary != null){
			$Summary = $Summary->replicate();
			$Summary->resume_id = $ResumeBasicDetail->id;
			$Summary->save();
		}

		$Resumeworkdetail = Resumeworkdetail::where("resume_id", $id)->first();
		if($Resumeworkdetail != null){
			$Resumeworkdetail = $Resumeworkdetail->replicate();
			$Resumeworkdetail->resume_id = $ResumeBasicDetail->id;
			$Resumeworkdetail->save();
		}

		return redirect()->route('final-resume',['id' => $ResumeBasicDetail->id]);
		// return view('frontend.pages.payment', ["price" => $price]);
	}

	public function contact(){
		return view('frontend.pages.contact');
	}

	public function faq(){
		return view('frontend.pages.faq');
	}

	public function resumeTips(){
		return view('frontend.pages.resumeTips');
	}


	public function send_contact_email(Request $request){

		try{
			$rules = [
				'subject' => 'required',
				'name' => 'required',
				'email' => 'required|email',
				'message' => 'required'
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

			Mail::send('frontend.emails.contactEmail', ['user' => $request->all()], function ($m) {
				$m->from('php.essitco1@gmail.com', 'SugarCV');
				$m->to('essitco.php1@gmail.com')->subject('Contact Us | SugarCV');
			});
			return \Response::json([
				'type'  =>  'success',
				'message'   =>  "Query Submitted Successflly.",
				// 'redirect' => route('')
			]);

		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}

	public function terms_and_conditions(){
		return view('frontend.pages.terms_and_conditions');
	}


	public function privacy_policy(){
		return view('frontend.pages.privacy_policy');
	}

	public function downloadDocument(Request $request){
	
		if (!\Sentinel::check()){
			return redirect()->route("login");
        }
		$user = \Sentinel::getUser();
		$plan = \App\Models\UserPlans::where(["user_id" => $user->id, "status" => 1, 'isExpired' => '0'])->first();

    //  if($plan == null){
		// 	return redirect()->route('plans');
		// }

		$format = $request->input('format');
		$id = $request->input('id');
		$resume = ResumeBasicDetail::find($id);
		if($format == 'pdf'){
			$waterMark = true;
			$skin = $resume->skin_id;
			$pdf_view = true;
			$skin = 'frontend.cvTemplates.'.$skin;
      
			$pdf = PDF::loadView($skin, compact('resume', 'waterMark', 'pdf_view'));
	//	dd( view($skin, compact('resume', 'waterMark', 'pdf_view'))->render());
			$name = $resume->resume_name != "" ? $resume->resume_name : rand(1000, 9999);
      
			 //dd($pdf);
			
    //  return $pdf->stream('Profile.pdf', array('Attachment'=>0));
			return $pdf->download($name.'.pdf');
			//return $pdf->stream($name.'.pdf');
		}else{
			return redirect()->back();
		}

	}

	public function documentpdf($id, $name){
		$user = \Sentinel::getUser();
		$plan = \App\Models\UserPlans::where(["user_id" => $user->id, "status" => 1, 'isExpired' => '0'])->first();
		if($plan == null){
			return redirect()->route('plans');
		}
		$resume = ResumeBasicDetail::find($id);
		$waterMark = true;
		$pdf_view = true;
		$skin = $resume->skin_id;
		$skin = 'frontend.cvTemplates.'.$skin;
		$pdf = PDF::loadView($skin, compact('resume', 'waterMark', 'pdf_view'));
		// return view($skin, compact('resume', 'waterMark'));
		$name = $resume->resume_name != "" ? $resume->resume_name : rand(1000, 9999);
		return $pdf->stream($name.'.pdf');
	}

	public function documentEmail(Request $request){
		$user = \Sentinel::getUser();
		$plan = \App\Models\UserPlans::where(["user_id" => $user->id, "status" => 1, 'isExpired' => '0'])->first();
		if($plan == null){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  "Plan Not activate yet."
            ]);
		}

		$id = $request->input('id');
		$resume = ResumeBasicDetail::find($id);
		$waterMark = true;
		$pdf_view = true;
		$skin = $resume->skin_id;
		$skin = 'frontend.cvTemplates.'.$skin;
		$pdf = PDF::loadView($skin, compact('resume', 'waterMark', 'pdf_view'));
		$name = $resume->resume_name != "" ? $resume->resume_name : rand(1000, 9999);

		try{
            Mail::send('frontend.emails.resumeEmail', compact('user'), function($message)use($user, $pdf, $name){
				$message->to($user->email, $user->first_name." ".$user->last_name )->subject('Your CV')->attachData($pdf->output(), $name.".pdf");
            });

			return \Response::json([
				'type'  =>  'success',
				'message'   =>  "Email sent to '".$user->email."'"
			]);
		} catch(\Exception $e){
            return \Response::json([
                'type'  =>  'error',
                'message'   =>  $e->getMessage()
            ]);
		}
	}

	public function imageUploadPost(Request $request)
	{
		//Session::put('skin', $id);
        return view('frontend.pages.select-resume');

		$file = $request->file('file');
		$fileType = $file->getClientOriginalExtension();
		$data = file_get_contents( $file );
		$data = base64_encode($data);
		// echo $data;
		// die;
		$input["data"] = $data;
		$input["uploadFileTypeCD"] = $fileType;
		$input["templateID"] = "-3";
		$input["portalID"] = 84;
		$input["skinCD"] = "SRZ4";
		$input["cultureCD"] = "en-US";
		$input["userUID"] = "52b438c0-f03e-4327-b92c-bd2c4a722c7e";
		$input["flowName"] = "";
		$input["PortalCD"] = "ZTY";
		$input["localizedDocumentText"] = "Resume";
		$input["isIntl"] = false;


		/*$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api-embeddedbuilder.zety.com/api/v1/documents/parse",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>json_encode($input),
		  CURLOPT_HTTPHEADER => array("Cookie:BOLDAuth=kAfakQBwO-RpgC1LR5Ite-FLtum3RlN5H5iXwcXaIyAnREWL6NtwafSwW5GBTEpj7W7AO9Spa2EHVyeCAk5mfR7tfQAHNP_1BU15dMu8z-T4pgppOvZ_tjYQfwebSF5lownqFOEBPVIm8USmx5M1eOsD1gJsNMEaosenvJwvlNn6aalXt4xrPyL6ePfFul2kuBblQnK4H9essVRcsQ5lieyLFd5g3mkvr044J5dqiIKpJsmcFxVyFCnmRJJPQY3b-tZXJtxznZNxbtGpFrww3hmxbUI-ECbCi9c2ZNEEiWUng1PTYK7EHcyCHskXPFLZ_G9A9Tf6qoWqGdnH3x_QP3diAT6vgkUC4ZQpInYUC251DpDEFBuVeP5ezF6O2FUASrkxy4l5ZD26IlBRZS0ylpkYCtBJdwLuBIhzPD4GwFO03ZbHrvteSqNdrU3S93lmjpJR8W_mRQSlGfRTxzJD0-TI3zHZE5CO8La_bNLEdUrKbjGYnyMzeut6Pb3b2YXZKawB5NQrnyRroRd_EK5UzPUm-3X3hKM-q3jsd-u-RoeVzptjBowNnYuNo_cy_NMl-J_h2CUmZhspcjunaxjgkcBszdQBvCbK-O2n9SWE3MK-4ISsBotm0-iTpZCgWkVSODhxXcu8fuhw94r3rdSELtVNxJFXQXyoF71_ndiOQ08;",
			"Content-Type: application/json"
		  ),
		));
		*/

		$response = curl_exec($curl);

		curl_close($curl);
		if($response){
			$data = json_decode($response, true);
			$info = [];
			if(isset($data["sections"]) && !empty($data["sections"])){
				$sessions = $data["sections"];
				foreach($sessions as $session){
					if($session["sectionTypeCD"] == "NAME"){
						$info["name"]=[];
						if(isset($session["paragraphs"][0])){
							$docDatas = $session["paragraphs"][0]["docDatas"];
							foreach($docDatas as $docData){
								$info["name"][$docData["fieldCD"]] = $docData["charValue"];
							}
						}
					}

					if($session["sectionTypeCD"] == "CNTC"){
						$info["contact"]=[];
						if(isset($session["paragraphs"][0])){
							$docDatas = $session["paragraphs"][0]["docDatas"];
							foreach($docDatas as $docData){
								$info["contact"][$docData["fieldCD"]] = $docData["charValue"];
							}
						}
					}

					if($session["sectionTypeCD"] == "EXPR"){
						$info["work_history"]=[];
						if(isset($session["paragraphs"][0])){
							foreach($session["paragraphs"] as $paragraph){
								$docDatas = $paragraph["docDatas"];
								$work = [];
								foreach($docDatas as $docData){
									$work[$docData["fieldCD"]] = $docData["charValue"];
								}
								$info["work_history"][]=$work;
							}
						}
					}

					if($session["sectionTypeCD"] == "EDUC"){
						$info["education"]=[];
						if(isset($session["paragraphs"][0])){
							foreach($session["paragraphs"] as $paragraph){
								$docDatas = $paragraph["docDatas"];
								$edu = [];
								foreach($docDatas as $docData){
									$edu[$docData["fieldCD"]] = $docData["charValue"];
								}
								$info["education"][]=$edu;
							}
						}
					}

					if($session["sectionTypeCD"] == "HILT"){
						$info["skills"]=[];
						if(isset($session["paragraphs"][0])){
							foreach($session["paragraphs"] as $paragraph){
								$docDatas = $paragraph["docDatas"];
								foreach($docDatas as $docData){
									$info["skills"][] = $docData["charValue"];
								}
							}
						}
					}

					if($session["sectionTypeCD"] == "LANG"){
						$info["languages"]=[];
						if(isset($session["paragraphs"][0])){
							$docDatas = $session["paragraphs"][0]["docDatas"];
							foreach($docDatas as $docData){
								$info["languages"][$docData["fieldCD"]] = $docData["charValue"];
							}
						}
					}

					if($session["sectionTypeCD"] == "SUMM"){
						$info["summary"]=[];
						if(isset($session["paragraphs"][0])){
							$docDatas = $session["paragraphs"][0]["docDatas"];
							foreach($docDatas as $docData){
								$info["summary"] = $docData["charValue"];
							}
						}
					}

				}
			}
			// echo "<pre>";
			// print_r($info);
			// die;

			$skin = Session::get('skin');


			$insert = [
				'first_name' => isset($info["name"]["FNAM"]) ? $info["name"]["FNAM"] : "",
				'last_name' => isset($info["name"]["LNAM"]) ? $info["name"]["LNAM"] : "",
				'phone' => isset($info["contact"]["HPHN"]) ? $info["contact"]["HPHN"] : "",
				'email' => isset($info["contact"]["EMAI"]) ? $info["contact"]["EMAI"] : "",
				'profession' => isset($info["contact"]["DCTL"]) ? $info["contact"]["DCTL"] : "",
				'street' => isset($info["contact"]["STRT"]) ? $info["contact"]["STRT"] : "",
				'city' => isset($info["contact"]["CITY"]) ? $info["contact"]["CITY"] : "",
				'state' => isset($info["contact"]["STAT"]) ? $info["contact"]["STAT"] : "",
				'zip' => isset($info["contact"]["ZIPC"]) ? $info["contact"]["ZIPC"] : "",
				'skin_id' => $skin
			];

			if (\Sentinel::check()){
				$user = \Sentinel::getUser();
				$insert["user_id"] = $user->id;
			}

			$resume_id = \DB::table('resume_basic_detail')->insertGetId($insert);

			Session::put('resume_id', $resume_id);

			//work history
			if(isset($info['work_history']) && !empty($info['work_history'])){

				foreach($info['work_history'] as $key => $work_history){
					Resumeworkdetail::insert([
						'resume_id' => $resume_id,
						'job_title' => isset($work_history["JTIT"]) ? $work_history["JTIT"] : "",
						'employer' => isset($work_history["COMP"]) ? $work_history["COMP"] : "",
						'city' => isset($work_history["JCIT"]) ? $work_history["JCIT"] : "",
						'state' => isset($work_history["JSTA"]) ? $work_history["JSTA"] : "",
						'start_date' => isset($work_history["JSTD"]) ? date('d-m-y', strtotime($work_history["JSTD"])) : "",
						'end_date' => isset($work_history["EDDT"]) ? date('d-m-y', strtotime($work_history["EDDT"])) : "",
						'job_count' => $key,
						'work_history' => isset($work_history["JDES"]) ? $work_history["JDES"] : "",
					]);
				}
			}

			//Education
			if(isset($info['education']) && !empty($info['education'])){
				foreach($info['education'] as $key => $education){
					$data  = Resumeeducationdetail::insert([
						'resume_id' => $resume_id,
						'school_name' => isset($education["SCHO"]) ? $education["SCHO"] : "",
						'school_location' => isset($education["SCIT"]) ? $education["SCIT"] : "",
						'degree' => isset($education["DGRE"]) ? $education["DGRE"] : "",
						'study_field' => isset($education["STUY"]) ? $education["STUY"] : "",
						'current' => isset($education["SCNT"]) ? '1' : '0',
						'graduation_start_date' => isset($education["GRST"]) ? date('d-m-y', strtotime($education["GRST"])) : "",
						'graduation_end_date' => isset($education["GRED"]) ? date('d-m-y', strtotime($education["GRED"])) : "",
						'sort_order' => $key,
						'description' => isset($education["FRFM"]) ? $education["FRFM"] : "",
					]);
				}
			}

			//Skills
			if(isset($info['skills']) && !empty($info['skills'])){
				Resumeskills::where("resume_id", $resume_id)->delete();

				$data = [];
				for($i=0;$i<count($info['skills']);$i++){
					$row = ["skill" => $info['skills'][$i], "rating" => 0];
					$data[] = $row;
				}

				Resumeskills::insert([
					"resume_id" => $resume_id,
					"skills" => json_encode($data)
				]);
			}

			//summary
			if(isset($info['summary']) && !empty($info['summary'])){
				Summary::where("resume_id", $resume_id)->delete();
				Summary::insert([
				"resume_id" => $resume_id,
				"summary" => $info['summary']
				]);
			}

			return redirect()->route('create-resume');
		}

	}
}
