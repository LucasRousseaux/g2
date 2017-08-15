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
        ->join('recommendations', 'recommendations.to_user_id', '=', 'doctors.user_id')
        ->join('patients', 'recommendations.from_user_id', '=', 'patients.user_id')
        ->groupBy('id', 'doctor_name', 'doctor_image', 'doctor_experience','patient_image')
        ->orderBy('doctor_ranking','desc')
        ->selectRaw('doctors.id as id, doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, patients.patient_image as patient_image, sum(recommendations.grade) as doctor_ranking, avg(recommendations.grade) as doctor_grade, count(recommendations.grade) as doctor_comments')->get();

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

//        $doctor = Doctor::find($id);

        $doctor = DB::table('doctors')
        ->join('recommendations', 'recommendations.to_user_id', '=', 'doctors.user_id')
        ->where('doctors.user_id','=',$id)
        ->groupBy('id', 'doctor_user_id','doctor_name', 'doctor_phone','doctor_image', 'doctor_experience')
        ->selectRaw('doctors.id as id, doctors.user_id as doctor_user_id,doctors.doctor_name as doctor_name, doctors.doctor_phone as doctor_phone, doctors.doctor_image as doctor_image, doctors.doctor_experience as doctor_experience, avg(recommendations.grade) as doctor_grade, count(recommendations.grade) as doctor_comments')->first();

        //DB::table('doctors')
        //->where('doctors.id', '=', $id)
        //->selectRaw('doctors.id as id, doctors.doctor_name as doctor_name, doctors.doctor_image as doctor_image,doctors.doctor_experience as doctor_experience, doctors.doctor_phone as doctor_phone')->get();

        $recommendations = DB::table('recommendations')
        ->join('patients', 'recommendations.from_user_id', '=', 'patients.user_id')
        ->where('recommendations.to_user_id', '=', $id)
        ->selectRaw('recommendations.id as id, patients.patient_name as patient_name, patients.patient_image as patient_image,recommendations.comment as comment, recommendations.grade as grade, recommendations.from_user_id as from_user_id, recommendations.updated_at as updated_at')->get();

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
