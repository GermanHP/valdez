<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>  VALDEZ STORE – Liquidacion de Laptops, Computadoras y Smartphones</title>
    <meta name=”robots” content=”noindex,follow”>
    <meta name="description" content="">
    <meta name="keywords" content="Valdez Mobile, Valdez Store, Liquidacion, Laptops en Liquidacion, Valdes,HP,Dell, Laptops en oferta, promociones en laptops, Venta de computadoras,ofertas notebook, laptops economicas">

    <!-- CSS  -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://unpkg.com/flickity@2/dist/flickity.min.css') !!}
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/style.css') !!}
    @yield('css')

    @include('includes.zopim')
</head>
<body>
@include('includes.facebookFeed')
<div class="navbar-fixed hide-on-med-and-down">
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{url('/')}}" class="brand-logo">
            {{Form::image('/img/logos/logo_valdez.png','Valdez Store',['id'=>'Valdez Store', 'height'=>'55', 'width'=>'300'])}}
        </a>
        <ul class="right hide-on-med-and-down">
            <li class="active current-link"><a href="{{url('/')}}" class="evogria">LIQUIDACIONES DE HOY</a></li>
            <li><a href="#sucursales" class="black-text evogria" rel="" id="anchorCentros">VER CENTRO DE LIQUIDACIONES</a></li>
            <li><a href="{{url('/quienes-somos')}}" class="black-text evogria" rel="" id="anchorCentros">QUIÉNES SOMOS</a></li>
            <!-- <li><i class="material-icons">more_vert</i></li>
            <li><a href="#" class="white-text">El Salvador</a></li>
            <li><a href="#" class="white-text">Nicaragua</a></li>-->
        </ul>
    </div>
</nav>
</div>
<div class="navbar-static-top hide-on-large-only">
    <nav class="nav-extended white center">
        <div class="nav-wrapper">
            <a id="logo-container" href="{{url('/')}}" class="brand-logo">
                <img src="img/logos/logo_valdez.png" alt="Valdez Store" height="55" width="300">
            </a>
        </div>
        <div class="nav-content">
            <ul>
                <li class="active"><span class="nav-title"><a href="{{url('/')}}" class="evogria black-text">LIQUIDACIONES DE HOY</a></span></li>
                <li><span class="nav-title"><a href="#sucursales" class="black-text evogria" rel="" id="anchorCentros">VER CENTRO DE LIQUIDACIONES</a></span></li>
                <li><span class="nav-title"><a href="{{url('/quienes-somos')}}" class="black-text evogria" rel="" id="anchorCentros">QUIÉNES SOMOS</a></span></li>
            </ul>
        </div>
    </nav>
</div>
<div id="content1" class="hide-on-med-and-down">
    @yield('content')
</div>
<div id="content2" class="hide-on-large-only">
    <br><br><br>
    @yield('content')
</div>

<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                {{Form::image('/img/logos/vs2.png','Footer Valdez',['id'=>'FooterValdez', 'class'=>'foo-img'])}}
                <p class="grey-text text-lighten-4">Somos una empresa sólida a nivel nacional a través de una cadena de
                    centros de servicios de liquidaciones, líderes en brindar portátiles a bajos precios, con la mejor
                    tecnología del mercado nacional y centroamericano. Ofreciendo calidad, innovación y seguridad en
                    cada producto.
                </p><br>
                <a href="#">
                    <p class="teal-text">Jardines de Cuscatlán, Av. L-A Calle L4, Polígono D, Edificio VALDEZ, Merliot, Antiguo
                    Cuscatlán, La Libertad, El Salvador, C.A.</p>
                </a>
                <a href="#">
                    <p class="teal-text">Teléfono: +503 2201-3004</p>
                </a>
                <a href="#">
                    <p class="teal-text">WhatsApp: +503 7601-2233</p>
                </a>
                <br>
                <a class="white-text" href="#!">{{Form::image('/img/icons/facebook.png','Facebook',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/twitter.png','Twitter',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/instagram.png','Instagram',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/googleplus.png','GooglePlus',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            </div>
            <div class="col l3 s12">
                <br>
                <h5 class="white-text">Atajos</h5>
                <ul>
                    <li><a class="white-text" href="{{url('/')}}">Inicio</a></li>
                    <li><a class="white-text" href="#!">Promociones</a></li>
                    <li><a class="white-text" href="{{url('/productos')}}">Productos</a></li>
                    <li><a class="white-text" href="{{url('/login')}}">Iniciar Sesión</a></li>
                </ul>
                <br>
                <h5 class="white-text">Ubicaciones</h5>
                <ul>
                    <li><a class="white-text" href="#modalMerliot">Merliot</a></li>
                    <li><a class="white-text" href="#!">Escalón</a></li>
                    <li><a class="white-text" href="#!">SOHO Cascadas</a></li>
                    <li><a class="white-text" href="#!">San Miguel</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bd0vueDnQtM/"
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
                <script async defer src="//www.instagram.com/embed.js"></script>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            2018 &copy; GRUPO VALDEZ  <a class="brown-text text-lighten-3" href="#">Derechos Reservados</a>
        </div>
    </div>
</footer>

<!--  Scripts-->
{!! Html::script('http://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') !!}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
{!! Html::script('js/materialize.js') !!}
{!! Html::script('js/init.js') !!}
@yield('scripts')
</body>
</html>
