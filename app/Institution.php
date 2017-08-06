<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $guarded = [];

    // belongsToMany
    public function doctors() {

        return $this->belongsToMany(Doctor::class, 'table', 'foreign_key', 'other_key');

    }

    public function institutionTypes() {

        return $this->belongsTo(InstitutionType::class, 'foreign_key', 'other_key');

    }


    public function parentInstitution() {

        return $this->belongsTo(Institution::class, 'foreign_key', 'other_key');

    }

}
