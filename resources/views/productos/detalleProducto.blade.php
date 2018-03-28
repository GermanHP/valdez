@extends('layouts.contenido')
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
            <div class="col s12 m6 l6 xl6">
                <h5>{{$productos->nombre}}</h5>
                <h5 class="blue-text">Stock: {{$productos->stock}}</h5>
                <div class="row">
                    <div class="col s6 m6 l6 xl6">
                        <br><br>
                        <p class="detalle-texto">
                            @if($productos->caracteristica1 == 2)
                                1GB RAM
                            @elseif($productos->caracteristica1 == 3)
                                2GB RAM
                            @elseif($productos->caracteristica1 == 4)
                                3GB RAM
                            @elseif($productos->caracteristica1 == 5)
                                4GB RAM
                            @elseif($productos->caracteristica1 == 6)
                                8GB RAM
                            @endif
                        </p>
                        <p class="detalle-texto">
                            @if($productos->caracteristica2 == 2)
                                Almacenamiento 8GB ROM
                            @elseif($productos->caracteristica2 == 3)
                                Almacenamiento 16GB ROM
                            @elseif($productos->caracteristica2 == 4)
                                Almacenamiento 32GB ROM
                            @elseif($productos->caracteristica2 == 5)
                                Almacenamiento 40GB HDD
                            @elseif($productos->caracteristica2 == 6)
                                Almacenamiento 60GB HDD
                            @elseif($productos->caracteristica2 == 7)
                                Almacenamiento 64GB ROM
                            @elseif($productos->caracteristica2 == 8)
                                Almacenamiento 80GB HDD
                            @elseif($productos->caracteristica2 == 9)
                                Almacenamiento 90GB SSD
                            @elseif($productos->caracteristica2 == 10)
                                Almacenamiento 96GB SSD
                            @elseif($productos->caracteristica2 == 11)
                                Almacenamiento 100GB HDD
                            @elseif($productos->caracteristica2 == 12)
                                Almacenamiento 120GB HDD/SSD
                            @elseif($productos->caracteristica2 == 13)
                                Almacenamiento 128GB SSD
                            @elseif($productos->caracteristica2 == 14)
                                Almacenamiento 160GB HDD
                            @elseif($productos->caracteristica2 == 15)
                                Almacenamiento 180GB SSD
                            @elseif($productos->caracteristica2 == 16)
                                Almacenamiento 250GB HDD
                            @elseif($productos->caracteristica2 == 17)
                                Almacenamiento 256GB SSD
                            @elseif($productos->caracteristica2 == 18)
                                Almacenamiento 300GB SSD
                            @elseif($productos->caracteristica2 == 19)
                                Almacenamiento 320GB HDD
                            @elseif($productos->caracteristica2 == 20)
                                Almacenamiento 500GB HDD
                            @elseif($productos->caracteristica2 == 21)
                                Almacenamiento 512GB SSD
                            @elseif($productos->caracteristica2 == 22)
                                Almacenamiento 750GB HDD
                            @elseif($productos->caracteristica2 == 23)
                                Almacenamiento 1TB HDD
                            @endif
                        </p>

                        <p class="detalle-texto">Procesador {{$productos->caracteristica3}}</p>
                        <p class="detalle-texto">{{$productos->caracteristica4}}</p>
                    </div>
                </div>
                <div class="col s6 m6 l6 xl6">
                    <h6 class="red-text">Precio: ${{$productos->precioPromoEs}}</h6>
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
                    <a href="{{url('/productos')}}" class="btn black btn-large">REGRESAR</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('productos.sugeridos')

    @include('sections.ubicaciones')
@stop