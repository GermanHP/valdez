@extends('layouts.admin')
@section('content')
    <br>

        <div class="align-items-center">{{$reservas->links()}}</div>
        <h1 class="text-center">Reservas</h1>
        <table class="table table-striped" id="inbox">
            <thead>
            <tr class="text-center">
                <th>Cliente</th>
                <th>DUI</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>
                        <ul class="demo-list-three mdl-list">
                            <li class="mdl-list__item mdl-list__item--three-line"><span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar">person</i>
                                  <span>{{$reserva->nombreCliente}} {{$reserva->apellidoCliente}}</span>
                                  <span class="mdl-list__item-text-body">
                                    {{substr(strip_tags($reserva->mensajeOpcional), 0, 75)}} {{strlen(strip_tags($reserva->mensajeOpcional)) > 75 ? '...' : ""}}
                                  </span>
                                </span>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <h5>{{$reserva->DUICliente}}</h5>
                    </td>
                    <td>
                        <h5>{{$reserva->emailCliente}}</h5>
                    </td>
                    <td>
                        <h5>{{$reserva->telefonoCliente}}</h5>
                    </td>
                    <td class="text-center">
                        @if(!empty($reserva->image))
                            <img src="{{asset('img/enStock/img' . $reserva->image)}}" alt="Apple"
                                 class="responsive-img image-liquidacion" width="150" height="150">
                        @endif
                        <h5>{{$reserva->nombreProducto}}</h5>
                    </td>
                    <td class="text-center">
                        <h5>${{$reserva->precio}}</h5>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('reserva.show', $reserva->id) }}" class="mdl-button
                        mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--green-400">
                            <i class="material-icons">visibility</i>
                        </a>
                    </td>
                    <td>
                        {!! Form::open(['route' => ['reserva.destroy', $reserva->id], 'method' => 'DELETE']) !!}

                        <button class="mdl-button
                        mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--red-400">
                            <i class="material-icons">delete</i>
                        </button>

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@stop