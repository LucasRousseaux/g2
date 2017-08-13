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

        return $this->belongsTo(Patient::class, 'patient_id');

    }

    public function location() {

        return $this->belongsTo(Location::class, 'location_id');

    }

}
