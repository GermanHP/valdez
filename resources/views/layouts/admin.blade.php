<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>VALDEZ STORE</title>

    <!-- Styles -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://code.getmdl.io/1.3.0/material.teal-pink.min.css') !!}
    {!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.2.1.slim.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}

    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js') !!}
    {!! Html::style('//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css') !!}

    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! Html::script('vendors/ckeditor/ckeditor.js') !!}
    {!! Html::style('css/app.css') !!}

</head>
<body>
<div id="app">
    <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label">
                    <!-- Right aligned menu below button -->
                    <button id="demo-menu-lower-right"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">arrow_drop_down_circle</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="demo-menu-lower-right">
                        <li class="mdl-menu__item">Detalles de mi cuenta</li>
                        <li class="mdl-menu__item">Reestablecer contraseña</li>
                        <li class="mdl-menu__item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
                <br>
                {{Form::image('/img/logos/logo_valdez.png','Valdez Store',['class'=>'responsive-img', 'id'=>'Valdez Store', 'height'=>'50', 'width'=>'170'])}}
            </span>

            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="{{url('/inbox')}}"><i class="material-icons">folder_shared</i>Reservas</a>
                <a class="mdl-navigation__link" href="{{url('/contactos')}}"><i class="material-icons">supervisor_account</i>Contactos</a>
                <a class="mdl-navigation__link" href="{{url('/candidatos')}}"><i class="material-icons">face</i>Candidatos</a>
                <hr class="divider">
                <a class="mdl-navigation__link" href="{{route('producto.create')}}"><i class="material-icons">add_shopping_cart</i>Nuevo Producto</a>
                <a class="mdl-navigation__link" href="{{route('producto.index')}}"><i class="material-icons">build</i>Gestión de Productos</a>
                <a class="mdl-navigation__link" href="{{url('/usuarios-en-el-sistema')}}"><i class="material-icons">person_outline</i>Usuarios del Sistema</a>
                <hr class="divider">
                <a class="mdl-navigation__link" href="#"><i class="material-icons">create</i>Nuevo Post</a>
                <a class="mdl-navigation__link" href="#"><i class="material-icons">library_books</i>Posts</a>
                <a class="mdl-navigation__link" href="#"><i class="material-icons">bookmark</i>Tags</a>
            </nav>

        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                @yield('content')
            </div>
        </main>
    </div>
</div>

<!--  Scripts-->
{!! Html::script('https://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
</body>
</html>
