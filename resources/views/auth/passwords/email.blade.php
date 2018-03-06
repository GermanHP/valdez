@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="container">
    <div class="card">
    <div class="parallax-container valign-wrapper" id="consulta">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    {!! Form::image('/img/logos/logo_valdez.png') !!}
                    <h3 class="evogria center-align black-text">Reestablecer Contraseña</h3>
                </div>
            </div>
        </div>
    </div>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Ingresa tu correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group center">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar Link para Restablecer Contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                        <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
    <br><br><br>
@endsection
