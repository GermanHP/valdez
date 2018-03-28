@extends('layouts.app')
@section('content')
    <br><br><br><br>
    <div class="container">
        {!! Form::image('/img/ubicaciones/sucursal-merliot.png',null,['class'=>'responsive-img', 'alt'=>'CENTRO MERLIOT']) !!}
    </div>
    <br>
    @include('sections.ubicaciones')
@stop