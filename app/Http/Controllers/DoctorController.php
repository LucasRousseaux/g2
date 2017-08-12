<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\User;
use App\Recommendation;
use Illuminate\Http\Request;

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
        $doctores = Doctor::paginate(12);
        return view('doctors', [
          'doctores' => $doctores
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
    public function show(Doctor $doctor)
    {
        $doctor = Doctor::find($doctor->id);
        $users = User::all();
        $recommendations = DB::table('recommendations')->where('to_user_id', '=', $doctor->id)->get();
        return view('doctor', [
          'doctor' => $doctor,
          'users' => $users,
          'recommendations' => $recommendations
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

    public function mostrarDoctor($id)
    {
        $doctor = Doctor::find($id);
        $users = User::all();
        return view('doctor', [
          'doctor' => $doctor,
          'users' => $users
        ]);
    }
}
