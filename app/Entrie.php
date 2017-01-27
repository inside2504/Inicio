<?php

namespace Inicio;

use Illuminate\Database\Eloquent\Model;
use Inicio\Category;
use Inicio\User;

class Entrie extends Model{
	protected $table = 'entries';

	public function category(){
		return $this->hasOne('Inicio\Category','id','category_id');
	}

	public function author(){
		return $this->hasOne('Inicio\User','id','author_id');
	}

}