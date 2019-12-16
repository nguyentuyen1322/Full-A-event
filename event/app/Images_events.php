<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images_events extends Model
{
    protected $table = "images_event";
    public function Images_events(){
        return $this->belongsTo('App\Events','id_event');
    }
}
