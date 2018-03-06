@extends('layouts.admin')
@section('content')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <br><br>
    <div class="container panel panel-body mdl-card">
        {!! Form::open(['route' => ['producto.store'], 'method'=>'POST', 'data-parsley-validate' => '', 'files' => true]) !!}

        <br>
        <h1 class="text-center">Registrar Producto</h1>
        <hr>
           @include('admin.formulariosProducto.registrar')

        <br><br>
    </div>
        {!! Form::close() !!}

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@stop