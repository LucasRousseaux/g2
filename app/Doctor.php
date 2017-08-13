<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institution;

class Doctor extends Model
{
    protected $guarded = [];


    public function user() {

      return $this->belongsTo('App\User');

    }

    public function institutions() {

        return $this->belongsToMany('App\Institution')->withTimestamps();

    }

    public function locations() {

        return $this->belongsToMany('App\Location')->withPivot('address')->withTimestamps();

    }

    public function specialties() {

        return $this->belongsToMany('App\Specialty')->withTimestamps();

    }


}
