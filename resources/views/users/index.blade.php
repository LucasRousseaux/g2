@extends('layouts.template')

@section('title') Users
@endsection

@section('content')
<ul>

@foreach($users as $user)

<li> {{$user->name}} ; {{$user->email}} ; {{$user->language}}
</li>

@endforeach

</ul>

{{$users->links()}}

@endsection
