<?php

namespace App\Repositories;

use App\Models\Users;

class UserRepository extends BaseRepository
{
    protected $model;

    public function __construct() {
        $this->model = new Users;
    }

    public function sendActivationEmail($user){
		$code="1000";
        \Mail::send('frontend.emails.activation', [
                'user' => $user,
                'code' => $code
            ], function($message) use ($user){
                // $message->to($user->email);
                $message->to("php.essitco1@gmail.com");
                $message->subject("Hello test, activate your account.");
            });
			return true;
    }
	
}