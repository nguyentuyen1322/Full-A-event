<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    
    protected $table = "user";
    public function user_events(){
        return $this->hasMany('App\events','id_user','id');
    }
    public function user_bills(){
        return $this->hasMany('App\bills','id_user','id');
    }
    public $timestamps=false;
}
