<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    protected $table = 'payment_transaction';
    protected $guarded = [];
	
	 public function plan(){
		return $this->belongsTo('App\Models\Plans', 'plan_id','id')->withDefault();
	 }
	
	 public function user(){
		return $this->belongsTo('App\Models\Users', 'user_id','id')->withDefault();
	 }

}