@extends('layouts.app')
@section('content')
    @include('includes.modals')
    <nav id="inicio">
        <div class="nav-wrapper nav-color">
            <form>
                <div class="input-field">
                    <input id="search" type="search" placeholder="BUSCAR" class="center-align" required
                           value="{{ old('search') }}">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
    <br><br>

<div class="container">
    <div class="row">
        <div class="col l3 xl3 hide-on-med-and-down">
            <ul class="collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header active"><i class="material-icons">school</i>CATEGORIA</div>
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
                </li>
                <li>
                    <div class="collapsible-header active"><i class="material-icons">devices_other</i>PRODUCTO</div>
                    <div class="collapsible-body">
                        <p>
                            <input name="group2" type="radio" id="prod1" />
                            <label for="prod1">Laptop</label>
                        </p>
                        <p>
                            <input name="group2" type="radio" id="prod2" />
                            <label for="prod2">Tablet</label>
                        </p>
                        <p>
                            <input class="group1" name="group2" type="radio" id="prod3"  />
                            <label for="prod3">Smartphone</label>
                        </p>
                        <p>
                            <input class="group1" name="group2" type="radio" id="prod4"  />
                            <label for="prod4">All in One</label>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header active"><i class="material-icons">local_offer</i>MARCA</div>
                    <div class="collapsible-body">
                        <p>
                            <input name="group3" type="radio" id="brand1" />
                            <label for="brand1">HP</label>
                        </p>
                        <p>
                            <input name="group3" type="radio" id="brand2" />
                            <label for="brand2">DELL</label>
                        </p>
                        <p>
                            <input class="group1" name="group3" type="radio" id="brand3"  />
                            <label for="brand3">APPLE</label>
                        </p>
                        <p>
                            <input class="group1" name="group3" type="radio" id="brand4"  />
                            <label for="brand4">ACER</label>
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
                            <input class="group1" name="group3" type="radio" id="brand7"  />
                            <label for="brand7">TOSHIBA</label>
                        </p>
                        <p>
                            <input class="group1" name="group3" type="radio" id="brand8"  />
                            <label for="brand8">LENOVO</label>
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
            <div class="row">
                <div class="col s6 m6 l6 xl6">
                    <h5>Productos</h5>
                </div>
                <div class="col s6 m6 l6 xl6">
                    <a class="black-text" href="{{url('/productos')}}">
                        <h5 class="right-align">
                            VER TODO
                            <i class="material-icons">chevron_right</i>
                        </h5>
                    </a>
                </div>
            </div>
            <hr class="divider">
            <div class="row">

                @foreach($productos as $producto)
                <div class="col l4 xl4">
                    <div class="row">
                        <div class="col s12 m7">
                            <div class="card card-fix2">
                                <div class="card-image">
                                    @if(!empty($producto->image))
                                    <img src="{{asset('img/enStock/img' . $producto->image)}}" alt="Liquidaciones"
                                         class="image-liquidacion">
                                    @endif
                                    <div class="overlay">
                                        <div class="text center-align">
                                            <a href="{{ route('reservas.makeReserva', $producto->url) }}"
                                               class="yellow-text">RESERVAR</a>
                                            <hr class="divider">
                                            <a href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                            <hr class="divider">
                                            <a href="{{ route('productos.detalleProducto', $producto->url) }}"
                                               class="yellow-text">VER DETALLES</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="info"></div>
                                <div class="card-content">
                                    <h5 class="montserrat-extra-light">{{$producto->nombre}}</h5>
                                    <div class="row">
                                        <div class="col s6 m6 l6 xl6">
                                            <p><h6>{{$producto->caracteristica1}}</h6></p>
                                            <p><h6>{{$producto->caracteristica2}}</h6></p>
                                            <p><h6>{{$producto->caracteristica3}}</h6></p>
                                            <h6>{{$producto->caracteristica4}}</h6>
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
                                                    Antes: ${{$producto->precioEs}}
                                                </strong>
                                            </h6>
                                            <h5 class="red-text">
                                                <strong>
                                                    Precio: ${{$producto->precioPromoEs}}
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
            </div>

            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="waves-effect"><a href="{{url('productos?page=1')}}">1</a></li>
                <li class="waves-effect"><a href="{{url('productos?page=2')}}">2</a></li>
                <li class="waves-effect"><a href="{{url('productos?page=3')}}">3</a></li>
                <li class="waves-effect"><a href="{{url('productos?page=4')}}">4</a></li>
                <!--
                <li class="waves-effect"><a href="#!">5</a></li>
                -->
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>

        </div>
    </div>
</div>

    @include('sections.ubicaciones')
@stop