@extends('layouts.app')
@section('content')
    @include('includes.modals')
    <div class="parallax-container valign-wrapper hide-on-med-and-down" id="inicio">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">

                    <div class="hide-on-med-and-down" id="ingresar">
                        <!--<h1 class="evogria">VIVE LA EXPERIENCIA VALDEZ</h1>-->
                        <a href="#home" id="anchorProductos" class="waves-effect waves-light btn">VER PRODUCTOS</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="parallax">
            <video class="responsive-video fullWidth" autoplay loop muted>
                <source src="video/love-ios.mp4" type="video/mp4">
            </video>
        </div>

        <!-- <div class="parallax">
            <img src="img/banners/productos.png" alt="CREAR CURRICULO">
        </div>-->
    </div>

    <div id="home">
        <br>
        <div class="container">
            <div class="row">
                <div class="col l3 xl3 hide-on-med-and-down">
                    <ul class="collapsible" data-collapsible="expandable">
                        <!--<li>
                            <div class="collapsible-header"><i class="material-icons">school</i>CATEGORIA</div>
                            <div class="collapsible-body">
                                <p>
                                    <input name="group1" type="radio" id="cat1" />
                                    <label for="cat1">Educación Básica</label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="cat2" />
                                    <label for="cat2">Educación Superior</label>
                                </p>
                                <p>
                                    <input class="group1" name="group1" type="radio" id="cat3"  />
                                    <label for="cat3">Profesionales</label>
                                </p>
                            </div>
                        </li>-->
                        <li>
                            <div class="collapsible-header active"><i class="material-icons">devices_other</i>PRODUCTO</div>
                            <div class="collapsible-body">
                                <p>
                                    <input name="group2" type="radio" id="prod1" />
                                    <label for="prod1"><a class="black-text" href="{{url('laptops')}}">Laptops</a></label>
                                </p>
                                <p>
                                    <input name="group2" type="radio" id="prod2" />
                                    <label for="prod2"><a class="black-text" href="{{url('tablets')}}">Tablets</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group2" type="radio" id="prod3"  />
                                    <label for="prod3"><a class="black-text" href="{{url('smartphones')}}">Smartphones</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group2" type="radio" id="prod4"  />
                                    <label for="prod4"><a class="black-text" href="{{url('all-in-one')}}">All in One</a></label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header active"><i class="material-icons">local_offer</i>MARCA</div>
                            <div class="collapsible-body">
                                <p>
                                    <input name="group3" type="radio" id="brand1" />
                                    <label for="brand1"><a class="black-text" href="{{url('/marca/hp')}}">HP</a></label>
                                </p>
                                <p>
                                    <input name="group3" type="radio" id="brand2" />
                                    <label for="brand2"><a class="black-text" href="{{url('/marca/dell')}}">DELL</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand3"  />
                                    <label for="brand3"><a class="black-text" href="{{url('/marca/apple')}}">APPLE</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand4"  />
                                    <label for="brand4"><a class="black-text" href="{{url('/marca/acer')}}">ACER</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand5"  />
                                    <label for="brand5"><a class="black-text" href="{{url('/marca/samsung')}}">SAMSUNG</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand6"  />
                                    <label for="brand6"><a class="black-text" href="{{url('/marca/asus')}}">ASUS</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand7"  />
                                    <label for="brand7"><a class="black-text" href="{{url('/marca/toshiba')}}">TOSHIBA</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand8"  />
                                    <label for="brand8"><a class="black-text" href="{{url('/marca/lenovo')}}">LENOVO</a></label>
                                </p>
                                <p>
                                    <input class="group1" name="group3" type="radio" id="brand9"  />
                                    <label for="brand9"><a class="black-text" href="{{url('/marca/otros')}}">OTROS</a></label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l9 xl9 white hide-on-med-and-down">
                    <h5>
                        LIQUIDACIONES DE HOY
                    </h5>
                    <hr class="divider">
                    <div class="row">
                        <?php $contador = 0 ?>
                        @foreach($sugeridos as $sugerido)
                            <?php $contador++?>
                            @if($contador <3)
                                <div class="col l6 xl6">
                                    <div class="row">
                                        <div class="col s12 m7">
                                            <div class="card card-fix">
                                                <div class="card-image">
                                                    @if(!empty($sugerido->image))
                                                        <img src="{{asset('img/enStock/img' . $sugerido->image)}}"
                                                             alt="Liquidaciones" class="responsive-img image-liquidacion2">
                                                    @endif
                                                    <div class="overlay">
                                                        <div class="text center-align">
                                                            <a href="{{route('reservas.makeReserva', $sugerido->url)}}"
                                                               class="yellow-text">RESERVAR</a>
                                                            <hr class="divider">
                                                            <a id="anchorCentros" href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                                            <hr class="divider">
                                                            <a href="{{ route('productos.detalleProducto', $sugerido->url) }}"
                                                               class="yellow-text">VER DETALLES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="info"></div>
                                                <div class="card-content">
                                                    <h5 class="montserrat-extra-light">{{$sugerido->nombre}}</h5>

                                                    <div class="row">
                                                        <div class="col s6 m6 l6 xl6">
                                                            <p><strong>
                                                                    @if($sugerido->caracteristica1 == 2)
                                                                        1GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 3)
                                                                        2GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 4)
                                                                        3GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 5)
                                                                        4GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 6)
                                                                        8GB RAM
                                                                    @endif
                                                                </strong></p>
                                                            <p><strong>
                                                                    @if($sugerido->caracteristica2 == 2)
                                                                        8GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 3)
                                                                        16GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 4)
                                                                        32GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 5)
                                                                        40GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 6)
                                                                        60GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 7)
                                                                        64GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 8)
                                                                        80GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 9)
                                                                        90GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 10)
                                                                        96GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 11)
                                                                        100GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 12)
                                                                        120GB HDD/SSD
                                                                    @elseif($sugerido->caracteristica2 == 13)
                                                                        128GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 14)
                                                                        160GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 15)
                                                                        180GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 16)
                                                                        250GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 17)
                                                                        256GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 18)
                                                                        300GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 19)
                                                                        320GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 20)
                                                                        500GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 21)
                                                                        512GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 22)
                                                                        750GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 23)
                                                                        1TB HDD
                                                                    @endif
                                                                </strong></p>
                                                            <p><strong>{{$sugerido->caracteristica3}}</strong></p>
                                                            <p><strong>{{$sugerido->caracteristica4}}</strong></p>
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
                                                                    <a href="{{ route('productos.detalleProducto', $sugerido->url) }}">
                                                                        +info
                                                                    </a>
                                                                </strong>
                                                            </p>
                                                            <h6 class="tachado">
                                                                <strong>
                                                                    ${{$sugerido->precioEs}}
                                                                </strong>
                                                            </h6>
                                                            <h5 class="red-text">
                                                                <strong>
                                                                    ${{$sugerido->precioPromoEs}}
                                                                </strong>
                                                            </h5>
                                                            <br><br><br>
                                                            <a class="btn black"
                                                               href="{{route('reservas.makeReserva', $sugerido->url)}}">
                                                                Reservar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col s12 m12 l9 xl9 white hide-on-large-only">
                    <h5>
                        LIQUIDACIONES DE HOY
                    </h5>
                    <hr class="divider">
                    <div class="row">
                        <?php $contador = 0 ?>
                        @foreach($sugeridos as $sugerido)
                            <?php $contador++?>
                            @if($contador <3)
                                <div class="col l4 xl4">
                                    <div class="row">
                                        <div class="col s8 m7">
                                            <div class="card card-fix2">
                                                <div class="card-image">
                                                    @if(!empty($sugerido->image))
                                                        <img src="{{asset('img/enStock/img' . $sugerido->image)}}"
                                                             alt="Liquidaciones" class="responsive-img image-liquidacion2"
                                                             width="210" height="220">
                                                    @endif
                                                    <div class="overlay">
                                                        <div class="text center-align">
                                                            <a href="{{route('reservas.makeReserva', $sugerido->url)}}"
                                                               class="yellow-text">RESERVAR</a>
                                                            <hr class="divider">
                                                            <a id="anchorCentros" href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                                            <hr class="divider">
                                                            <a href="{{ route('productos.detalleProducto', $sugerido->url) }}"
                                                               class="yellow-text">VER DETALLES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="info"></div>
                                                <div class="card-content">
                                                    <h5 class="montserrat-extra-light">{{$sugerido->nombre}}</h5>
                                                    <div class="row">
                                                        <div class="col s6 m6 l6 xl6">
                                                            <p>
                                                                <strong>
                                                                    @if($sugerido->caracteristica1 == 2)
                                                                        1GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 3)
                                                                        2GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 4)
                                                                        3GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 5)
                                                                        4GB RAM
                                                                    @elseif($sugerido->caracteristica1 == 6)
                                                                        8GB RAM
                                                                    @endif
                                                                </strong>
                                                            </p>
                                                            <p>
                                                                <strong>
                                                                    @if($sugerido->caracteristica2 == 2)
                                                                        8GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 3)
                                                                        16GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 4)
                                                                        32GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 5)
                                                                        40GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 6)
                                                                        60GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 7)
                                                                        64GB ROM
                                                                    @elseif($sugerido->caracteristica2 == 8)
                                                                        80GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 9)
                                                                        90GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 10)
                                                                        96GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 11)
                                                                        100GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 12)
                                                                        120GB HDD/SSD
                                                                    @elseif($sugerido->caracteristica2 == 13)
                                                                        128GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 14)
                                                                        160GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 15)
                                                                        180GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 16)
                                                                        250GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 17)
                                                                        256GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 18)
                                                                        300GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 19)
                                                                        320GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 20)
                                                                        500GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 21)
                                                                        512GB SSD
                                                                    @elseif($sugerido->caracteristica2 == 22)
                                                                        750GB HDD
                                                                    @elseif($sugerido->caracteristica2 == 23)
                                                                        1TB HDD
                                                                    @endif
                                                                </strong>
                                                            </p>
                                                            <p><strong>{{$sugerido->caracteristica3}}</strong></p>
                                                            <p><strong>{{$sugerido->caracteristica4}}</strong></p>
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
                                                            <p>
                                                                <strong>
                                                                    <a href="{{ route('productos.detalleProducto', $sugerido->url) }}">
                                                                        +info
                                                                    </a>
                                                                </strong>
                                                            </p>
                                                            <h6 class="tachado">
                                                                <strong>
                                                                    ${{$sugerido->precioEs}}
                                                                </strong>
                                                            </h6>
                                                            <h5 class="red-text">
                                                                <strong>
                                                                    ${{$sugerido->precioPromoEs}}
                                                                </strong>
                                                            </h5>
                                                            <br><br><br>
                                                            <a class="btn modal-trigger black"
                                                               href="{{route('reservas.makeReserva', $sugerido->url)}}">
                                                                Reservar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- start apple -->
        <div class="container">
            <div class="section">
                <!--   Apple Section   -->
                <div class="row">
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <br><br><br>
                            <a href="{{url('/marca/apple')}}"><img class="apple responsive-img center-block"
                                                                   src="img/logos/apple-logo.png" alt="Apple"
                                                                   height="10" width="10"></a>
                        </div>
                    </div>

                    <?php $contador = 0 ?>
                    @foreach($appleSect as $apple)
                        <?php $contador++?>
                        @if($contador <4)

                            <div class="col s12 m12 l3 xl3">
                                <div class="card">
                                    <div class="card-image">
                                        @if(!empty($apple->image))
                                            <img src="{{asset('img/enStock/img' . $apple->image)}}" alt="Apple"
                                                 class="responsive-img image-liquidacion">
                                        @endif
                                        <div class="overlay">
                                            <div class="text center-align">
                                                <a href="{{route('reservas.makeReserva', $apple->url)}}" class="yellow-text">
                                                    RESERVAR
                                                </a>
                                                <hr class="divider">
                                                <a href="#sucursales" class="yellow-text" id="anchorCentros">
                                                    IR A TIENDA
                                                </a>
                                                <hr class="divider">
                                                <a href="{{ route('productos.detalleProducto', $apple->url) }}" class="yellow-text">
                                                    VER DETALLES
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 m6 l6 xl6">
                                        <h6 class="montserrat-extra-light">
                                            {{$apple->nombre}}
                                        </h6>
                                    </div>
                                    <div class="col s6 m6 l6 xl6">
                                        <p class="red-text">
                                            ${{$apple->precioPromoEs}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
            </div>
        </div>
        <!-- end apple -->
        <br><br>

        <div class="container">
            <div class="row">
                <div class="col s6 m6 l6 xl6">
                    <h5>SUGERIDOS PARA TI</h5>
                </div>
                <div class="col s6 m6 l6 xl6">
                    <a class="black-text" href="{{url('/productos')}}">
                        <h5 class="right-align">
                            VER TODO
                            <i class="material-icons">
                                chevron_right
                            </i>
                        </h5>
                    </a>
                </div>
            </div>

            <div class="row">
                <?php $contador = 0 ?>
                @foreach($productoVenta as $sugerencia)
                    <?php $contador++?>
                    @if($contador <5)
                        @if($sugerencia->estado == 1 || $sugerencia->estado == 2)
                        <div class="col s12 m12 l3 xl3">
                            <div class="row">
                                <div class="col s12 m12 l3 xl3">
                                    <div class="card card-fix2">
                                        <div class="card-image">
                                            @if(!empty($sugerencia->image))
                                                <img src="{{asset('img/enStock/img' . $sugerencia->image)}}"
                                                     alt="SUGERIDOS"
                                                     class="responsive-img ajustar-sugeridos">
                                            @endif
                                            <div class="overlay">
                                                <div class="text center-align">
                                                    <a href="{{route('reservas.makeReserva', $sugerencia->url)}}"
                                                       class="yellow-text">RESERVAR</a>
                                                    <hr class="divider">
                                                    <a href="#sucursales" class="yellow-text" id="anchorCentros">IR A TIENDA</a>
                                                    <hr class="divider">
                                                    <a href="{{ route('productos.detalleProducto', $sugerencia->url) }}"
                                                       class="yellow-text">VER DETALLES</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h5 class="montserrat-extra-light">{{$sugerencia->nombre}}</h5>
                                            <div class="row">
                                                <div class="col s6 m6 l6 xl6">
                                                    <p>
                                                        <strong>
                                                            @if($sugerencia->caracteristica1 == 2)
                                                            1GB RAM
                                                                @elseif($sugerencia->caracteristica1 == 3)
                                                                2GB RAM
                                                            @elseif($sugerencia->caracteristica1 == 4)
                                                                3GB RAM
                                                            @elseif($sugerencia->caracteristica1 == 5)
                                                                4GB RAM
                                                            @elseif($sugerencia->caracteristica1 == 6)
                                                                8GB RAM
                                                                @endif
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            @if($sugerencia->caracteristica2 == 2)
                                                                8GB ROM
                                                            @elseif($sugerencia->caracteristica2 == 3)
                                                                16GB ROM
                                                            @elseif($sugerencia->caracteristica2 == 4)
                                                                32GB ROM
                                                            @elseif($sugerencia->caracteristica2 == 5)
                                                                40GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 6)
                                                                60GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 7)
                                                                64GB ROM
                                                            @elseif($sugerencia->caracteristica2 == 8)
                                                                80GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 9)
                                                                90GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 10)
                                                                96GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 11)
                                                                100GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 12)
                                                                120GB HDD/SSD
                                                            @elseif($sugerencia->caracteristica2 == 13)
                                                                128GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 14)
                                                                160GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 15)
                                                                180GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 16)
                                                                250GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 17)
                                                                256GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 18)
                                                                300GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 19)
                                                                320GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 20)
                                                                500GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 21)
                                                                512GB SSD
                                                            @elseif($sugerencia->caracteristica2 == 22)
                                                                750GB HDD
                                                            @elseif($sugerencia->caracteristica2 == 23)
                                                                1TB HDD
                                                            @endif
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            {{$sugerencia->caracteristica3}}
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            {{$sugerencia->caracteristica4}}
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class="col s6 m6 l6 xl6">
                                                    <p>
                                                        <strong>
                                                            <a href="{{ route('productos.detalleProducto', $sugerencia->url) }}">+info</a>
                                                        </strong>
                                                    </p>
                                                    <h6 class="tachado">
                                                        <strong>
                                                            Antes: ${{$sugerencia->precioEs}}
                                                        </strong>
                                                    </h6>
                                                    <h6 class="red-text">
                                                        <strong>
                                                            Precio: ${{$sugerencia->precioPromoEs}}
                                                        </strong>
                                                    </h6>
                                                </div>
                                            </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                    @endif
                @endforeach
            </div>
        </div>

        <!--   Smartphone Section   -->
        <div class="container">
            <div class="row">
                <div class="col l1 xl1"></div>
                <div class="col s12 m12 l2 xl2">
                    <div class="icon-block card-fix3">
                        <a href="{{url('/smartphones')}}">
                            <h3>Smart</h3>
                            <h3>Phones</h3>
                        </a>
                    </div>
                </div>

                <?php $contador = 0 ?>
                @foreach($smartphones as $telefonos)
                    <?php $contador++?>
                    @if($contador <5)

                        <div class="col s12 m12 l2 xl2">
                            <div class="card card-fix3">
                                <div class="card-image">
                                    @if(!empty($telefonos->image))
                                        <img src="{{asset('img/enStock/img' . $telefonos->image)}}" alt="SMARTPHONES"
                                             class="responsive-img ajustar-sugeridos">
                                    @endif
                                    <div class="overlay">
                                        <div class="text center-align">
                                            <a href="{{route('reservas.makeReserva', $telefonos->url)}}" class="yellow-text">
                                                RESERVAR
                                            </a>
                                            <hr class="divider">
                                            <a href="#sucursales" class="yellow-text" id="anchorCentros">
                                                IR A TIENDA
                                            </a>
                                            <hr class="divider">
                                            <a href="{{ route('productos.detalleProducto', $telefonos->url) }}" class="yellow-text">
                                                VER DETALLES
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 m6 l6 xl6">
                                    <h6 class="montserrat-extra-light">
                                        {{$telefonos->nombre}}
                                    </h6>
                                </div>
                                <div class="col s6 m6 l6 xl6">
                                    <p class="red-text">
                                        ${{$telefonos->precioPromoEs}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    @endif
                @endforeach

                <div class="col l1 xl1"></div>
            </div>
        </div>
    </div>

    @include('sections.ubicaciones')
@stop