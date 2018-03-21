@extends('layouts.app')
@section('content')

    @include('includes.modals')
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
                <a href="#!" class="breadcrumb">LAPTOPS</a>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col l3 xl3 hide-on-med-and-down">
                <ul class="collapsible" data-collapsible="expandable">

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
            <div class="col s12 m12 l9 xl9">
                <h5>
                    LAPTOPS
                </h5>
                <hr class="divider">
                <div class="row">

                    @foreach($laptops as $laptop)


                        <div class="col l4 xl4">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="card card-fix2">
                                        <div class="card-image">
                                            @if(!empty($laptop->image))
                                                <img src="{{asset('img/enStock/img' . $laptop->image)}}"
                                                     alt="LAPTOPS" class="image-liquidacion">
                                            @endif
                                            <div class="overlay">
                                                <div class="text center-align">
                                                    <a href="{{route('reservas.makeReserva', $laptop->url)}}" class="yellow-text">RESERVAR</a>
                                                    <hr class="divider">
                                                    <a href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                                    <hr class="divider">
                                                    <a href="{{ route('productos.detalleProducto', $laptop->url) }}"
                                                       class="yellow-text">VER DETALLES</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="info"></div>
                                        <div class="card-content">
                                            <h5 class="montserrat-extra-light">{{$laptop->nombre}}</h5>
                                            <div class="row">
                                                <div class="col s6 m6 l6 xl6">
                                                    <p>
                                                        <strong>
                                                            @if($laptop->caracteristica1 == 2)
                                                                1GB RAM
                                                            @elseif($laptop->caracteristica1 == 3)
                                                                2GB RAM
                                                            @elseif($laptop->caracteristica1 == 4)
                                                                3GB RAM
                                                            @elseif($laptop->caracteristica1 == 5)
                                                                4GB RAM
                                                            @elseif($laptop->caracteristica1 == 6)
                                                                8GB RAM
                                                            @endif
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        <strong>
                                                            @if($laptop->caracteristica2 == 2)
                                                                8GB ROM
                                                            @elseif($laptop->caracteristica2 == 3)
                                                                16GB ROM
                                                            @elseif($laptop->caracteristica2 == 4)
                                                                32GB ROM
                                                            @elseif($laptop->caracteristica2 == 5)
                                                                40GB HDD
                                                            @elseif($laptop->caracteristica2 == 6)
                                                                60GB HDD
                                                            @elseif($laptop->caracteristica2 == 7)
                                                                64GB ROM
                                                            @elseif($laptop->caracteristica2 == 8)
                                                                80GB HDD
                                                            @elseif($laptop->caracteristica2 == 9)
                                                                90GB SSD
                                                            @elseif($laptop->caracteristica2 == 10)
                                                                96GB SSD
                                                            @elseif($laptop->caracteristica2 == 11)
                                                                100GB HDD
                                                            @elseif($laptop->caracteristica2 == 12)
                                                                120GB HDD/SSD
                                                            @elseif($laptop->caracteristica2 == 13)
                                                                128GB SSD
                                                            @elseif($laptop->caracteristica2 == 14)
                                                                160GB HDD
                                                            @elseif($laptop->caracteristica2 == 15)
                                                                180GB SSD
                                                            @elseif($laptop->caracteristica2 == 16)
                                                                250GB HDD
                                                            @elseif($laptop->caracteristica2 == 17)
                                                                256GB SSD
                                                            @elseif($laptop->caracteristica2 == 18)
                                                                300GB SSD
                                                            @elseif($laptop->caracteristica2 == 19)
                                                                320GB HDD
                                                            @elseif($laptop->caracteristica2 == 20)
                                                                500GB HDD
                                                            @elseif($laptop->caracteristica2 == 21)
                                                                512GB SSD
                                                            @elseif($laptop->caracteristica2 == 22)
                                                                750GB HDD
                                                            @elseif($laptop->caracteristica2 == 23)
                                                                1TB HDD
                                                            @endif
                                                        </strong>
                                                    </p>
                                                    <p><strong>{{$laptop->caracteristica3}}</strong></p>
                                                    <p><strong>{{$laptop->caracteristica4}}</strong></p>
                                                    <br>
                                                </div>
                                                <div class="col s6 m6 l6 xl6">
                                                    <p><strong><a href="#">+info</a></strong></p>
                                                    <h6 class="tachado">
                                                        <strong>
                                                            Antes: ${{$laptop->precioEs}}
                                                        </strong>
                                                    </h6>
                                                    <h5 class="red-text">
                                                        <strong>
                                                            Ahora: ${{$laptop->precioPromoEs}}
                                                        </strong>
                                                    </h5>
                                                    <br>
                                                </div>
                                                <div class="col s12 m12 l12 xl12">
                                                    <p>Disponible en:</p>

                                                    <div class="chip yellow">
                                                        Merliot
                                                    </div>
                                                    <div class="chip yellow">
                                                        Escalón
                                                    </div>
                                                </div>
                                                <div class="col s12 m12 l12 xl12">
                                                    <a class="btn black" href="{{route('reservas.makeReserva', $laptop->url)}}">
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
        </div>
    </div>
    @include('sections.ubicaciones')
@stop