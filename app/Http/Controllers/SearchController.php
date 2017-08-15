<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SearchController extends Controller
{
    //

    // public function index($specialist = null,$location = null)
    public function index(Request $request)
    {
        //mostrar todos los doctores

        // dd($request['speciality'], $request['location']);

        $specialist = $request['speciality'];
        $location = $request['location'];

        $doctors = DB::table('doctors')
        ->join('doctor_location', 'doctors.id', '=', 'doctor_location.doctor_id')
        ->join('doctor_specialty', 'doctors.id', '=', 'doctor_specialty.doctor_id')
        ->join('locations', 'doctor_location.location_id', '=', 'locations.id')
        ->join('specialties', 'doctor_specialty.specialty_id', '=', 'specialties.id')
        ->join('recommendations', 'recommendations.to_user_id', '=', 'doctors.user_id')
        ->join('patients', 'recommendations.from_user_id', '=', 'patients.user_id')
        ->where('specialties.specialty_name','like',$specialist.'%')
        ->orWhere('locations.location_name','like',$location.'%')
        ->groupBy('id', 'doctor_user_id','doctor_name', 'doctor_image', 'doctor_experience','patient_image')
        ->orderBy('doctor_ranking','desc')
        ->selectRaw('doctors.id as id,doctors.user_id as doctor_user_id, doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, patients.patient_image as patient_image,sum(recommendations.grade) as doctor_ranking, avg(recommendations.grade) as doctor_grade, count(recommendations.grade) as doctor_comments')->take(10)->get();

        // dd($doctors);

        return view('search', [
          'doctors' => $doctors,
        ]);
    }

}
