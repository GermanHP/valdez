@extends('layouts.app')
@section('content')
    <br><br><br><br>
    <div class="container center">
        {{Form::image('/img/hide/recaptcha.gif','reCaptcha Reserva',
                    ['class'=>'responsive-img', 'id'=>'reCaptcha'])}}
        <br><br><br>
        <h3 class="evogria">Por favor completa el captcha para poder reservar.</h3>
        <br><br><br><br>
        <a href="{{url('/productos')}}" class="btn">Regresar a Productos</a>
        <br><br><br><br>
    </div>
@stop