<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $guarded = [];

    // belongsToMany
    public function doctors() {

        return $this->belongsToMany('App\Doctor');

    }

    public function institutionTypes() {

        return $this->belongsTo('App\InstitutionType','institution_type_id');

    }

}
