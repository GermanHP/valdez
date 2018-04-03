@extends('layouts.app')
@section('content')
    @include('includes.modals')
    <div class="parallax-container valign-wrapper hide-on-med-and-down" id="inicio">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <form method="GET" action="{{ route('user-lists') }}">
                        <div class="input-field container" id="busqueda">
                            <input name="search" class="center" id="search2" type="search"
                                   placeholder="BUSCAR" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'BUSCAR'">
                            <i class="material-icons">search</i>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="parallax" id="bannerhome">
            <img src="img/banners/bannerhome.png" alt="CREAR CURRICULO">
        </div>
    </div>

    <style>
        div#quienes-img, img#quienes-img {
            width: 100%;
            height: 100%;
            display: block;
            position: relative;

        }

        div#quienes-img form#quienes-p {
            display: block;
            position: absolute;
            text-align: right;
            bottom: 25%;
            margin-left: 10%;
            padding: 5px;
            width: 75%;
            font-size: 10px;
        }
    </style>

    <div class="hide-on-large-only" id="quienes-img">
        <img class="" src="img/banners/bannerhome.png" alt="VIVE LA EXPERIENCIA" id="quienes-img">
        <br>
        <form method="GET" action="{{ route('user-lists') }}" id="quienes-p">
            <div class="input-field container" id="busqueda">
                <input name="search" class="center" id="search2" type="search"
                       placeholder="BUSCAR" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'BUSCAR'">
                <i class="material-icons">search</i>
            </div>
        </form>
    </div>

    <div id="home">
        <br>
        <div class="container">
            <div class="row">
                <div class="col l3 xl3 hide-on-med-and-down" id="opciones">
                    <ul class="collapsible" data-collapsible="expandable" id="inicio-blanco">

                        <li>
                            <div class="collapsible-header active">PRODUCTO</div>
                            <div class="collapsible-body">
                                <p>

                                    <label for="prod1"><a class="black-text" href="{{url('laptops')}}">Laptops</a></label>
                                </p>
                                <p>

                                    <label for="prod2"><a class="black-text" href="{{url('tablets')}}">Tablets</a></label>
                                </p>
                                <p>

                                    <label for="prod3"><a class="black-text" href="{{url('smartphones')}}">Smartphones</a></label>
                                </p>
                                <p>

                                    <label for="prod4"><a class="black-text" href="{{url('all-in-one')}}">All in One</a></label>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header active">MARCA</div>
                            <div class="collapsible-body">
                                <p>
                                    <label for="brand1"><a class="black-text" href="{{url('/marca/hp')}}">HP</a></label>
                                </p>
                                <p>

                                    <label for="brand2"><a class="black-text" href="{{url('/marca/dell')}}">DELL</a></label>
                                </p>
                                <p>

                                    <label for="brand3"><a class="black-text" href="{{url('/marca/apple')}}">APPLE</a></label>
                                </p>
                                <p>

                                    <label for="brand4"><a class="black-text" href="{{url('/marca/acer')}}">ACER</a></label>
                                </p>
                                <p>

                                    <label for="brand5"><a class="black-text" href="{{url('/marca/samsung')}}">SAMSUNG</a></label>
                                </p>
                                <p>

                                    <label for="brand6"><a class="black-text" href="{{url('/marca/asus')}}">ASUS</a></label>
                                </p>
                                <p>

                                    <label for="brand7"><a class="black-text" href="{{url('/marca/toshiba')}}">TOSHIBA</a></label>
                                </p>
                                <p>

                                    <label for="brand8"><a class="black-text" href="{{url('/marca/lenovo')}}">LENOVO</a></label>
                                </p>
                                <p>

                                    <label for="brand9"><a class="black-text" href="{{url('/marca/otros')}}">OTROS</a></label>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m12 l9 xl9 white hide-on-med-and-down">

                    <a href="{{url('/liquidaciones')}}" class="black-text letter-spacing"><h6 id="liquidaciones-home">LIQUIDACIONES</h6></a>
                    <br>
                    <div class="divider-teal" id="divider-home"></div>
                    <div class="row">
                        <?php $contador = 0 ?>
                        @foreach($sugeridos as $sugerido)
                            <?php $contador++?>
                            @if($contador <3)
                                <div class="col m4 l6 xl6">
                                    <div class="row">
                                        <div class="col s12 m6">
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
                                                    <h6 class="montserrat-extra-light">{{$sugerido->nombre}}</h6>

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
                                                                        Escal&oacute;n
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
                                                        <!--<p>
                                                                <strong class="light-blue-text">
                                                                    {{$sugerido->stock}} en Stock
                                                                </strong>
                                                            </p>-->
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
                                                            <br><br><br><br>
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
                <br><br>
                <div class="col s12 m12 l9 xl9 white hide-on-large-only">
                    <h5>
                        LIQUIDACIONES
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
                                                    <h6 class="montserrat-extra-light">{{$sugerido->nombre}}</h6>
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
                                                                        Escal&oacute;n
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
        <div class="container" id="inicio-blanco">
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
                                        <div class="overlay2">
                                            <div class="text center-align">
                                                <a href="{{route('reservas.makeReserva', $apple->url)}}" class="black-text">
                                                    RESERVAR
                                                </a>
                                                <hr class="divider">
                                                <a href="#sucursales" class="black-text" id="anchorCentros">
                                                    IR A TIENDA
                                                </a>
                                                <hr class="divider">
                                                <a href="{{ route('productos.detalleProducto', $apple->url) }}" class="black-text">
                                                    VER DETALLES
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <div class="col s12 m12 l12 xl12">
                                        <h6 class="montserrat-extra-light">
                                            {{$apple->nombre}}
                                        </h6> &nbsp;&nbsp;
                                        <p class="red-text subir-precio">
                                            Precio ${{$apple->precioPromoEs}}
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
        @section('contenido')
            <div id="inicio-blanco">
                <div class="container">
                    <div class="row">
                        <br>
                        <div class="col s6 m6 l6 xl6">
                            <h6>SUGERIDOS PARA TI</h6>
                        </div>
                        <div class="col s6 m6 l6 xl6">
                            <a class="black-text" href="{{url('/productos')}}">
                                <h6 class="right-align">
                                    <span>4 de {{$sugeridos->count()}} &nbsp;&nbsp;&nbsp;</span> <strong class="negrita">VER TODO</strong> &blacktriangleright;
                                </h6>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <?php $contador = 0 ?>
                        @foreach($sugeridos as $sugerencia)
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
                                                        <h6 class="montserrat-extra-light">{{$sugerencia->nombre}}</h6>
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
                                                            <!--<p class="right-align">
                                                        <strong class="light-blue-text">
                                                            {{$sugerido->stock}} en Stock
                                                        </strong>
                                                    </p>-->
                                                                <p class="right-align">
                                                                    <strong>
                                                                        <a href="{{ route('productos.detalleProducto', $sugerencia->url) }}">+info</a>
                                                                    </strong>
                                                                </p>
                                                            <!--<h6 class="tachado">
                                                        <strong>
                                                            Antes: ${{$sugerencia->precioEs}}
                                                                    </strong>
                                                                </h6>-->
                                                                <h6 class="red-text right-align">
                                                                    <strong>
                                                                        Desde: ${{$sugerencia->precioPromoEs}}
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
                                                                Escal&oacute;n
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="divider subir-divider">
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
                <div class="hide-on-med-and-down">
                    <div class="container" id="smart-sect">
                        <br>
                        <div class="row center-align">
                            <div class="col l1 xl1"></div>
                            <div class="col s12 m12 l2 xl2">
                                <div class="icon-block card-fix3">
                                    <a class="center-align" href="{{url('/smartphones')}}">
                                        <br><br><br>
                                        <h5 class="purple-text-2"><strong>SMART</strong></h5>
                                        <h5 class="espacio-letra purple-text-2"><strong>PHONES</strong></h5>
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
                                                <div class="overlay2">
                                                    <div class="text center-align">
                                                        <a href="{{route('reservas.makeReserva', $telefonos->url)}}" class="black-text">
                                                            RESERVAR
                                                        </a>
                                                        <hr class="divider">
                                                        <a href="#sucursales" class="black-text" id="anchorCentros">
                                                            IR A TIENDA
                                                        </a>
                                                        <hr class="divider">
                                                        <a href="{{ route('productos.detalleProducto', $telefonos->url) }}" class="black-text">
                                                            VER DETALLES
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row center-align">
                                            <div class="col s12 m12 l12 xl12">
                                                <h6 class="montserrat-extra-light">
                                                    {{$telefonos->nombre}}
                                                </h6>

                                            </div>
                                            <div class="col s12 m12 l12 xl12">

                                                <p class="red-text subir-precio">
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

                <!-- hide on large -->
                <!--   Smartphone Section   -->
                <div class="hide-on-large-only">
                    <div class="container" id="smart-sect">
                        <br>
                        <div class="row">
                            <div class="col l1 xl1"></div>
                            <div class="col s12 m12 l2 xl2">
                                <div class="icon-block card-fix3 card-fix4">
                                    <a class="center-align" href="{{url('/smartphones')}}">
                                        <br><br><br>
                                        <h5 class="purple-text-2"><strong>SMART</strong></h5>
                                        <h5 class="espacio-letra purple-text-2"><strong>PHONES</strong></h5>
                                    </a>
                                </div>
                            </div>

                            <?php $contador = 0 ?>
                            @foreach($smartphones as $telefonos)
                                <?php $contador++?>
                                @if($contador <5)

                                    <div class="col s12 m12 l2 xl2">
                                        <div class="card card-fix3">
                                            <div class="card-image2">
                                                @if(!empty($telefonos->image))
                                                    <img src="{{asset('img/enStock/img' . $telefonos->image)}}" alt="SMARTPHONES"
                                                         class="responsive-img ajustar-sugeridos">
                                                @endif
                                                <div class="overlay2">
                                                    <div class="text center-align">
                                                        <a href="{{route('reservas.makeReserva', $telefonos->url)}}" class="black-text">
                                                            RESERVAR
                                                        </a>
                                                        <hr class="divider">
                                                        <a href="#sucursales" class="black-text" id="anchorCentros">
                                                            IR A TIENDA
                                                        </a>
                                                        <hr class="divider">
                                                        <a href="{{ route('productos.detalleProducto', $telefonos->url) }}" class="black-text">
                                                            VER DETALLES
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row center-align">
                                            <div class="col s12 m12 l12 xl12">
                                                <h6 class="montserrat-extra-light">
                                                    {{$telefonos->nombre}}
                                                </h6>

                                            </div>
                                            <div class="col s12 m12 l12 xl12">

                                                <p class="red-text subir-precio">
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
                <br>
            </div>
    </div>

    @include('productos.sugeridos-home')
    @include('sections.ubicaciones')
@stop
@stop