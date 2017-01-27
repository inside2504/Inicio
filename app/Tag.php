<?php

namespace Inicio;

use Illuminate\Database\Eloquent\Model;
use Inicio\Entrie;

class Tag extends Model{
	protected $table = 'tags';

	public function getEntries(){
		return Entrie::where('tags','LIKE',"%{$this->name}%")->get();
	}
}