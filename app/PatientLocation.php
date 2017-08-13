<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Location;

class PatientLocation extends Model
{
    //
    protected $guarded = [];

    protected $table = 'patient_location';

    public function patient() {

        return $this->belongsTo('App\Patient', 'patient_id');

    }

    public function location() {

        return $this->belongsTo('App\Location', 'location_id');

    }

}
