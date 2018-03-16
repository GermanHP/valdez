@extends('layouts.admin')
@section('content')
    {!! Html::style('css/app.css') !!}
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

        .text-underlinded{
            text-underline-color: black;
            text-underline-style: dash;
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
                   <h3 class="text-center">RESERVAS</h3>
                    <br><br><br><br>
                    <div class="row center-block">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">MERLIOT</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Gestión de reservas que vienen del módulo del sitio web.
                                    Las reservas se eliminarán automáticamente pasadas las 8 horas.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="{{url('reserva/merliot')}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        VER RESERVAS
                                    </a>
                                </div>
                                <div class="mdl-card__menu">
                                    @if($merliot->count() > 0)
                                        <div class="material-icons mdl-badge mdl-badge--overlap"
                                             data-badge="{{ $merliot->count() }}">shopping_basket</div>
                                    @else
                                    <div class="material-icons">shopping_basket</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">ESCALÓN</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Gestión de reservas que vienen del módulo del sitio web.
                                    Las reservas se eliminarán automáticamente pasadas las 8 horas.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="{{url('reserva/escalon')}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        VER RESERVAS
                                    </a>
                                </div>
                                <div class="mdl-card__menu">
                                    @if($escalon->count() > 0)
                                        <div class="material-icons mdl-badge mdl-badge--overlap"
                                             data-badge="{{ $escalon->count() }}">shopping_basket</div>
                                    @else
                                    <div class="material-icons">shopping_basket</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br><br><br>

                    <div class="row center-block">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">SOHO</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Gestión de reservas que vienen del módulo del sitio web.
                                    Las reservas se eliminarán automáticamente pasadas las 8 horas.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="{{url('reserva/soho-cascadas')}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        VER RESERVAS
                                    </a>
                                </div>
                                <div class="mdl-card__menu">
                                    @if($cascadas->count() > 0)
                                    <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="{{ $cascadas->count() }}">shopping_basket</div>
                                    @else
                                        <div class="material-icons">shopping_basket</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">SAN MIGUEL</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Gestión de reservas que vienen del módulo del sitio web.
                                    Las reservas se eliminarán automáticamente pasadas las 8 horas.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="{{url('reserva/san-miguel')}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        VER RESERVAS
                                    </a>
                                </div>
                                <div class="mdl-card__menu">
                                    @if($smiguel->count() > 0)
                                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="{{ $smiguel->count() }}">shopping_basket</div>
                                    @else
                                    <div class="material-icons">shopping_basket</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
    {!! Html::style('js/app.js') !!}
@stop