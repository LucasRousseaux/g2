<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('welcome.name', 'Gubler') }}</title>

        <!-- Fuente de iconos -->
        <script src="https://use.fontawesome.com/f08f235f18.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">
        <!-- Biblioteca Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="welcome">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('welcome.name', 'Gubler') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @if (Auth::check())
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ url('/login') }}">Iniciar Sesión</a>
                                    <a href="{{ url('/register') }}">Registrarse</a>
                                @endif
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <section  class="home">
              <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="textHome">
                            <h1>Bienvenido a <b>Gubler</b></h1>
                            <h3>La consulta médica que buscás, ahora al alcance de un click</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="buscador">
                      <div class="form-inicio">
                        <form class="formulario-home" action="" method="post">
                          <div class="col-xs-12 col-sm-5 col-md-4">
                            <label for="medico">¿Qué especialidad buscás?</label>
                            <input type="text" name="medico" value="" placeholder="Especialista">
                          </div>
                          <div class="col-xs-12 col-sm-3 col-md-4">
                            <label for="localidad">¿En dónde lo necesitás?</label>
                            <input type="text" name="localidad" value="" placeholder="Elegi tu localidad">
                          </div>
                          <div class="col-xs-12 col-sm-3 col-md-3">
                            <label for="fecha">¿Cuándo lo necesitás?</label>
                            <input type="text" name="fecha" value="" placeholder="Fecha">
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
            @yield('content')
        </main>
        <!-- JavaScript para bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Scripts -->
    </body>
</html>
