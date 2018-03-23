@extends('layouts.contenido')
@section('content')
    <br>
    <div class="container mdl-card">
        <div id="sucursales">
            <br><br>
            <h4 class="text-center white-text"><strong>¡TU RESERVA FUE EXITOSA!</strong></h4>
            <br><br>
        </div>
        <br><br>
        <h5 class="texto-justificado">Hola {{$reserva->nombreCliente}}!,</h5>
        <h5>Has reservado con éxito un {{$reserva->nombreProducto}} a las {{\Carbon\Carbon::now('America/El_Salvador')}}
            en el centro de liquidación
            @if($reserva->idSucursal==1)
                Merliot
            @elseif($reserva->idSucursal==2)
                Escalón
            @elseif($reserva->idSucursal==3)
                SOHO
            @else
                San Miguel
            @endif
                con el nombre de {{$reserva->nombreCliente}} {{$reserva->apellidoCliente}} y DUI
            {{$reserva->DUICliente}}.
        </h5>
        <br>
        <div class="row center-align">
            <div class="col xs6 sm6 m6 l6 xl6 text-center">
                @if(!empty($reserva->image))
                    <img src="{{asset('img/enStock/img' . $reserva->image)}}" alt="Imagen Reserva"
                         class="responsive-img image-liquidacion" width="460" height="450">
                @endif
            </div>
            <div class="col s6 m6 l6 xl6 text-center">
                <br><br>
                <ul>
                    <li>
                        <h5 class="text-center">
                            @if($reserva->spec1 == 2)
                                1GB RAM
                            @elseif($reserva->spec1 == 3)
                                2GB RAM
                            @elseif($reserva->spec1 == 4)
                                3GB RAM
                            @elseif($reserva->spec1 == 5)
                                4GB RAM
                            @elseif($reserva->spec1 == 6)
                                8GB RAM
                            @endif
                        </h5>
                    </li>
                    <br>
                    <li>
                        <h5 class="text-center">
                            @if($reserva->spec2 == 2)
                                8GB ROM
                            @elseif($reserva->spec2 == 3)
                                16GB ROM
                            @elseif($reserva->spec2 == 4)
                                32GB ROM
                            @elseif($reserva->spec2 == 5)
                                40GB HDD
                            @elseif($reserva->spec2 == 6)
                                60GB HDD
                            @elseif($reserva->spec2 == 7)
                                64GB ROM
                            @elseif($reserva->spec2 == 8)
                                80GB HDD
                            @elseif($reserva->spec2 == 9)
                                90GB SSD
                            @elseif($reserva->spec2 == 10)
                                96GB SSD
                            @elseif($reserva->spec2 == 11)
                                100GB HDD
                            @elseif($reserva->spec2 == 12)
                                120GB HDD/SSD
                            @elseif($reserva->spec2 == 13)
                                128GB SSD
                            @elseif($reserva->spec2 == 14)
                                160GB HDD
                            @elseif($reserva->spec2 == 15)
                                180GB SSD
                            @elseif($reserva->spec2 == 16)
                                250GB HDD
                            @elseif($reserva->spec2 == 17)
                                256GB SSD
                            @elseif($reserva->spec2 == 18)
                                300GB SSD
                            @elseif($reserva->spec2 == 19)
                                320GB HDD
                            @elseif($reserva->spec2 == 20)
                                500GB HDD
                            @elseif($reserva->spec2 == 21)
                                512GB SSD
                            @elseif($reserva->spec2 == 22)
                                750GB HDD
                            @elseif($reserva->spec2 == 23)
                                1TB HDD
                            @endif
                        </h5>
                    </li>
                    <br>
                    <li>
                        <h5 class="text-center">{{$reserva->spec3}}</h5>
                    </li>
                    <br>
                    <li>
                        <h5 class="text-center">{{$reserva->spec4}}</h5>
                    </li>
                    <br>
                    <li>
                        <h5 class="text-center">Precio Final:
                            @if($reserva->idRam!=1)
                                ${{$reserva->precio + 50}}
                                @elseif($reserva->idDisco == 22)
                                ${{$reserva->precio + 85}}
                                @elseif($reserva->idDisco == 23)
                                ${{$reserva->precio + 95}}
                                @elseif($reserva->idDisco == 17)
                                ${{$reserva->precio + 99}}
                                @else
                                ${{$reserva->precio}}
                            @endif
                        </h5>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="divider yellow">
        <img src="img/logos/logo_valdez.png" alt="Valdez Store" class="center-block">
        <div class="row center-align" id="redes">
            <div class="col xs12 l12 s12">
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/facebook.png','Facebook',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}
                </a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/twitter.png','Twitter',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}
                </a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/instagram.png','Instagram',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}
                </a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/googleplus.png','GooglePlus',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}
                </a>
            </div>
        </div>
        <div class="center">
            <h6>www.valdezstore.com</h6>
            <h6 class="text-center"><i class="material-icons">call</i>(503)2201-3000</h6>
            <h6 class="text-center"><i class="material-icons">home</i>Jardines de Cuscatlán Av. L-A, Calle L-4, Polígono
                D, <br> Edificio VALDEZ - Merliot, Antiguo Cuscatlán, La Libertad</h6>
        </div>
        <br><br>
    </div>
@stop