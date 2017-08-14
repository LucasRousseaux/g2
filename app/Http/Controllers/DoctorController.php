<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\User;
use App\Specialty;
use App\Location;
use App\Recommendation;
use Illuminate\Http\Request;
use DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
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

        $specialties = Specialty::all();
        $locations = Location::all();

        return view('doctors', [
          'specialties' => $specialties,
          'locations' => $locations,
          'list' => $doctors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $doctor = Doctor::find($id);

        //DB::table('doctors')
        //->where('doctors.id', '=', $id)
        //->selectRaw('doctors.id as id, doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, doctors.doctor_phone as doctor_phone')->get();

        $recommendations = DB::table('recommendations')
        ->join('users', 'recommendations.from_user_id', '=', 'users.id')
        ->join('doctors', 'recommendations.to_user_id', '=', 'doctors.id')
        ->where('doctors.id', '=', $id)
        ->selectRaw('recommendations.id as id, recommendations.comment as comment, recommendations.grade as grade, users.name as from_user_name, recommendations.from_user_id as from_user_id, recommendations.updated_at as updated_at')->get();

        return view('doctor', [
          'doctor' => $doctor,
          'recommendations' => $recommendations,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

}
