<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Location;

class DoctorLocation extends Model
{
    //
    protected $guarded = [];

    protected $table = 'doctor_location';

    public function doctor() {

        return $this->belongsTo('App\Doctor', 'doctor_id');

    }

    public function location() {

        return $this->belongsTo('App\Location', 'location_id');

    }

}
