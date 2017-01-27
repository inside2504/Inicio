<?php

namespace Inicio;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Inicio\Entrie;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getEntries(){
        return $this->hasMany('Inicio\Entrie','author_id','id');
    }

}