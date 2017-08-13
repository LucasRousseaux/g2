<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $guarded = [];

    public function doctors() {

        return $this->belongsToMany('App\Doctor');

    }

    public function patients() {

        return $this->belongsToMany('App\Patient');

    }

}
