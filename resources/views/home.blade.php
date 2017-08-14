@extends('layouts.app')

@section('content')
  <main class="home">
      <section>
        <div class="container">
          <div class="row">
              <div class="textHome">
                  <h4>Hola <span>{{Auth::user()->name}}</span></h4>
                  <h1>Bienvenido a <b>Gubler</b></h1>
                  <h3>La consulta médica que buscás, ahora al alcance de un click</h3>
              </div>
          </div>
          <div class="row">
            <div class="buscador">
              <div class="form-inicio">
                <form class="formulario-home" action={{ url('search') }} method="get">
                  {{ csrf_field() }}

                  <div class="col-xs-12 col-sm-5 col-md-4">
                    <label for="medico">¿Qué especialidad buscás?</label>
                    <select class="" name="speciality">
                      @foreach ($specialities as $speciality)
                        <option value={{ $speciality->specialty_name }}>{{ $speciality->specialty_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-4">
                    <label for="localidad">¿En dónde lo necesitás?</label>
                    <select class="" name="location">
                      @foreach ($locations as $location)
                        <option value={{ $location->location_name }}>{{ $location->location_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                    <label for="fecha">¿Cuándo lo necesitás?</label>
                    <input type="text" placeholder="Fecha">
                  </div>
                  <div class="col-xs-12 col-sm-1 col-md-1">
                    <button type="submit" name="" value=""><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="doctores">
        <div class="container">
          <div class="row encabezado">
            <div class="col-xs-6">
              <h2>Destacados por especialidad</h2>
              <div class="linea"></div>
            </div>
            <div class="col-xs-6">
              {{ $doctors->links() }}
            </div>
          </div>
          <div class="row">
            <div class="docsContainer">
              @foreach ($doctors as $doctor)
                <article class="">
                  <a href={{route('doctors.show', $doctor->id)}}><img src={{ $doctor->doctor_image }} alt=""></a>
                  <div class="textDoctor">
                    <h2>{{ $doctor->doctor_name }}</h2>
                    <h4>{{ $doctor->doctor_experience }}</h4>
                  </div>
                  <div class="coments">
                    <div class="rating">
                      <ul>
                        @for ($i=0; $i < $doctor->doctor_ranking ; $i++)
                          <li><i class="fa fa-star"></i></li>
                        @endfor
                      </ul>
                    </div>
                    <div class="usersComent">
                      <span>3</span>
                      <a href=""><i class="fa fa-comments"></i></a>
                    </div>
                  </div>
                </article>
              @endforeach
            </div>
          </div>
        </div>
      </section>

  </main>
@endsection
