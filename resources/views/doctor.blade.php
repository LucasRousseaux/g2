@extends('layouts.app')

@section('content')
  <section id="doctor">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-4 floatDer">
        <div class="imgDoctor">
          <img src= {{ $doctor->doctor_image }} alt="">
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h2>{{ $doctor->doctor_name }}</h2>
            <h4>{{ $doctor->doctor_experience }}</h4>
          </div>
          <div class="col-sm-12">
            <div class="rating">
              <h5>Teléfono: {{ $doctor->doctor_phone }}</h5>
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
              <div class="rating">
                <ul>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <h5>Recomendado por: 23 personas</h5>
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
            <form class="comentario" action="" method="post">
               <textarea class="form-control" rows="5" id="comment"></textarea>
              <div class="col-sm-offset-8 col-sm-4">
                <button type="submit" name="button">Enviar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3>Comentarios <span>23</span></h3>
          </div>
          @foreach ($doctor->user->coments as $user)
            <div class="col-sm-12">
              <div class="comentario">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="http://lorempixel.com/600/600/people/" alt="">
                  </div>
                  <div class="col-sm-8">
                    <h3>{{ $user->comment }}</h3>
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
                    <p>{{ $user->coments }}</p>
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
