<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>VALDEZ STORE</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
    <nav class="black" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img src="img/logos/vs2.png" alt="Valdez Store" height="100" width="250"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" class="white-text">Inicio</a></li>
                <li><a href="#" class="white-text">Promociones</a></li>
                <li><a href="#" class="white-text">Productos</a></li>
                <li><a href="#" class="white-text">Ubicaciones</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
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
                <h5 class="white-text">Valdez Store</h5>
                <p class="grey-text text-lighten-4">Somos una empresa sólida a nivel nacional a través de una cadena de
                    centros de servicios de liquidaciones, líderes en brindar portátiles a bajos precios, con la mejor
                    tecnología del mercado nacional y centroamericano. Ofreciendo calidad, innovación y seguridad en
                    cada producto.
                </p>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">German Hernández</a>
        </div>
    </div>
</footer>

<!--  Scripts-->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
