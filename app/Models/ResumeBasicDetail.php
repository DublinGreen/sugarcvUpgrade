<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeBasicDetail extends Model
{
    protected $table = 'resume_basic_detail';
    protected $guarded = [];
	
	public function resume_education_detail(){
        return $this->hasMany('App\Models\Resumeeducationdetail', 'resume_id', 'id');
    } 
	public function resume_work_detail(){
        return $this->hasMany('App\Models\Resumeworkdetail', 'resume_id', 'id');
    }
	public function resume_skills(){
        return $this->hasMany('App\Models\Resumeskills', 'id', 'resume_id');
    }
	public function skills(){
        return $this->belongsTo('App\Models\Resumeskills', 'id', 'resume_id');
    }
	
	public function summary(){
        return $this->belongsTo('App\Models\Summary', 'id', 'resume_id');
    }
	
	public function extraSection(){
        return $this->belongsTo('App\Models\Extrasection', 'id', 'resume_id');
    }
	
	 public function user(){
		return $this->belongsTo('App\Models\Users', 'user_id','id')->withDefault();
	 }
     public function finalposition(){
		return $this->belongsTo('App\Models\FinalPosition', 'id','resume_id');
	 }

}