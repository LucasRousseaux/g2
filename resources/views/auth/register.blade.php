@extends('layouts.app')

@section('content')
<div class="home" id="registro">
  <div class="container">
    <div class="row">
      <h2>Registrate</h2>
      <p>¿Ya tenés una cuenta? - <a href="{{route('login')}}">Iniciá sesión</a></p>
    </div>
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="registro">
                  <div class="formRegistro">
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                          {{ csrf_field() }}
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <div class="col-sm-offset-2 col-sm-8">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <div class="col-sm-offset-2 col-sm-8">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="email">
                                  <span id="mailError" style="color:red"></span>                                  
                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <div class="col-sm-offset-2 col-sm-8">
                                  <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-6">
                                  <button type="submit">
                                      Registrarme
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
