@extends('layouts.feedLiqui')
@section('content')
    <div class="parallax-container valign-wrapper" id="consulta">
        <div class="section no-pad-bot">
            <div class="container-fluid">
                <div class="row center">
                   <div class="col s3 m3 l3 xl3">
                       <img class="responsive-img" src="img/banners/productoarrival1.png" alt="NEW ARRIVALS">
                   </div>
                    <div class="col s3 m3 l3 xl3">
                        <img class="responsive-img" src="img/banners/productoarrival2.png" alt="NEW ARRIVALS">
                    </div>
                    <div class="col s3 m3 l3 xl3">
                        <img class="responsive-img" src="img/banners/productoarrival3.png" alt="NEW ARRIVALS">
                    </div>
                    <div class="col s3 m3 l3 xl3">
                        <img class="responsive-img" src="img/banners/productoarrival4.png" alt="NEW ARRIVALS">
                    </div>
                    <br><br><br><br>
                </div>
                <br><br><br><br>
                <h4 class="evogria espaciado2 center">NEW ARRIVALS</h4>
            </div>
        </div>
        <div class="parallax"><img src="img/banners/landingbanner.png" alt="LIQUIDACIONES"></div>
    </div>

    <div class="container">
        <div class="row white">
            <br>
            <h4 class="evogria center-align espaciado2">Liquidaciones de hoy</h4>
            <br>
            @foreach($liquidaciones as $liquidacion)
            <div class="col s12 m12 l3 xl3">
                <div class="row">
                    <div class="col s12 m12 l3 xl3">
                        <div class="card card-fix2">
                            <div class="card-image">
                                @if(!empty($liquidacion->image))
                                    <img src="{{asset('img/enStock/img' . $liquidacion->image)}}"
                                         alt="Liquidaciones" class="responsive-img image-liquidacion2">
                                @endif
                                <div class="overlay">
                                    <div class="text center-align">
                                        <a href="{{route('reservas.makeReserva', $liquidacion->url)}}"
                                           class="yellow-text">RESERVAR</a>
                                        <hr class="divider">
                                        <a id="anchorCentros" href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                        <hr class="divider">
                                        <a href="{{ route('productos.detalleProducto', $liquidacion->url) }}"
                                           class="yellow-text">VER DETALLES</a>
                                    </div>
                                </div>
                            </div>
                            <div id="info"></div>
                            <div class="card-content">
                                <h5 class="montserrat-extra-light">{{$liquidacion->nombre}}</h5>

                                <div class="row">
                                    <div class="col s6 m6 l6 xl6">
                                        <p><strong>
                                                @if($liquidacion->caracteristica1 == 2)
                                                    1GB RAM
                                                @elseif($liquidacion->caracteristica1 == 3)
                                                    2GB RAM
                                                @elseif($liquidacion->caracteristica1 == 4)
                                                    3GB RAM
                                                @elseif($liquidacion->caracteristica1 == 5)
                                                    4GB RAM
                                                @elseif($liquidacion->caracteristica1 == 6)
                                                    8GB RAM
                                                @endif
                                            </strong></p>
                                        <p><strong>
                                                @if($liquidacion->caracteristica2 == 2)
                                                    8GB ROM
                                                @elseif($liquidacion->caracteristica2 == 3)
                                                    16GB ROM
                                                @elseif($liquidacion->caracteristica2 == 4)
                                                    32GB ROM
                                                @elseif($liquidacion->caracteristica2 == 5)
                                                    40GB HDD
                                                @elseif($liquidacion->caracteristica2 == 6)
                                                    60GB HDD
                                                @elseif($liquidacion->caracteristica2 == 7)
                                                    64GB ROM
                                                @elseif($liquidacion->caracteristica2 == 8)
                                                    80GB HDD
                                                @elseif($liquidacion->caracteristica2 == 9)
                                                    90GB SSD
                                                @elseif($liquidacion->caracteristica2 == 10)
                                                    96GB SSD
                                                @elseif($liquidacion->caracteristica2 == 11)
                                                    100GB HDD
                                                @elseif($liquidacion->caracteristica2 == 12)
                                                    120GB HDD/SSD
                                                @elseif($liquidacion->caracteristica2 == 13)
                                                    128GB SSD
                                                @elseif($liquidacion->caracteristica2 == 14)
                                                    160GB HDD
                                                @elseif($liquidacion->caracteristica2 == 15)
                                                    180GB SSD
                                                @elseif($liquidacion->caracteristica2 == 16)
                                                    250GB HDD
                                                @elseif($liquidacion->caracteristica2 == 17)
                                                    256GB SSD
                                                @elseif($liquidacion->caracteristica2 == 18)
                                                    300GB SSD
                                                @elseif($liquidacion->caracteristica2 == 19)
                                                    320GB HDD
                                                @elseif($liquidacion->caracteristica2 == 20)
                                                    500GB HDD
                                                @elseif($liquidacion->caracteristica2 == 21)
                                                    512GB SSD
                                                @elseif($liquidacion->caracteristica2 == 22)
                                                    750GB HDD
                                                @elseif($liquidacion->caracteristica2 == 23)
                                                    1TB HDD
                                                @endif
                                            </strong></p>
                                        <p><strong>{{$liquidacion->caracteristica3}}</strong></p>
                                        <p><strong>{{$liquidacion->caracteristica4}}</strong></p>
                                        <br>
                                        <p>Disponible en:</p>
                                        <br>
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
                                        <p>
                                            <strong>
                                                <a href="{{ route('productos.detalleProducto', $liquidacion->url) }}">
                                                    +info
                                                </a>
                                            </strong>
                                        </p>
                                        <h6 class="tachado">
                                            <strong>
                                                ${{$liquidacion->precioEs}}
                                            </strong>
                                        </h6>
                                        <h5 class="red-text">
                                            <strong>
                                                ${{$liquidacion->precioPromoEs}}
                                            </strong>
                                        </h5>
                                        <br><br><br>
                                        <a class="btn black"
                                           href="{{route('reservas.makeReserva', $liquidacion->url)}}">
                                            Reservar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
    @include('sections.ubicaciones')
@stop