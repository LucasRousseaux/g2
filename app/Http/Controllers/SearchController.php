<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //

    public function index($specialist = null,$location = null)
    {
        //mostrar todos los doctores

        $doctors = DB::table('doctors')
        ->join('doctor_location', 'doctors.id', '=', 'doctor_location.doctor_id')
        ->join('doctor_specialty', 'doctors.id', '=', 'doctor_specialty.doctor_id')
        ->join('locations', 'doctor_location.location_id', '=', 'locations.id')
        ->join('specialties', 'doctor_specialty.specialty_id', '=', 'specialties.id')
        ->join('recommendations', 'recommendations.to_user_id', '=', 'doctors.user_id')
        ->where('specialties.specialty_name','like',$specialist.'%')
        ->orWhere('locations.location_name','like',$location.'%')
        ->groupBy('id', 'doctor_name', 'doctor_image', 'doctor_experience')
        ->orderBy('doctor_ranking','desc')
        ->selectRaw('doctors.id as id,doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, sum(recommendations.grade) as doctor_ranking')->take(10)->get();

        return view('search', [
          'doctors' => $doctors,
        ]);
    }

}
