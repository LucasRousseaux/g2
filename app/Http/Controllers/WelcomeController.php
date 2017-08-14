<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Specialty;
use App\Location;
use App\Doctor;

class WelcomeController extends Controller
{
  public function index()
  {
      $specialities = Specialty::all();
      $locations = Location::all();
      $doctors = Doctor::all();
      return view('welcome', [
        'specialities' => $specialities,
        'locations' => $locations,
        'doctors' => $doctors,
      ]);
  }
}
