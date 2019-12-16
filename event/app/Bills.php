<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = "bills";
    public function events(){
        return $this->belongsTo('App\Events','id_event','id');
    }
}
