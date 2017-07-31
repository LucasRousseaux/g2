<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $guarded = [];

    public function user() {

        return $this->belongsTo(User::class, 'foreign_key', 'other_key');

    }


    // hasMany / belongsTo
    public function recommendations() {

        return $this-> hasMany (Recommendation::class, 'foreign_key', 'local_key');

    }

    // belongsToMany
    public function locations() {

        return $this->belongsTo(Location::class, 'table', 'foreign_key', 'other_key');

    }


}
