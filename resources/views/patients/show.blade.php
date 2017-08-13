@extends('layouts.template')

@section('title') User by Id
@endsection

@section('content')
<ul>
<li>  {{$patient->patient_name}};{{$patient->patient_gender}};{{$patient->patient_birthday}} ; {{ $patient->user['name'] }} ; {{ $patient->user['email'] }};
</li>
</ul>
@endsection
