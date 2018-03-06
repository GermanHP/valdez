@extends('layouts.app')
@section('content')
    <br>
    <div class="container mdl-card">
        <div id="sucursales">
            <br><br>
            <h4 class="text-center white-text"><strong>¡TU RESERVA FUE EXITOSA!</strong></h4>
            <br><br>
        </div>
        <br><br>
        <h5 class="texto-justificado">Hola {{$reserva->nombreCliente}}!,</h5>
        <h5>Has reservado con éxito un {{$reserva->nombreProducto}} a las {{\Carbon\Carbon::now('America/El_Salvador')}} en el centro de liquidación
            @if($reserva->idSucursal==1)
                Merliot
            @elseif($reserva->idSucursal==2)
                Escalón
            @elseif($reserva->idSucursal==3)
                SOHO
            @else
                San Miguel
            @endif
                con el nombre de {{$reserva->nombreCliente}} {{$reserva->apellidoCliente}} y DUI {{$reserva->DUICliente}}.</h5>
        <br>
        <div class="row center-align">
            <div class="col xs6 sm6 m6 l6 xl6 text-center">
                @if(!empty($reserva->image))
                    <img src="{{asset('img/enStock/img' . $reserva->image)}}" alt="Imagen Reserva"
                         class="responsive-img image-liquidacion" width="500" height="500">
                @endif
            </div>
            <div class="col s6 m6 l6 xl6 text-center">
                <br><br>
                <ul>
                    <li><h4 class="text-center">{{$reserva->spec1}}</h4></li>
                    <br>
                    <li><h4 class="text-center">{{$reserva->spec2}}</h4></li>
                    <br>
                    <li><h4 class="text-center">{{$reserva->spec3}}</h4></li>
                    <br>
                    <li><h4 class="text-center">{{$reserva->spec4}}</h4></li>
                </ul>
            </div>
        </div>
        <hr class="divider yellow">
        <img src="img/logos/logo_valdez.png" alt="Valdez Store" class="center-block">
        <div class="row center-align" id="redes">
            <div class="col xs12 l12 s12">
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/facebook.png','Facebook',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/twitter.png','Twitter',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/instagram.png','Instagram',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
                <a class="white-text" href="#!">{{Form::image('/img/reservaicons/googleplus.png','GooglePlus',['id'=>'FooterValdez', 'class'=>'icon-img'])}}</a>
            </div>
        </div>
        <div class="center">
            <h5>www.valdezstore.com</h5>
            <h5 class="text-center"><i class="material-icons">call</i>(503)2201-3000</h5>
            <h5 class="text-center"><i class="material-icons">home</i>Jardines de Cuscatlán Av. L-A, Calle L-4, Polígono
                D, Edificio VALDEZ - Merliot, Antiguo Cuscatlán, La Libertad</h5>
        </div>
    </div>
@stop