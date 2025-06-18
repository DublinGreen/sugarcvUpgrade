<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreData extends Model
{
    protected $table = 'config_data';
    protected $guarded = [];
	
	public function updateMeta($key, $value){
		$meta = $this->where('name', $key);
		if($meta->count()){
			$meta->update(["value" => $value]);
		} else {
			$this->insert([
				"name" => $key,
				"value" => $value
			]);
		}
	}
	
	public function getMeta($key){
		$meta = $this->where('name', $key);
		if($meta->count()){
			return $meta->get()->first()->value;
		}
		return "";
	}

}