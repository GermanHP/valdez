@extends('layouts.app')
@section('content')
    <nav id="inicio">
        <div class="nav-wrapper nav-color">
            <form method="GET" action="{{ route('user-lists') }}">
                <div class="input-field">
                    <input name="search" type="search" placeholder="BUSCAR" class="center-align" required
                           value="{{ old('search') }}">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
    <br><br>
    <div class="container white">

        <div class="row">
            @if($productos->count())
                <br>
                <h5 class="center-align evogria">RESULTADOS</h5>
        @foreach($productos as $key => $item)
            <div class="col l4 xl4">
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card card-fix2">
                            <div class="card-image">
                                @if(!empty($item->image))
                                    <img src="{{asset('img/enStock/img' . $item->image)}}" alt="MOSTRAR PRODUCTO"
                                         class="image-liquidacion">
                                @endif
                                <div class="overlay">
                                    <div class="text center-align">
                                        <a href="{{ route('reservas.makeReserva', $item->url) }}"
                                           class="yellow-text">RESERVAR</a>
                                        <hr class="divider">
                                        <a href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                        <hr class="divider">
                                        <a href="{{ route('productos.detalleProducto', $item->url) }}"
                                           class="yellow-text">VER DETALLES</a>
                                    </div>
                                </div>
                            </div>
                            <div id="info"></div>
                            <div class="card-content">
                                <h6 class="montserrat-extra-light">{{$item->nombre}}</h6>
                                <div class="row">
                                    <div class="col s6 m6 l6 xl6">
                                        <p>
                                        <h6>
                                            @if($item->caracteristica1 == 2)
                                                1GB RAM
                                            @elseif($item->caracteristica1 == 3)
                                                2GB RAM
                                            @elseif($item->caracteristica1 == 4)
                                                3GB RAM
                                            @elseif($item->caracteristica1 == 5)
                                                4GB RAM
                                            @elseif($item->caracteristica1 == 6)
                                                8GB RAM
                                            @endif
                                        </h6>
                                        </p>
                                        <p>
                                        <h6>
                                            @if($item->caracteristica2 == 2)
                                                8GB ROM
                                            @elseif($item->caracteristica2 == 3)
                                                16GB ROM
                                            @elseif($item->caracteristica2 == 4)
                                                32GB ROM
                                            @elseif($item->caracteristica2 == 5)
                                                40GB HDD
                                            @elseif($item->caracteristica2 == 6)
                                                60GB HDD
                                            @elseif($item->caracteristica2 == 7)
                                                64GB ROM
                                            @elseif($item->caracteristica2 == 8)
                                                80GB HDD
                                            @elseif($item->caracteristica2 == 9)
                                                90GB SSD
                                            @elseif($item->caracteristica2 == 10)
                                                96GB SSD
                                            @elseif($item->caracteristica2 == 11)
                                                100GB HDD
                                            @elseif($item->caracteristica2 == 12)
                                                120GB HDD/SSD
                                            @elseif($item->caracteristica2 == 13)
                                                128GB SSD
                                            @elseif($item->caracteristica2 == 14)
                                                160GB HDD
                                            @elseif($item->caracteristica2 == 15)
                                                180GB SSD
                                            @elseif($item->caracteristica2 == 16)
                                                250GB HDD
                                            @elseif($item->caracteristica2 == 17)
                                                256GB SSD
                                            @elseif($item->caracteristica2 == 18)
                                                300GB SSD
                                            @elseif($item->caracteristica2 == 19)
                                                320GB HDD
                                            @elseif($item->caracteristica2 == 20)
                                                500GB HDD
                                            @elseif($item->caracteristica2 == 21)
                                                512GB SSD
                                            @elseif($item->caracteristica2 == 22)
                                                750GB HDD
                                            @elseif($item->caracteristica2 == 23)
                                                1TB HDD
                                            @endif
                                        </h6>
                                        </p>
                                        <p><h6>{{$item->caracteristica3}}</h6></p>
                                        <h6>{{$item->caracteristica4}}</h6>
                                        <br>
                                        <p>Disponible en:</p>
                                        <div class="row">
                                            <div class="col s6 m6 l6 xl6">
                                                <div class="chip yellow">
                                                    Merliot
                                                </div>
                                            </div>
                                            <div class="col s6 m6 l6 xl6">
                                                <div class="chip yellow">
                                                    Escalón
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s6 m6 l6 xl6">
                                        <p><strong><a href="{{ route('productos.detalleProducto', $item->url) }}">+info</a></strong></p>
                                    <!--<h6 class="tachado">
                                                <strong>
                                                    Antes: ${{$item->precioEs}}
                                            </strong>
                                        </h6>-->
                                        <h5 class="red-text">
                                            <strong>
                                                Desde: ${{$item->precioPromoEs}}
                                            </strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
                @else
            <h5 class="evogria text-center">
                No se encontraron resultados
            </h5>
                @endif

        </div>
        <a class="btn black"
           href="{{url('/')}}">
            Regresar
        </a>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="{{url('user-lists?page=1')}}">1</a></li>
            <li class="waves-effect"><a href="{{url('user-lists?page=2')}}">2</a></li>
            <li class="waves-effect"><a href="{{url('user-lists?page=3')}}">3</a></li>
            <li class="waves-effect"><a href="{{url('user-lists?page=4')}}">4</a></li>
            <!--
            <li class="waves-effect"><a href="#!">5</a></li>
            -->
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
@stop