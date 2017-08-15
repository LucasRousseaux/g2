<?php

namespace App\Http\Controllers;

use App\Recommendation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request['comment'], $request['from_user_id'], $request['to_user_id']);
      $recommendation= new Recommendation();
      $recommendation->comment = $request['comment'];
      $recommendation->from_user_id = $request['from_user_id'];
      $recommendation->to_user_id = $request['to_user_id'];
      $doctor = $request['to_user_id'];

      $recommendation->save();

    //   return redirect('doctors.show', $doctor);
      return redirect()->route('doctors.show', ['id' => $doctor]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function show(Recommendation $recommendation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function edit(Recommendation $recommendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $doctor = $request['doctor_id'];

        DB::table('recommendations')
            ->where('id', $id)
            ->update(['comment' => $request['comment']]);

        return redirect()->route('doctors.show', ['id' => $doctor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // dd($request['doctor_id']);
        DB::table('recommendations')->where('id', '=', $id)->delete();
        $doctor = $request['doctor_id'];

        return redirect()->route('doctors.show', ['id' => $doctor]);

    }
}
