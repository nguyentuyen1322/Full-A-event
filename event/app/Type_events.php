<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_events extends Model
{
    protected $table = "type_events";
    public function events(){
        return $this->hasMany('App\Events','id_loai','id');
    }
}
