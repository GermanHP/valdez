@extends('layouts.app')
@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('alertas.errores')
                        @include('alertas.flash')
                        <h3 class="center">Por favor cambie su contraseña por defecto</h3>
                        <blockquote>La contraseña debe tener un minimo de 6 caracteres</blockquote>
                        {!!Form::open(['route'=>['Password.guardar.nuevo'], 'method'=>'POST',
                        'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function ()
                        {waitingDialog.hide();}, 3000);"])!!}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Nueva Contraseña </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contrasña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <blockquote>Una vez presione el boton "Cambiar contraseña" la proxima vez que acceda al
                                    sistema sera con la contraseña que colocó arriba.</blockquote><br>
                                <button type="submit" class="btn btn-primary">
                                    Cambiar Contraseña
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
@stop