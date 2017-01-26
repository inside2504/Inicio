<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entrie;

class Category extends Model
{
    protected $table = 'categories';

	public function getEntries(){
		return $this->hasMany('App\Entrie','category_id','id');
	}
}
