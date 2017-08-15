<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Location;
use App\Doctor;
use DB;


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

      //mostrar todos los doctores
      $doctors = DB::table('doctors')
      ->join('users', 'doctors.user_id', '=', 'users.id')
      ->join('recommendations', 'recommendations.to_user_id', '=', 'users.id')
      ->groupBy('id', 'doctor_name', 'doctor_image', 'doctor_experience')
      ->orderBy('doctor_ranking','desc')
      ->selectRaw('doctors.id as id, doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, sum(recommendations.grade) as doctor_ranking, avg(recommendations.grade) as doctor_grade, count(recommendations.grade) as doctor_comments')->get();

      $locations = Location::all();
      $specialties = Specialty::all();

        return view('home', [
          'specialties' =>$specialties,
          'locations' => $locations,
          'doctors' => $doctors,
        ]);
    }
}
