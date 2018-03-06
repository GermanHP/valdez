@extends('layouts.admin')
@section('content')
    {!! Html::style('css/app.css') !!}
    <style>
        .demo-ribbon {
            width: 100%;
            height: 40vh;
            background-color: #3F51B5;
            flex-shrink: 0;
        }

        .demo-main {
            margin-top: -35vh;
            flex-shrink: 0;
        }

        .demo-header .mdl-layout__header-row {
            padding-left: 40px;
        }

        .demo-container {
            max-width: 1600px;
            width: calc(100% - 16px);
            margin: 0 auto;
        }

        .demo-content {
            border-radius: 2px;
            padding: 80px 56px;
            margin-bottom: 80px;
        }

        .text-underlinded{
            text-underline-color: black;
            text-underline-style: dash;
        }

        .demo-layout.is-small-screen .demo-content {
            padding: 40px 28px;
        }

        .demo-content h3 {
            margin-top: 10px;
        }

        .demo-footer .mdl-mini-footer--link-list a {
            font-size: 13px;
        }
    </style>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
        <div class="demo-ribbon"></div>
        <main class="demo-main mdl-layout__content">
            <div class="demo-container mdl-grid">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                    <div class="container panel panel-body">
                        <h3 class="text-center">Editar Usuario</h3>

                        {!!Form::open(['route'=>['Usuarios.update', $user->id], 'method'=>'PUT', 'onsubmit'=>"waitingDialog.show
                        ('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

                        @include('alertas.errores')
                        @include('alertas.flash')
                        <h3 class="text-center">Datos del Usuario</h3>
                        <br><br>
                        <div class="input-group input-group-lg">
                            {{Form::label('Nombres',null,['class'=>'input-group-addon'])}}
                            {{Form::text('nombre',$user->nombre, ['class'=>'form-control', 'placeholder'=>'Nombres'])}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            {{Form::label('Apellidos',null,['class'=>'input-group-addon'])}}
                            {{Form::text('apellido',$user->apellido, ['class'=>'form-control', 'placeholder'=>'Apellidos'])}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
                            {{Form::email('email',$user->email, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            {{Form::label('Teléfono',null,['class'=>'input-group-addon'])}}
                            {{Form::text('userTelefono',$user->telefono, ['class'=>'form-control', 'placeholder'=>'Teléfono de contacto', 'aria-describedby'=>'basic-addon1', 'maxlength'=>'8'])}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            {{Form::label('Género',null,['class'=>'input-group-addon'])}}
                            @if($user->genero==1)
                            <label class="radio-inline">{!! Form::radio('genero','0') !!}Masculino</label>
                            <label class="radio-inline">{!! Form::radio('genero','1', true) !!}Femenino</label>
                                @else
                                <label class="radio-inline">{!! Form::radio('genero','0',true) !!}Masculino</label>
                                <label class="radio-inline">{!! Form::radio('genero','1') !!}Femenino</label>
                                @endif
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon1">Numero de DUI</span>
                            {{Form::text('DUI',$user->DUI,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'Número de DUI sin guiones', 'maxlength'=>'9'])}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento</span>
                            {{Form::date('fechaDeNacimiento', $user->fechaDeNacimiento)}}
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <?php $rolSeleccionados = $user->roles_sistema_usuario;?>

                            @foreach($roles as $rol)
                                <?php
                                $existe = 0;
                                ?>

                                @foreach($rolSeleccionados as $rolSelect)
                                    @if($rolSelect->idRolSistema==$rol->id)
                                        <?php
                                        $existe = 1;
                                        ?>
                                    @endif
                                @endforeach
                                <br>
                                @if($existe==1)
                                    <li>{!!  Form::checkbox('rolUsuario[]', $rol->id,true)!!}</li>
                                @else
                                    <li>{!!  Form::checkbox('rolUsuario[]', $rol->id)!!}</li>
                                @endif

                                {!! Form::label($rol->nombre) !!}
                                <br>
                            @endforeach

                        </div>
                        {!!Form::submit('Guardar Datos', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
    {!! Html::style('js/app.js') !!}
@stop