@extends('layouts.admin')
@section('content')
    <style>
        .demo-ribbon {
            width: 100%;
            height: 40vh;
            background-color: #3F51B5;
            flex-shrink: 0;
        }

        .demo-main {
            margin-top: -35vh;
            flex-shrink: 0;
        }

        .demo-header .mdl-layout__header-row {
            padding-left: 40px;
        }

        .demo-container {
            max-width: 1600px;
            width: calc(100% - 16px);
            margin: 0 auto;
        }

        .demo-content {
            border-radius: 2px;
            padding: 80px 56px;
            margin-bottom: 80px;
        }

        .demo-layout.is-small-screen .demo-content {
            padding: 40px 28px;
        }

        .demo-content h3 {
            margin-top: 10px;
        }

        .demo-footer .mdl-mini-footer--link-list a {
            font-size: 13px;
        }
    </style>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
        <div class="demo-ribbon"></div>
        <main class="demo-main mdl-layout__content">
            <div class="demo-container mdl-grid">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                    <h1 class="text-center"><strong>Detalle de la Reserva</strong></h1>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            @if(!empty($reserva->image))
                                <img src="{{asset('img/enStock/img' . $reserva->image)}}" alt="Apple"
                                     class="responsive-img image-liquidacion" width="450" height="450">
                            @endif
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <p><strong>Lugar de Reserva</strong></p>
                            <h3 class="subirAtributo">
                                @if($reserva->idSucursal==1)
                                    Merliot
                                    @elseif($reserva->idSucursal==2)
                                Escalón
                                    @elseif($reserva->idSucursal==3)
                                SOHO
                                    @else
                                San Miguel
                                    @endif
                            </h3>
                            <br><br>
                            <p><strong>Nombre del Cliente</strong></p>
                            <h3 class="subirAtributo">{{$reserva->nombreCliente}} {{$reserva->apellidoCliente}}</h3>
                            <br><br>
                            <p><strong>DUI del Cliente</strong></p>
                            <h3>{{$reserva->DUICliente}}</h3>
                            <br><br>
                            <p><strong>Email del Cliente</strong></p>
                            <h3>{{$reserva->emailCliente}}</h3>
                            <br><br>
                            <p><strong>Teléfono del Cliente</strong></p>
                            <h3>{{$reserva->telefonoCliente}}</h3>
                            <br><br>
                            <p><strong>Producto Reservado</strong></p>
                            <h3>{{$reserva->nombreProducto}}</h3>
                            <br><br>
                            <p><strong>¿Optimización?</strong></p>
                            <h3>
                                @if($reserva->idRam!=1 || $reserva->idDisco!=1)
                                    Si
                                @else
                                    No
                                @endif
                            </h3>
                            <br><br>
                            <p><strong>Precio del Final del Producto</strong></p>
                            <h3>
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
                            </h3>
                            <br><br>
                            <p><strong>Reservado el día:</strong></p>
                            <h3>{{$reserva->fechaDeVigencia}}</h3>
                            <br><br>
                        </div>
                        <p><strong>Mensaje</strong></p>
                        <h5 class="text-justify">{{$reserva->mensajeOpcional}}</h5>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
@stop