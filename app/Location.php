<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $guarded = [];

    public function doctors() {

        return $this->belongsToMany(Doctor::class, 'table', 'foreign_key', 'other_key');

    }

    public function parentLocation() {

        return $this->belongsTo(Location::class, 'foreign_key', 'other_key');

    }

}
