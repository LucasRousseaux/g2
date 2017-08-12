@extends('layouts.template')

@section('title') User by Id
@endsection

@section('content')
<ul>
<li> {{$user->name}}
</li>
</ul>
@endsection
