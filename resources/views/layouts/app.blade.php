<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 25 Mar 2000 05:00:00 GMT"); // Fecha en el pasado
    ?>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>  VALDEZ STORE – Liquidacion de Laptops, Computadoras y Smartphones</title>
    <meta name=”robots” content=”noindex,follow”>
    <meta name="description" content="Valdez Store, nace hace más de una década, como un negocio orientado a productos
    tecnológicos. Es una empresa sólida a nivel nacional en El Salvador, a través de una cadena de centros de
    liquidaciones; líderes en brindar portátiles a bajos precios, con la mejor tecnología del mercado nacional y
    centroamericano.">
    <meta name="keywords" content="Valdez Mobile, Valdez Store, Liquidacion, Laptops en Liquidacion, Valdes,HP,Dell,
    Laptops en oferta, promociones en laptops, Venta de computadoras,ofertas notebook, laptops economicas">

    <!-- CSS  -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://unpkg.com/flickity@2/dist/flickity.min.css') !!}
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/style.css') !!}
    <script src='https://www.google.com/recaptcha/api.js'></script>

    @include('includes.zopim')
</head>
<body>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '162388867906232',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.12'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        let js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--<script>
    if('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/sw.js')
            .then(function() { console.log("Service Worker Registered"); });
    }
</script>-->

<header>
    <div class="navbar-fixed">
        <nav class="nav-color" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{url('/')}}" class="brand-logo">
                    {{Form::image('/img/logos/vs2.png','Valdez Store',
                    ['id'=>'Valdez Store', 'height'=>'100', 'width'=>'250'])}}
                </a>
                <a href="#" class="button-collapse" data-activates="mobile-menu"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="active current-link">
                        <a href="#inicio" class="white-text evogria letter-spacing" id="anchorInicio">
                            LIQUIDACIONES DE HOY
                        </a>
                    </li>
                    <li>
                        <a href="#sucursales" class="white-text evogria letter-spacing" rel="" id="anchorCentros">
                            VER CENTRO DE LIQUIDACIONES
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/quienes-somos')}}" class="white-text evogria letter-spacing" rel="" id="anchorCentros">
                            QUIÉNES SOMOS
                        </a>
                    </li>
                </ul>

                <ul class="side-nav" id="mobile-menu">
                    <li>
                        <div>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::image('/img/logos/logo_valdez.png','Valdez Store',
                            ['id'=>'Valdez Store', 'height'=>'50', 'width'=>'250'])}}
                            <br><br>
                            <hr class="divider">
                        </div>
                    </li>
                    <li class="active current-link">
                        <a href="#inicio" class="evogria" id="anchorInicio">
                            LIQUIDACIONES DE HOY
                        </a>
                    </li>
                    <li>
                        <a href="#sucursales" class="black-text evogria" rel="" id="anchorCentros">
                            VER CENTRO DE LIQUIDACIONES
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/quienes-somos')}}" class="black-text evogria" rel="" id="anchorCentros">
                            QUIÉNES SOMOS
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main>
    @include('includes.modals')
    <div id="content1" class="hide-on-med-and-down">
        @yield('content')
    </div>
    <div id="content2" class="hide-on-large-only">
        @yield('content')
    </div>
</main>
<footer class="page-footer grey darken-4">
    <div class="container">
        <h3 class="evogria">VALDEZ <span id="store-logo" class="black-text inclinado">&nbsp;STORE&nbsp;</span></h3>

        <div class="row">

            <div class="col l3 s12">
                <a href="{{url('/quienes-somos')}}"><h5 class="grey-text text-lighten-4">¿QUIÉNES SOMOS?</h5></a>
                <ul>
                    <li>
                        <a href="{{url('/quienes-somos#nuestra-esencia')}}" class="grey-text text-lighten-4">
                           NUESTRA ESENCIA
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/quienes-somos#mision')}}" class="grey-text text-lighten-4">
                            MISIÓN
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/quienes-somos#vision')}}" class="grey-text text-lighten-4">
                            VISIÓN
                        </a>
                    </li>
                </ul>
                <br>
            </div>
            <div class="col l3 s12">
                <ul>
                    <li><a class="white-text" href="{{url('/')}}"><h5>INICIO</h5></a></li>
                    <li><a class="white-text" href="{{url('/liquidaciones')}}">LIQUIDACIONES ESPECIALES</a></li>
                    <li><a class="white-text" href="{{url('/productos')}}">PRODUCTOS</a></li>
                    <li><a class="white-text" href="{{url('/login')}}">INICIAR SESIÓN</a></li>
                </ul>
            </div>
            <div class="col l3 s12">

                <h5 class="grey-text text-lighten-4">CENTROS DE LIQUIDACIÓN</h5>
                <ul>
                    <li><a class="white-text" href="#sucursales" id="anchorCentros">MERLIOT</a></li>
                    <li><a class="white-text" href="#sucursales" id="anchorCentros">ESCALÓN</a></li>
                    <li><a class="white-text" href="#sucursales" id="anchorCentros">SOHO CASCADAS</a></li>
                    <li><a class="white-text" href="#sucursales" id="anchorCentros">SAN MIGUEL</a></li>
                </ul>

                <!--<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bd0vueDnQtM/"
                            data-instgrm-version="8"
                            style=" background:#FFF; border:0; border-radius:3px;
                            box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px;
                            max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px);
                            width:calc(100% - 2px);">
                    <div style="padding:8px;">
                        <div style=" background:#F8F8F8;
                            line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                            <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC);
                            display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                            </div>
                        </div>
                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px;
                        margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center;
                        text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Bd0vueDnQtM/"
                                                                        style=" color:#c9c8cd; font-family:Arial,sans-serif;
                                                                        font-size:14px; font-style:normal;
                                                                        font-weight:normal; line-height:17px;
                                                                        text-decoration:none;" target="_blank">
                                Una publicación compartida de VALDEZ STORE 🇸🇻 (@valdezstoresv)
                            </a> el
                            <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                  datetime="2018-01-11T21:24:13+00:00">Ene 11, 2018 at 1:24 PST</time>
                        </p>
                    </div>
                </blockquote>
                <script async defer src="//www.instagram.com/embed.js"></script>-->
            </div>
            <div class="col l3 s12">
                <ul>
                    <li>
                        <a class="white-text" href="https://www.waze.com/es/livemap?zoom=17&lat=13.67673&lon=-89.26278"
                        target="_blank">
                            <h5>CASA MATRIZ</h5>
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.waze.com/es/livemap?zoom=17&lat=13.67673&lon=-89.26278"
                        target="_blank">
                            Jardines de Cuscatlán, Av. L-A, Calle L-4, Polígono D, Edificio Valdez - Merliot Antiguo
                            Cuscatlán, La Libertad, El Salvador, C.A.
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="#">
                            Teléfono: +503 2201-3004
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="#">
                            WhatsApp: +503 7601-2233
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a class="white-text" href="https://www.facebook.com/valdezstoresv/" target="_blank">{{Form::image('/img/icons/facebook.png','Facebook',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            <a class="white-text" href="https://twitter.com/Valdez_Store" target="_blank">{{Form::image('/img/icons/twitter.png','Twitter',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            <a class="white-text" href="https://www.instagram.com/valdezstoresv/" target="_blank">{{Form::image('/img/icons/instagram.png','Instagram',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            <a class="white-text" href="https://plus.google.com/118226766840394400123" target="_blank">{{Form::image('/img/icons/googleplus.png','GooglePlus',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            <br><br><br>
            Copyright 2018 &copy; GRUPO VALDEZ  <a class="brown-text text-lighten-3" href="#">Derechos Reservados</a>
        </div>
    </div>
</footer>

<!--  Scripts-->
{!! Html::script('https://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') !!}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAbVH7fTxHTtqjs5vrpqgelWbCAXmjs3uM') !!}
{!! Html::script('js/map.js') !!}
{!! Html::script('js/materialize.js') !!}
{!! Html::script('js/init.js') !!}
@yield('scripts')
</body>
</html>
