<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Location;
use App\Doctor;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = Specialty::all();
        $locations = Location::all();
        $doctors = Doctor::paginate(12);
        return view('home', [
          'specialities' => $specialities,
          'locations' => $locations,
          'doctors' => $doctors,
        ]);
    }
}
