<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use validator;

class RecordingController extends Controller
{

    public function __construct() {
        parent::__construct();
        $this->middleware('admin');
	}
	
	public function index(){	
		$recordings = \DB::table('user_record')->get();
        return view('backend.user_recording.index',compact("recordings"));
	}
	
	public function getEvent(Request $request){
		$id = $request->input('id');
		$record = \DB::table('user_record')->where('id', $id)->first();
		echo $record->events;
	}
	
}
