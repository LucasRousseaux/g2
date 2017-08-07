<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $guarded = [];

    // belongsToMany
    public function doctors() {

        return $this->belongsToMany(Doctor::class);

    }

    public function institutionTypes() {

        return $this->belongsTo(InstitutionType::class);

    }

}
