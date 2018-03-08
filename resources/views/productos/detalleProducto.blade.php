@extends('layouts.app')
<?php $titleProducto = htmlspecialchars($productos->title); ?>
@section('title', "| $titleProducto")
@section('content')
    <nav>
        <div class="nav-wrapper nav-color">
            <form>
                <div class="input-field">
                    <input id="search" type="search" placeholder="BUSCAR" class="center-align" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>

    <nav class="nav-color">
        <div class="container">
            <div class="col s12">
                <a href="{{url('/')}}" class="breadcrumb">Inicio</a>
                <a href="{{url('/productos')}}" class="breadcrumb">Productos</a>
                <a href="#!" class="breadcrumb">{{$productos->nombre}}</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s6 m6 l6 xl6">
                <br><br>
                @if(!empty($productos->image))
                <img class="responsive-img" src="{{asset('img/enStock/img' . $productos->image)}}"
                     alt="{{$productos->nombre}}">
                @endif
            </div>
            <div class="col s6 m6 l6 xl6">
                <h5>{{$productos->nombre}}</h5>
                <h5 class="blue-text">Stock: {{$productos->stock}}</h5>
                <div class="row">
                    <div class="col s6 m6 l6 xl6">
                        <p>{{$productos->caracteristica1}}</p>
                        <p>{{$productos->caracteristica2}}</p>

                        <p>{{$productos->caracteristica3}}</p>
                        <p>{{$productos->caracteristica4}}</p>
                    </div>
                </div>
                <h5>Optimizar</h5>
                <div class="input-field col s12 m12 l4 xl4">
                    <select>
                        <option value="" disabled selected>Elige Capacidad</option>
                        <option value="1">4GB</option>
                        <option value="2">8GB</option>
                        <option value="3">16GB</option>
                    </select>
                    <label>RAM</label>
                </div>
                <div class="input-field col s12 m12 l4 xl4">
                    <select>
                        <option value="" disabled selected>Elige Capacidad</option>
                        <option value="1">250GB</option>
                        <option value="2">500GB</option>
                        <option value="3">1TB</option>
                    </select>
                    <label>DISCO DURO</label>
                </div>
                <div class="col s6 m6 l6 xl6">
                    <h6 class="red-text">Precio: ${{$productos->precioPromoEs}}</h6>
                </div>
                <div class="col s6 m6 l6 xl6">
                    <h6 class="red-text">Precio Final: ${{$productos->precioPromoEs}}</h6>
                </div>
                <div class="col s12 m12 l12 xl12">
                    <h6>Disponible en:</h6>
                    <div class="row">
                        <div class="chip yellow">
                            Merliot
                        </div>
                        <div class="chip yellow">
                            Escalón
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l12 xl12">
                    <a class="btn btn-large nav-color" href="{{route('reservas.makeReserva', $productos->url)}}">
                        RESERVAR
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
@stop