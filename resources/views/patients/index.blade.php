@extends('layouts.template')

@section('title') Patients
@endsection

@section('content')
<ul>

@foreach($patients as $patient)


<li>  {{$patient->patient_name}};{{$patient->patient_gender}};{{$patient->patient_birthday}} ; 
  {{ $patient->user['name'] }} ; {{$patient->user['email'] }} ;

</li>

@endforeach

</ul>

{{$patients->links()}}

@endsection
