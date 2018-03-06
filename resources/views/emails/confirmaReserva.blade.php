<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

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
    {!! Html::style('css/app.css') !!}

</head>
<body>
<style>
    div#confirmacion{
        background-color: #524d94;
    }

    .white-text{
        color: white;
    }
</style>
<div id="app">
    <div class="container center-block">
        <div id="confirmacion">
            <h2 class="text-center white-text">¡TU RESERVA FUE EXITOSA!</h2>
        </div>
        <br><br><br><br>
        <h4>Hola! {{$nombreCliente}} {{$apellidoCliente}}</h4>
        <br>
        <p>Has reservado con éxito un {{$nombreProducto}} a las {{$created_at}} con el nombre de {{$nombreCliente}}
        {{$apellidoCliente}} con DUI número {{$DUICliente}}</p>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                @if(!empty($image))
                    <img src="{{asset('img/enStock/img' . $image)}}" alt="Apple"
                         class="responsive-img image-liquidacion">
                @endif
            </div>
        </div>
    </div>
</div>

<!--  Scripts-->
{!! Html::script('https://code.jquery.com/jquery-2.2.4.min.js') !!}
{!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
</body>
</html>
