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
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">

</head>
<body>
<br><br><br><br><br><br><br>
<div class="nav-color z-depth-5">
    <br><br><br><br>
    <div class="container">
        <img class="responsive-img center-block" src="/offline/vs2.png" alt="Valdez Store">
        <h1 id="m-offline" class="white-text center evogria">SITIO EN CONSTRUCCIÓN</h1>
    </div>
    <br><br>
        <div class="row center">
            <div class="col l12 s12">
                <a class="white-text" href="#!">{{Form::image('/img/icons/facebook.png','Facebook',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/twitter.png','Twitter',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/instagram.png','Instagram',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/icons/googleplus.png','GooglePlus',
                ['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            </div>

        </div>
    <br><br><br><br>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
