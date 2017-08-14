@extends('layouts.template')

@section('title') Search
@endsection

@section('content')
<ul>

@foreach($doctors as $doctor)

<li> {{$doctor->id}} ; {{$doctor->doctor_name}} ; {{$doctor->doctor_image}}
</li>

@endforeach

</ul>


@endsection
