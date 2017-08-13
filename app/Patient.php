<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $guarded = [];

    public function user() {

        return $this->belongsTo(User::class);

    }



    // belongsToMany
    public function locations() {

        return $this->belongsToMany(Location::class)->withPivot('address')->withTimestamps();

    }


}
