@extends('layouts.app')

@section('content')

    <div class="parallax-container valign-wrapper" id="consulta">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="evogria center-align white-text">Registrarme</h3>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/banners/productos.png" alt="Unsplashed background img 3"></div>
    </div>
    <br><br><br><br>
<div class="container">
    <h3 class="evogria center-align">Formulario de Registro</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="input-field">
                            <p>Nombres</p>
                            {{Form::text('nombreCliente',null, ['class'=>'validate', 'placeholder'=>'Su nombre'])}}
                        </div>

                        <div class="input-field">
                            <p>Apellidos</p>
                            {{Form::text('apellidoCliente',null, ['class'=>'validate', 'placeholder'=>'Su apellido'])}}
                        </div>

                        <div class="input-field">
                            <p>Fecha de Nacimiento</p>
                            {{Form::date('fechaNacimientoUsuario',\Carbon\Carbon::now(), null,['class'=>'validate'])}}
                        </div>

                        <div class="input-field">
                            <p>DUI</p>
                            {{Form::text('DUIpadre',null,['class'=>'form-control','pattern'=>'[0-9]{9}',
                            'placeholder'=>'DUI sin guiones', 'maxlength'=>'9'])}}
                        </div>

                        <div class="input-field">
                            <p>Género</p>
                            {!! Form::select('genero',['class'=>'js-example-basic-single form-control ',
                            "describedby"=>"basic-addon1",'required', 'id'=>'department', 'style'=>'width: 100%']) !!}
                        </div>

                        <div class="input-field">
                            <p>E-mail</p>
                            {{Form::email('correoCliente',null, ['class'=>'form-control', 'placeholder'=>
                            'Ingrese su e-mail', 'aria-describedby'=>'basic-addon1'])}}
                        </div>

                        <div class="input-field">
                            <p>Contraseña</p>
                            {!! Form::password('passwordCliente', null,['id'=>'pass','class'=>'validate',
                            'placeholder'=>'Elija una contraseña', get_required_files()]) !!}
                        </div>

                        <div class="form-group center-align">
                            <div class="col-md-6 col-md-offset-4">
                                {!!Form::submit('Registrarme', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <br><br><br><br><br>
@endsection
