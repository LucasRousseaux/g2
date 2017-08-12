@extends('layouts.template')

@section('title') Usuarios
@endsection

@section('content')
<ul>
@foreach($users as $user)
<li> {{$user->name}}
</li>
@endforeach

</ul>
{{$list->links()}}
@endsection
