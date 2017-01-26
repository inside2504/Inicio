<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Entrie extends Model{
	protected $table = 'entries';

	public function category(){
		return $this->hasOne('App\Category','id','category_id');
	}

	public function author(){
		return $this->hasOne('App\User','id','author_id');
	}

}