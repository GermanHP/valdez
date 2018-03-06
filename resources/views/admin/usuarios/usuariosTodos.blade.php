@extends('layouts.admin')
@section('content')
    @include('alertas.errores')
    @include('alertas.flash')
    <!--sección donde se ubicarán mostrarán los comentarios recibidos por los usuarios -->
    <br>
    <div class="container panel panel-body mdl-card">
        <table class="table table-striped" id="inbox">
            <thead>
            <tr>
                <th><h3 class="text-center"><strong>Nombre</strong></h3></th>
                <th><h3 class="text-center"><strong>Apellido</strong></h3></th>
                <th><h3 class="text-center"><strong>DUI</strong></h3></th>
                <th><h3 class="text-center"><strong>Email</strong></h3></th>
                <th><h3 class="text-center"><strong>Teléfono</strong></h3></th>
                <th><h3 class="text-center"><strong>Acciones</strong></h3></th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                    <td>
                        <h4 class="text-center">{{$usuario->nombre}}</h4>
                    </td>
                    <td>
                        <h4 class="text-center">{{$usuario->apellido}}</h4>
                    </td>
                    <td>
                        <h4 class="text-center">{{$usuario->DUI}}</h4>
                    </td>
                    <td>
                        <h4 class="text-center">{{$usuario->email}}</h4>
                    </td>
                    <td>
                        <h4 class="text-center">{{$usuario->telefono}}</h4>
                    </td>
                    <td class="text-center">
                        @if($usuario->deleted_at==NULL)
                            {!!link_to_route('Usuarios.Editar', $title = 'Editar Usuario ', $parameters = $usuario->id,
                            $attributes = ['class'=>'btn btn-success','onclick'=>"waitingDialog.show('Cargando... ',
                            { progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
                            <br>
                            {!!Form::open(['route'=>['Usuarios.update',$usuario->id], 'method'=>'DELETE', 'onsubmit'=>
                            "waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function ()
                            {waitingDialog.hide();}, 3000);"])!!}

                            {!!Form::submit('Desactivar Usuario', ['class'=>'btn btn-danger','name'=>'btnCrearUsuario'])!!}

                            {!! Form::close() !!}

                        @else
                            {!!Form::open(['route'=>['Usuarios.update',$usuario->id], 'method'=>'DELETE', 'onsubmit'=>
                            "waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function ()
                            {waitingDialog.hide();}, 3000);"])!!}

                            {!!Form::submit('Activar Usuario', ['class'=>'btn btn-warning','name'=>'btnCrearUsuario'])!!}
                            {!! Form::close() !!}
                        @endif
                    </td>
            </tr>
                <!-- pendiente las acciones de crud y bloqueo -->
            @endforeach
            {{$usuarios2->links()}}
            </tbody>
        </table>
    </div>
    <div class="container">
        <!-- Colored FAB button with ripple -->
        <a href="{{ route('Usuarios.nuevo') }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--green-400">
            <i class="material-icons">add</i>
        </a>
    </div>
@stop