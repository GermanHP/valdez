@extends('layouts.app')
@section('content')
    @include('includes.modals')

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <form>
                        <div class="input-field container" id="busqueda">
                            <input name="search" class="center" id="search" type="search"
                                   required placeholder="BUSCA POR MARCA, PRODUCTO O CATEGORIA">
                            <i class="material-icons">search</i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/ubicaciones/ba-ubicaciones.png" alt="Unsplashed background img 3"></div>
    </div>
<div id="home">
    <br>
    <div class="container" id="filtrar">
        <div class="row">
            <div class="col l3 xl3 hide-on-med-and-down">
                <ul class="collapsible" data-collapsible="expandable">
                    <li>
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
            <div class="col s12 m12 l9 xl9 white">
                <h5>
                    LIQUIDACIONES DE HOY
                </h5>
                <hr class="divider">
                <div class="row">
                    <?php $contador = 0 ?>
                    @foreach($sugeridos as $sugerencia)
                        <?php $contador++?>
                        @if($contador <3)
                    <div class="col l6 xl6">
                        <div class="row">
                            <div class="col s12 m7">
                                <div class="card card-fix">
                                    <div class="card-image">
                                        @if(!empty($sugerencia->image))
                                            <img src="{{asset('img/enStock/img' . $sugerencia->image)}}"
                                                 alt="Liquidaciones" class="responsive-img image-liquidacion2">
                                        @endif
                                        <div class="overlay">
                                            <div class="text center-align">
                                                <a href="{{route('reservas.makeReserva', $sugerencia->url)}}"
                                                   class="yellow-text">RESERVAR</a>
                                                <hr class="divider">
                                                <a href="#sucursales" class="yellow-text">IR A TIENDA</a>
                                                <hr class="divider">
                                                <a href="{{ route('productos.detalleProducto', $sugerencia->url) }}"
                                                   class="yellow-text">VER DETALLES</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="info"></div>
                                    <div class="card-content">
                                        <h5 class="montserrat-extra-light">{{$sugerencia->nombre}}</h5>
                                        <div class="row">
                                            <div class="col s6 m6 l6 xl6">
                                                <p><strong>{{$sugerencia->caracteristica1}}</strong></p>
                                                <p><strong>{{$sugerencia->caracteristica2}}</strong></p>
                                                <p><strong>{{$sugerencia->caracteristica3}}</strong></p>
                                                <p><strong>{{$sugerencia->caracteristica4}}</strong></p>
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
                                                        <a href="#">
                                                            +info
                                                        </a>
                                                    </strong>
                                                </p>
                                                <h6 class="tachado">
                                                    <strong>
                                                        ${{$sugerencia->precioEs}}
                                                    </strong>
                                                </h6>
                                                <h5 class="red-text">
                                                    <strong>
                                                        ${{$sugerencia->precioPromoEs}}
                                                    </strong>
                                                </h5>
                                                <br><br><br>
                                                <a class="btn modal-trigger black"
                                                   href="{{route('reservas.makeReserva', $sugerencia->url)}}">
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
                        <img class="apple responsive-img center-block" src="img/logos/apple-logo.png" alt="Apple">
                    </div>
                </div>

                <?php $contador = 0 ?>
                @foreach($appleSect as $apple)
                    <?php $contador++?>
                    @if($contador <5)

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
                                    <a href="#sucursales" class="yellow-text">
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
                <h4>SUGERIDOS PARA TI</h4>
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
            @foreach($sugeridos as $sugerencia)
                <?php $contador++?>
                @if($contador <5)
                    <div class="col s12 m12 l3 xl3">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3">
                                <div class="card card-fix2">
                                    <div class="card-image">
                                        @if(!empty($sugerencia->image))
                                            <img src="{{asset('img/enStock/img' . $sugerencia->image)}}"
                                                 alt="Liquidaciones"
                                                 class="responsive-img ajustar-sugeridos">
                                        @endif
                                        <div class="overlay">
                                            <div class="text center-align">
                                                <a href="{{route('reservas.makeReserva', $sugerencia->url)}}"
                                                   class="yellow-text">RESERVAR</a>
                                                <hr class="divider">
                                                <a href="#" class="yellow-text">IR A TIENDA</a>
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
                                                        {{$sugerencia->caracteristica1}}
                                                    </strong>
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{$sugerencia->caracteristica2}}
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
                                                        <a href="#">+info</a>
                                                    </strong>
                                                </p>
                                                <h6 class="tachado">
                                                    <strong>
                                                        Antes: ${{$sugerencia->precioEs}}
                                                    </strong>
                                                </h6>
                                                <h5 class="red-text">
                                                    <strong>
                                                        Precio: ${{$sugerencia->precioPromoEs}}
                                                    </strong>
                                                </h5>
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
            @endforeach
        </div>
    </div>

    <!--   Apple Section   -->
    <div class="container">
        <div class="row">
            <div class="col l1 xl1"></div>
            <div class="col s12 m12 l2 xl2">
                <div class="icon-block card-fix3">
                    <a href="{{url('/smartphones')}}">
                        <h2>Smart</h2>
                        <h2>Phones</h2>
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
                            <img src="{{asset('img/enStock/img' . $telefonos->image)}}" alt="Liquidaciones"
                                 class="responsive-img ajustar-sugeridos">
                        @endif
                        <div class="overlay">
                            <div class="text center-align">
                                <a href="{{route('reservas.makeReserva', $telefonos->url)}}" class="yellow-text">
                                    RESERVAR
                                </a>
                                <hr class="divider">
                                <a href="#sucursales" class="yellow-text">
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

    <script type="text/javascript">
        $('#search').on('keyup', function () {
            $value=$(this).val();
            $.ajax({
               type: 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},

                succes:function (data) {
                    $('div#home').html(data);
                }
            });
        })
    </script>

    <script type="text/javascript">

        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

    </script>

    @include('sections.ubicaciones')
@stop