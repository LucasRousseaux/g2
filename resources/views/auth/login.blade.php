@extends('layouts.layout')


@section('content')
    <main id="login">
      <section class="home registro">
        <div class="container">
          <div class="row">
            <div class="registro">
                <div class="inicioSesion">
                    <h2>Iniciá sesión</h2>
                    <p>Aún no tenés una cuenta </p><a href="{{ route('register') }}"> REGISTRATE</a>
                  <div class="form-inicio">
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <div class="col-md-offset-3 col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="email">
                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <div class="col-md-offset-3 col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required placeholder="pass">
                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-4 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Ingresar
                                  </button>
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      Olvidé mi contraseña
                                  </a>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
