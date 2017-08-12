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
                <form class="formulario-home" action= method="get">
                  {{ csrf_field() }}

                  <div class="col-xs-12 col-sm-5 col-md-4">
                    <label for="medico">¿Qué especialidad buscás?</label>
                    <select class="" name="speciality">
                      @foreach ($specialities as $speciality)
                        <option value={{ $speciality->id }}>{{ $speciality->specialty_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-4">
                    <label for="localidad">¿En dónde lo necesitás?</label>
                    <select class="" name="location">
                      @foreach ($locations as $location)
                        <option value={{ $location->id }}>{{ $location->location_name }}</option>
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
  </main>
@endsection
@yield('doctors')
