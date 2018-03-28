<div id="inicio-blanco">
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
                                                <p class="right-align">
                                                    <strong class="light-blue-text">
                                                        {{$sugerencia->stock}} en Stock
                                                    </strong>
                                                </p>
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
                                            <!--<h6 class="red-text">
                                                        <strong>
                                                            Precio: ${{$sugerencia->precioPromoEs}}
                                                    </strong>
                                                </h6>-->
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
</div>