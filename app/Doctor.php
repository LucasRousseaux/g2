<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institution;

class Doctor extends Model
{
    protected $guarded = [];


    public function user() {

      return $this->belongsTo(User::class);

    }

    public function institutions() {

        return $this->belongsToMany(Institution::class)->withTimestamps();

    }

    public function locations() {

        return $this->belongsToMany(Location::class)->withPivot('address')->withTimestamps();

    }

    public function specialties() {

        return $this->belongsToMany(Specialty::class)->withTimestamps();

    }


}
