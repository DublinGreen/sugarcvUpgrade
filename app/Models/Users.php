<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [];
    protected $hidden = [];

    protected static $userModel = 'Cartalyst\Sentinel\Users\EloquentUser';
    protected static $userMetaModel = 'App\Models\UserMeta';

    public function user () {
        return $this->belongsTo(static::$userModel, 'id');
    }
    
    public function meta() {
        return $this->hasMany(static::$userMetaModel, 'user_id');
    }
	
	public function resume_basic_detail(){
        return $this->belongsTo('App\Models\ResumeBasicDetail', 'id', 'user_id')->withDefault([
        'full_name' => 'null',
    ]);
	}
	
	public function userPlan(){
        return $this->belongsTo('App\Models\UserPlans', 'id', 'user_id')->withDefault([
        'status' => '0',
    ]);;
    }
	
	
}