<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
    	'user_id', 
    	'diaries_paragraph',
    	'created_date',
	];

	public function users()
	{
		return $this->belongsTo('App\User');
	}
}
