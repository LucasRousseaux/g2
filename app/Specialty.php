<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    //
    protected $guarded = [];

    public function doctors() {

        return $this->belongsToMany(Doctor::class, 'table', 'foreign_key', 'other_key');

    }

    public function parentSpecialty() {

        return $this->belongsTo(Specialty::class, 'foreign_key', 'other_key');

    }

}
