<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlans extends Model
{
    protected $table = 'user_plans';
    protected $guarded = [];
		
	
	 public function userPlan_detials(){
		return $this->belongsTo('App\Models\Users', 'user_id','id')->withDefault([
			'full_name' => 'null',
		]);
	 }
	
	 public function plan(){
		return $this->belongsTo('App\Models\Plans', 'plan_id','id')->withDefault();
	 }
}