<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    protected $table = 'usermeta';
    protected $fillable = [];
    protected $hidden = ["created_at", "updated_at"];
	
	public function updateUserMeta($user_id, $key, $value){
		$meta = $this->where(['user_id' => $user_id, 'meta_key' => $key]);
		if($meta->count()){
			$meta->update(["meta_value" => $value]);
		} else {
			$this->insert([
				"user_id" => $user_id,
				"meta_key" => $key,
				"meta_value" => $value
			]);
		}
	}
	
	public function getUserMeta($user_id, $key = null){
		if($key != null){
			return $this->where(['user_id' => $user_id, 'meta_key' => $key])->get()->first();
		}
		return $this->where(['user_id' => $user_id])->get();
	}
	
	public function getUserMetaByValue($value){
		if($value != null){
			return $this->where(['meta_value' => $value])->get()->first();
		}
		return "";
	}

}