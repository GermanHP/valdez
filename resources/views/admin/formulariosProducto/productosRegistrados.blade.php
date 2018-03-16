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
                <th><h1 class="text-center">Fabricante</h1></th>
                <th><h1 class="text-center">Nombre</h1></th>
                <th><h1 class="text-center">Precio</h1></th>
                <th><h1 class="text-center">Precio de Promoción</h1></th>
                <th><h1 class="text-center">Acciones</h1></th>
                <th><h1 class="text-center">Estado</h1></th>
            </tr>
            </thead>
            <tbody>

            @foreach($productos as $producto)
            <tr>
                <td class="text-center">
                    @if(!empty($producto->image))
                        <img src="{{asset('img/enStock/img' . $producto->image)}}" alt="Apple"
                             class="responsive-img image-liquidacion" height="250" width="240">
                    @endif
                </td>
                <td class="text-center">
                    <h3>{{$producto->fabricante}}</h3>
                </td>
                <td class="text-center">
                    <h3>{{$producto->nombre}}</h3>
                </td>
                <td class="text-center">
                    <h3>${{$producto->precioEs}}</h3>
                </td>
                <td class="text-center">
                    <h3>${{$producto->precioPromoEs}}</h3>
                </td>
                <td class="text-center">
                    <a href="{{ route('producto.show', $producto->id) }}"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--green-400">
                        <i class="material-icons">visibility</i>
                    </a>

                    <a href="{{ route('producto.edit', $producto->id) }}"
                       class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--yellow-400">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
                <td class="text-center">
                    @if($producto->estado == 1)
                    <a href="{{ route('producto.liquidacion', $producto->id) }}"
                       class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--teal"
                       title="Cambiar a Liquidación">Venta</a>
                    @else( $producto->estado == 2)
                    <a href="{{ route('producto.venta', $producto->id) }}"
                       class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--cyan-400"
                       title="Cambiar a Venta">Liquidación</a>
                    @endif
                </td>
            </tr>
                @endforeach
            @if ($productos->hasPages())
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($productos->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">@lang('pagination.previous')</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $productos->previousPageUrl() }}"
                                                 rel="prev">@lang('pagination.previous')</a></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($productos->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $productos->nextPageUrl() }}"
                                                 rel="next">@lang('pagination.next')</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">@lang('pagination.next')</span></li>
                    @endif
                </ul>
            @endif
            </tbody>
        </table>
    </div>
@stop