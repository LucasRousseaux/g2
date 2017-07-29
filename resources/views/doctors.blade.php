@extends('welcome')


@section('content')
  <section id="doctores">
    <div class="container">
      <div class="row encabezado">
        <div class="col-xs-6">
          <h2>Destacados por especialidad</h2>
          <div class="linea"></div>
        </div>
        <div class="col-xs-6">
          <a href="">ver más <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="docsContainer">
          @foreach ($doctores as $doctor)
            <article class="">
              <a href="doctor/{{$doctor->id}}"><img src="http://lorempixel.com/600/600/people/" alt=""></a>
              <div class="textDoctor">
                <h2>{{ $doctor->doctor_name }}</h2>
                <h4>{{ $doctor->doctor_experience }}</h4>
              </div>
              <div class="coments">
                <div class="rating">
                  <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
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
@endsection
