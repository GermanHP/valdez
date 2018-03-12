@extends('layouts.app')


@section('content')
    <div class="parallax-container valign-wrapper" id="consulta">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="evogria center-align white-text">Únete a Nuestra Familia</h4>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/banners/productos.png" alt="Unsplashed background img 3"></div>
    </div>
    <br><br>
    <div class="container">
    <h4 class="center">Crear Currículo</h4>
    {!!Form::open(['route'=>['empleo.store'], 'method'=>'POST', 'files'=>true,
    'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function ()
    {waitingDialog.hide();}, 3000);"])!!}

        <div class="container">
            <h5>Área Personal</h5>
            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Nombres:', ['class'=>'input-group-addon']) }}
                {{ Form::text('nombreCandidato', null, ['class' => 'form-control', 'required' => '',
                'maxlength' => '255']) }}
            </div>

            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Apellidos:', ['class'=>'input-group-addon']) }}
                {{ Form::text('apellidoCandidato', null, ['class' => 'form-control', 'required' => '',
                'maxlength' => '255']) }}
            </div>
            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Dirección Completa:', ['class'=>'input-group-addon']) }}
                {{ Form::text('direccionCandidato', null, ['class' => 'form-control', 'required' => '',
                'maxlength' => '255']) }}
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::text('numeroDUI',null,['class'=>'validate','pattern'=>'[0-9]{9}','placeholder'=>
                'Numero de DUI sin guiones.', 'maxlength'=>'9'])}}
                <label for="numeroDUI">DUI</label>
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::text('edad',null,['class'=>'validate','placeholder'=>'Años cumplidos', 'maxlength'=>'2'])}}
                <label for="edad">Edad</label>
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::text('telefonoCliente',null,['class'=>'validate','placeholder'=>'Teléfono de contacto',
                'maxlength'=>'8'])}}
                <label for="telefonoCliente">Teléfono de Contacto</label>
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
                <p></p><br>
                {{Form::email('correoCandidato',null, ['class'=>'validate', 'placeholder'=>'e-mail', 'id'=>
                'correoReserva'])}}
            </div>
            <div class="input-group input-group-lg">
                {{ Form::label('featured_foto', 'Sube tu Foto', ['class'=>'input-group-addon']) }}
                {{ Form::file('featured_foto', ['class'=>'form-control', 'required'=>'']) }}
            </div>
            <br><br>
            <h5>Experiencia Laboral</h5>
            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Nombre de Empresa:', ['class'=>'input-group-addon']) }}
                {{ Form::text('empresa1', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::textarea('mensaje1',null, ['class'=>'validate materialize-textarea', 'placeholder'=>
                'Describe tu experiencia y periodo laboral.'])}}
            </div>
            <br>
            <hr class="divider teal">
            <br>
            <div class="input-group input-group-lg">
                {{ Form::label('nombre', 'Nombre de Empresa:', ['class'=>'input-group-addon']) }}
                {{ Form::text('empresa2', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
            </div>
            <div class="input-field col s12 m12 l12 xl12">
                {{Form::textarea('mensaje2',null, ['class'=>'validate materialize-textarea', 'placeholder'=>
                'Describe tu experiencia y periodo laboral.'])}}
            </div>
            <br><br>
            <h5>Otros Datos</h5>
            <div class="input-field col s6 m6 l6 xl6">
                {{ Form::label('puestos', 'Puesto al que desea aplicar:', ['class'=>'input-group-addon']) }}
                <br>
                {!! Form::select('puestos',$puestos,null,['class'=>'js-example-basic-single form-control ',
                "describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)',
                'style'=>'width: 100%']) !!}
            </div>
            <br><br>

    {!!Form::submit('Crear Currículo', ['class'=>'btn btn-primary','name'=>'btnActualizarGrupo',
    "id"=>"btnSubirArchivo"])!!}
    {!!Form::close()!!}

        </div>
    </div>
    <br><br><br>
@stop