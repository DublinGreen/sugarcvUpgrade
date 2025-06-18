<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Users;
use App\Notification\FCM;
use App\DeviceTokens;


class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::where("users.id","!=",1)
                    ->orderBy('users.id', 'DESC')
                    ->get();
		$user = \Sentinel::getUser();
        return view('backend/chat/index',["users"=>$users, "user" => $user]);
    }
 
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $id = $request->input("studentID");
        $msg = $request->input("messageText");
        $device = DeviceTokens::where("studentId","=",$id)->get(["device_token as token"])->first();
        if(isset($device->token)){
            $data = '{
                "to" : "'.$device->token.'",
                "data" : {
                    "body" : "'.htmlspecialchars($msg).'",
                    "title": "New Message",
                    "studentId":"'.$id.'",
                    "Type":"2"
                }
            }';
            $fcm = new FCM($data);
            $response = $fcm->sendTo();
            print_r($response);
        }
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

}

 

