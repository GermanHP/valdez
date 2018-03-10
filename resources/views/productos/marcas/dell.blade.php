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
                <a href="#!" class="breadcrumb">DELL</a>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col l3 xl3 hide-on-med-and-down">
                <ul class="collapsible" data-collapsible="expandable">

                    <li>
                        <div class="collapsible-header active"><i class="material-icons">local_offer</i>MARCA</div>
                        <div class="collapsible-body">

                            <p>
                                <input class="group1" name="group3" type="radio" id="brand3"  />
                                <label for="brand3">APPLE</label>
                            </p>

                            <p>
                                <input class="group1" name="group3" type="radio" id="brand5"  />
                                <label for="brand5">SAMSUNG</label>
                            </p>
                            <p>
                                <input class="group1" name="group3" type="radio" id="brand6"  />
                                <label for="brand6">ASUS</label>
                            </p>

                            <p>
                                <input class="group1" name="group3" type="radio" id="brand9"  />
                                <label for="brand9">OTROS</label>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col s12 m12 l9 xl9">
                <h5>
                    DELL
                </h5>
                <hr class="divider">
                <div class="row">
                    @foreach($dell as $item)
                        <div class="col l4 xl4">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="card card-fix2">
                                        <div class="card-image">
                                            @if(!empty($item->image))
                                                <img src="{{asset('img/enStock/img' . $item->image)}}"
                                                     alt="Liquidaciones" class="image-liquidacion">
                                            @endif
                                            <div class="overlay">
                                                <div class="text center-align">
                                                    <a href="{{url('/reserva')}}" class="yellow-text">RESERVAR</a>
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
                                            <h5 class="montserrat-extra-light">{{$item->nombre}}</h5>
                                            <div class="row">
                                                <div class="col s6 m6 l6 xl6">
                                                    <p><strong>{{$item->caracteristica1}}</strong></p>
                                                    <p><strong>{{$item->caracteristica2}}</strong></p>
                                                    <p><strong>{{$item->caracteristica3}}</strong></p>
                                                    <p><strong>{{$item->caracteristica4}}</strong></p>
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
                                                    <p><strong><a href="#">+info</a></strong></p>
                                                    <h6 class="tachado">
                                                        <strong>
                                                            Antes: ${{$item->precioEs}}
                                                        </strong>
                                                    </h6>
                                                    <h5 class="red-text">
                                                        <strong>
                                                            Ahora: ${{$item->precioPromoEs}}
                                                        </strong>
                                                    </h5>
                                                    <br><br><br>
                                                    <a class="btn modal-trigger black" href="{{url('/reserva')}}">
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