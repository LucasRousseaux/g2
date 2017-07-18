@extends('layouts.layout')
@section('content')
  <main>
    <section class="home">
      <div class="container">
        <div class="row">
          <h1>Bienvenido a <b>Gubler</b></h1>
          <h3>La consulta médica que buscás, ahora al alcance de un click</h3>
        </div>
        <div class="row">
          <div class="">
            <form class="formulario-home" action="" method="get">
              <div class="col-xs-12 col-sm-5 col-md-4">
                <input type="text" name="medico" value="" placeholder="Especialista">
              </div>
              <div class="col-xs-12 col-sm-3 col-md-4">
                <input type="text" name="localidad" value="" placeholder="Elegi tu localidad">
              </div>
              <div class="col-xs-12 col-sm-2 col-md-3">
                <input type="text" name="fecha" value="" placeholder="Fecha">
              </div>
              <div class="col-xs-12 col-sm-2 col-md-1">
                <button type="submit" name="" value=""><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="destacados">
      <div class="container">
        <div class="row">
          <h2>Destacados por especialidad</h2>
            <div class="col-sm-6 col-md-4">
              <article class="doctor">
                <img src="" alt="">
                <div class="elementos-doctor">
                  <h3></h3>
                  <p></p>
                  <ul>
                  </ul>
                  <div class="locacion">
                    <i class="fa fa-map-marker"><h6>5k</h6></i>
                  </div>
                </div>
              </article>
            </div>';
        </div>
        <div class="separador"></div>
        <div class="row">
          <h2>Destacados por localidad</h2>

        </div>

      </div>

    </section>

  </main>
@endsection
