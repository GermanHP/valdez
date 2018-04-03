<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>  VALDEZ STORE – Liquidacion de Laptops, Computadoras y Smartphones</title>
    <meta name="description" content="">
    <meta name="keywords" content="Valdez Mobile, Valdez Store, Liquidacion, Laptops en Liquidacion, Valdes,HP,Dell, Laptops en oferta, promociones en laptops, Venta de computadoras,ofertas notebook, laptops economicas">

    <!-- CSS  -->
{!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
{!! Html::style('https://unpkg.com/flickity@2/dist/flickity.min.css') !!}
{!! Html::style('css/materialize.css') !!}
{!! Html::style('css/parallax.css') !!}

    @include('includes.zopim')
</head>
<body>
@include('includes.modals')
<div class="navbar-fixed">
    <nav class="nav-color" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container2" href="{{url('/')}}" class="brand-logo">
                {{Form::image('/img/logos/vs2.png','Valdez Store',
                    ['id'=>'Valdez Store', 'height'=>'30', 'width'=>'230'])}}
            </a>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="{{url('/')}}" class="white-text evogria letter-spacing">LIQUIDACIONES DE HOY</a>
                </li>
                <li>
                    <a href="#sucursales" class="white-text evogria letter-spacing" rel="" id="anchorCentros">VER CENTRO DE LIQUIDACIONES</a>
                </li>
                <li class="active current-link">
                    <a href="{{url('/quienes-somos')}}" class="white-text evogria letter-spacing" rel="" id="anchorCentros">QUIÉNES SOMOS</a>
                </li>
                <!-- <li><i class="material-icons">more_vert</i></li>
                <li><a href="#" class="white-text">El Salvador</a></li>
                <li><a href="#" class="white-text">Nicaragua</a></li>-->
            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li>
                    <a href="{{url('/')}}" class="evogria" id="anchorInicio">LIQUIDACIONES DE HOY</a>
                </li>
                <li>
                    <a href="#sucursales" class="black-text evogria" rel="" id="anchorCentros">
                        VER CENTRO DE LIQUIDACIONES
                    </a>
                </li>
                <li class="active current-link">
                    <a href="{{url('/quienes-somos')}}" class="black-text evogria" rel="" id="anchorCentros">
                        QUIÉNES SOMOS
                    </a>
                </li>
            </ul>
            <a href="#" data-activates="mobile-menu" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
</div>
<div>
    @yield('content')
</div>

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
{!! Html::script('http://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') !!}
{!! Html::script('js/materialize.js') !!}
{!! Html::script('js/init.js') !!}

</body>
</html>
