<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entrie;

class Tag extends Model{
	protected $table = 'tags';

	public function getEntries(){
		return Entrie::where('tags','LIKE',"%{$this->name}%")->get();
	}
}