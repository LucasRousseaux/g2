<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Institution;

class Doctor extends Model
{
    protected $guarded = [];


    public function user() {

        return $this->belongsTo(User::class, 'foreign_key', 'other_key');

    }

    // belongsToMany
    public function institutions() {

        return $this->belongsToMany(Institution::class, 'table', 'foreign_key', 'other_key');

    }

    // belongsToMany
    public function locations() {

        return $this->belongsToMany(Location::class, 'table', 'foreign_key', 'other_key');

    }

    // belongsToMany
    public function specialties() {

        return $this->belongsToMany(Specialty::class, 'table', 'foreign_key', 'other_key');

    }


    // hasMany / belongsTo
    public function recommendations() {

        return $this-> hasMany (Recommendation::class, 'foreign_key', 'local_key');

    }


}
