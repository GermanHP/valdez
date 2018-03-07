@extends('layouts.admin')

{!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    {!! Html::script('//cdn.tinymce.com/4/tinymce.min.js') !!}

@section('content')
    <br><br><br>
    <div class="panel container">

            {!! Form::model($productos, ['route' => ['producto.update', $productos->id], 'method' => 'PUT']) !!}

            <div class="col-xs-12 col-md-12 col-md-12 col-lg-12">
                <img src="{{asset('img/enStock/img' . $productos->image)}}" alt="Apple"
                     class="responsive-img text-center" height="250" width="350">
                <div class="input-group input-group-lg">
                    {{ Form::label('featured_img', 'Adjuntar Nueva Imgagen de Referencia del Producto', ['class'=>'input-group-addon']) }}
                    {{ Form::file('featured_img', ['class'=>'form-control']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                {{ Form::label('title', 'Modelo:',['class'=>'input-group-addon']) }}
                {{ Form::text('nombre', null, ["class" => 'form-control input-lg']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{ Form::label('body', "Fabricante:", ['class' => 'input-group-addon']) }}
                    {{ Form::text('fabricante', null, ['class' => 'form-control']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                {{ Form::label('url', 'URL:', ['class' => 'input-group-addon']) }}
                {{ Form::text('url', null, ['class' => 'form-control']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                {{ Form::label('category_id', "Category:", ['class' => 'input-group-addon']) }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                {{ Form::label('centros', 'Centros de liquidación:', ['class' => 'input-group-addon']) }}
                {{ Form::select('centros[]', $centros, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('precioEs', 'Precio:', ['class'=>'input-group-addon'])}}
                    <span class="input-group-addon">$</span>
                    {{Form::text('precioEs', null, ['class'=>'form-control'])}}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('precioEs', 'Precio de Promoción:', ['class'=>'input-group-addon'])}}
                    <span class="input-group-addon">$</span>
                    {{Form::text('precioPromoEs', null, ['class'=>'form-control'])}}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('caracteristica', 'Característica 1:', ['class'=>'input-group-addon'])}}
                    {{Form::text('caracteristica1', null, ['class'=>'form-control'])}}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('caracteristica', 'Característica 2:', ['class'=>'input-group-addon'])}}
                    {{Form::text('caracteristica2', null, ['class'=>'form-control'])}}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('caracteristica', 'Característica 3:', ['class'=>'input-group-addon'])}}
                    {{Form::text('caracteristica3', null, ['class'=>'form-control'])}}
                </div>
                <br>
                <div class="input-group input-group-lg">
                    {{Form::label('caracteristica', 'Característica 4:', ['class'=>'input-group-addon'])}}
                    {{Form::text('caracteristica4', null, ['class'=>'form-control'])}}
                </div>
            </div>

            <div class="col-md-12">
                <div>
                    <dl class="dl-horizontal">
                        <dt>Fecha de Registro:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($productos->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Última Modificación:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($productos->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            {!! Html::linkRoute('producto.show', 'Cancel', array($productos->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            {{ Form::submit('Guardar cambios', ['class' => 'btn btn-success btn-block']) }}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>
@stop