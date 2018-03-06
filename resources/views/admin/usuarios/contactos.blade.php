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
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>
                    <h4 class="text-center">{{$usuario->nombreCliente}}</h4>
                </td>
                <td>
                    <h4 class="text-center">{{$usuario->apellidoCliente}}</h4>
                </td>
                <td>
                    <h4 class="text-center">{{$usuario->DUICliente}}</h4>
                </td>
                    <td>
                        <h4 class="text-center">{{$usuario->emailCliente}}</h4>
                    </td>
                    <td>
                        <h4 class="text-center">{{$usuario->telefonoCliente}}</h4>
                    </td>
            </tr>
            @endforeach
            {{$usuarios2->links()}}
            </tbody>

        </table>
    </div>

@stop