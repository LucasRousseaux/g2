@extends('layouts.layout')

@section('content')
<main id="registro">
  <section class="home registro">
      <div class="container">
          <div class="row">
              <div class="">
                  <div class="registro">
                    <div class="formRegistro">
                      <h2>Registro</h2>
                      <p>¿Ya tenés una cuenta?</p><a href="{{ route('login') }}"> INICIÁ SESIÓN</a>
                        <div class="panel-body inicioSesion">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-offset-3 col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="nombre">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-offset-3 col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="tu mail">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-offset-3 col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmá tu password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar
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
  </section>

@endsection
