<?php

namespace Inicio;

use Illuminate\Database\Eloquent\Model;
use Inicio\Entrie;

class Category extends Model{
	protected $table = 'categories';

	public function getEntries () {
		return $this->hasMany('Inicio\Entrie', 'category_id', 'id');
	}
}
