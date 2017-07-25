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
                <img src="http://lorempixel.com/600/600/people" alt="">
                <h3>Nombre doctor</h3>
                <h4>especialidad</h4>
                <p>rankin:</p>
                <ul>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <div class="datos">
                  <div class="locacion">
                    <i class="fa fa-map-marker"></i><h3>5k</h3>
                  </div>
                  <div class="comentarios">
                    <i class="fa fa-comments-o"></i><span>3</span>
                  </div>
                </div>
              </article>
            </div>
        </div>
        <div class="row">
          <h2>Destacados por localidad</h2>
        </div>
      </div>
    </section>
  </main>
@endsection
