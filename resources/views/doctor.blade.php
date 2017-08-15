@extends('layouts.app')

@section('content')
  <section id="doctor">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-4 floatDer" id="ventana_doc">
        <div class="imgDoctor">
          <img src= "{{ $doctor->doctor_image }}" alt="">
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h2>{{ $doctor->doctor_name }}</h2>
            <h4>{{ $doctor->doctor_experience }}</h4>
          </div>
          <div class="col-sm-12">
            <h5>Teléfono: {{ $doctor->doctor_phone }}</h5>
            <div class="rating">
              <h5>Rating:</h5>
              <ul>

                  @for ($i=0; $i < $doctor->doctor_grade ; $i++)
                    <li><i class="fa fa-star"></i></li>
                  @endfor
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="row">
          <div class="docHead">
            <div class="col-sm-7">
              <h2>{{ $doctor->doctor_name }}</h2>
              <h4>{{ $doctor->doctor_experience }}</h4>
            </div>
            <div class="col-sm-5">
              <h5>Teléfono: {{ $doctor->doctor_phone }}</h5>
              <div class="rating">
                <h5>Rating:</h5>
                @foreach ($recommendations as $r)
                  <ul>
                    @for ($i=0; $i < $r->grade ; $i++)
                      <li><i class="fa fa-star"></i></li>
                    @endfor
                  </ul>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h3>Resumen</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h3>Estudios</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h3>Experiencia</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h3>Escribir un comentario</h3>
            @if (Auth::check())
              <form class="comentario" action={{ route('recommendations.store') }} method="post">
                {{ csrf_field() }}
                <input type="text" name="from_user_id" value={{Auth::user()->id}} style="display:none">
                <input type="text" name="to_user_id" value={{$doctor->doctor_user_id}} style="display:none">
                <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Escribe un nuevo comentario"></textarea>

                <div class="col-sm-offset-8 col-sm-4">
                  <button type="submit" name="button">Comentar</button>
                </div>
              </form>
              @else
                <h4>Para dejar un comentario <a href={{route('register')}}>registrate</a> o <a href={{ route('login') }}>iniciá sesión</a></h4>
            @endif
          </div>
        </div>
        <div class="row">
          @foreach ($recommendations as $r)
            <div class="col-sm-12">
              <div class="comentario">
                <div class="row">
                  <div class="col-sm-2">
                    <img src={{$r->patient_image}} alt="">
                  </div>
                  <div class="col-sm-8">
                    <h3>{{$r->patient_name}}</h3>
                    <h5>{{$r->updated_at}}</h5>
                  </div>
                  <div class="col-sm-2">
                    @if (Auth::check() && Auth::user()->id == $r->from_user_id )
                      <ul class="edit">
                        <li><a href="btnComment" onclick="event.preventDefault();showEdit()"><i class="fa fa-edit"></i></a></li>
                        <li><a href={{  route('recommendations.destroy', ['id' => $r->id] ) }} onclick="event.preventDefault();document.getElementById('delete').submit();"><i class="fa fa-trash-o"></i></a></li>
                      </ul>

                      <form id="delete" class="" action={{  route('recommendations.destroy', ['id' => $r->id] ) }} method="post" style="display:none">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="text" name="doctor_id" value={{$doctor->doctor_user_id}}>
                      </form>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 comment">
                    <p class="jsComment">{{ $r->comment }}</p>
                    @if (Auth::check() && Auth::user()->id == $r->from_user_id)
                      <form class="jsUpComment" action={{ route('recommendations.update', ['id' => $r->id])}} method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <textarea class="form-control" rows="5" type="text" name="comment" placeholder="{{ $r->comment }}"></textarea>
                        <input type="text" name="doctor_id" value={{$doctor->doctor_user_id}} style="display:none">
                        <div class="col-sm-offset-9 col-sm-3">
                          <button type="submit" name="button">editar</button>
                        </div>
                      </form>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endforeach

          {{-- <div class="col-sm-12">
            <div class="comentario">
              <div class="row">
                <div class="col-sm-2">
                  <img src="http://lorempixel.com/600/600/people/" alt="">
                </div>
                <div class="col-sm-8">
                  <h3>Rodrigo Trejo</h3>
                  <h5>29 de Julio de 2017</h5>
                </div>
                <div class="col-sm-2">
                  <ul class="edit">
                    <li><a href=""><i class="fa fa-edit"></i></a></li>
                    <li><a href=""><i class="fa fa-trash-o"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
@endsection
