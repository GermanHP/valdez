<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>  VALDEZ STORE – Liquidacion de Laptops, Computadoras y Smartphones</title>
    <meta name="description" content="Valdez Store, nace hace más de una década, como un negocio orientado a productos
    tecnológicos. Es una empresa sólida a nivel nacional en El Salvador, a través de una cadena de centros de
    liquidaciones; líderes en brindar portátiles a bajos precios, con la mejor tecnología del mercado nacional y
    centroamericano.">
    <meta name="keywords" content="Valdez Mobile, Valdez Store, Liquidacion, Laptops en Liquidacion, Valdes,HP,Dell,
    Laptops en oferta, promociones en laptops, Venta de computadoras,ofertas notebook, laptops economicas">

    <!-- CSS  -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://unpkg.com/flickity@2/dist/flickity.min.css') !!}
    {!! Html::style('css/sliderpure.css') !!}
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/parallax.css') !!}

    @include('includes.zopim')
</head>
<body>
@include('includes.facebookFeed')
@include('includes.modals')

<script>
    if('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/sw.js')
            .then(function() { console.log("HOLA, BIENVENIDO A VALDEZ STORE"); });
    }
</script>
<div class="navbar-fixed">
    <nav class="nav-color" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container2" href="{{url('/')}}" class="brand-logo">
                {{Form::image('/img/logos/vs2.png','Valdez Store',
                ['id'=>'Valdez Store', 'height'=>'100', 'width'=>'250'])}}
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
        <div class="row">
            <div class="col l6 s12">
                <img class="foo-img" src="img/logos/vs2.png" alt="Valdez Store">
                <p class="grey-text text-lighten-4">Somos una empresa sólida a nivel nacional a través de una cadena de
                    centros de servicios de liquidaciones, líderes en brindar portátiles a bajos precios, con la mejor
                    tecnología del mercado nacional y centroamericano. Ofreciendo calidad, innovación y seguridad en
                    cada producto.
                </p><br>
                <a href="#">
                    <p class="teal-text">Jardines de Cuscatlán, Av. L-A Calle L4, Polígono D, Edificio VALDEZ, Merliot,
                        Antiguo Cuscatlán, La Libertad, El Salvador, C.A.</p>
                </a>
                <a href="#">
                    <p class="teal-text">Teléfono: +503 2201-3004</p>
                </a>
                <a href="#">
                    <p class="teal-text">WhatsApp: +503 7601-2233</p>
                </a>
                <br>
                <a class="white-text" href="#!"><img class="icon-img" src="img/icons/facebook.png" alt="Facebook"></a>
                <a class="white-text" href="#!"><img class="icon-img" src="img/icons/twitter.png" alt="Twitter"></a>
                <a class="white-text" href="#!"><img class="icon-img" src="img/icons/instagram.png" alt="Instagram"></a>
                <a class="white-text" href="#!"><img class="icon-img" src="img/icons/googleplus.png" alt="Google+"></a>
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
{!! Html::script('https://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') !!}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAbVH7fTxHTtqjs5vrpqgelWbCAXmjs3uM') !!}
{!! Html::script('js/map.js') !!}
{!! Html::script('js/materialize.js') !!}
{!! Html::script('js/init.js') !!}

</body>
</html>
