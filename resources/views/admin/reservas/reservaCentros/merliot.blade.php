@extends('layouts.admin')
@section('content')
    @include('alertas.errores')
    @include('alertas.flash')
    <br>
    <div class="container-fluid panel panel-body mdl-card">
        <table class="table table-striped table-responsive-lg" id="registrados">
            <thead>
            <tr>
                <th><h1 class="text-center">Productos</h1></th>
                <th><h1 class="text-center">Nombre del Cliente</h1></th>
                <th><h1 class="text-center">DUI</h1></th>
                <th><h1 class="text-center">Correo</h1></th>
                <th><h1 class="text-center">Teléfono</h1></th>
                <th><h1 class="text-center">Acciones</h1></th>
            </tr>
            </thead>
            <tbody>

            @foreach($reservas as $producto)
                <tr>
                    <td class="text-center">
                        @if(!empty($producto->image))
                            <img src="{{asset('img/enStock/img' . $producto->image)}}" alt="RESERVA MERLIOT"
                                 class="responsive-img image-liquidacion" height="250" width="240">
                        @endif
                    </td>
                    <td class="text-center">
                        <h3>{{$producto->nombreCliente}} {{$producto->apellidoCliente}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>{{$producto->DUICliente}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>{{$producto->emailCliente}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>{{$producto->telefonoCliente}}</h3>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('reserva.show', $producto->id) }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--green-400"><i class="material-icons">visibility</i></a>

                        <a href="{{ route('reserva.destroy', $producto->id) }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--yellow-400"><i class="material-icons">edit</i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@stop