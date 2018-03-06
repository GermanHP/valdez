@extends('layouts.admin')
@section('content')
    <br><br><br><br>

    @if(Session::has('message'))
        <p class="alert alert-success">{{Session::get('message')}}</p>
    @endif

    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 lg-6">
                <img src="{{asset('img/enStock/img' . $productos->image)}}" alt="Apple"
                     class="responsive-img" width="450" height="460">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Modelo:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->nombre}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Fabricante:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->fabricante}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Precio Antes:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>${{$productos->precioEs}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Precio de Promo:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>${{$productos->precioPromoEs}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Stock:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->stock}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Característica 1:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->caracteristica1}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Característica 2:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->caracteristica2}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Característica 3:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->caracteristica3}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2><strong>Característica 4:</strong></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>{{$productos->caracteristica4}}</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="{{ route('producto.edit', $productos->id) }}"><button class="btn btn-primary btn-block">Editar</button></a>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::open(['route' => ['producto.destroy', $productos->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-md-4">
                    <a href="{{route('producto.index')}}"><button class="btn btn-default btn-block">Atrás</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop