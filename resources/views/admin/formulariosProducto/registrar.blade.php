<div class="input-group input-group-lg">
    {{ Form::label('nombre', 'Modelo:', ['class'=>'input-group-addon']) }}
    {{ Form::text('modeloProducto', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('fabricante', 'Fabricante:', ['class'=>'input-group-addon'])}}
    {{Form::text('fabricante', null, ['class'=>'form-control', 'required'=>''])}}
</div>
<br>
<div class="input-group input-group-lg">
    {{ Form::label('url', 'https://www.valdezstore.com/productos/', ['class'=>'input-group-addon']) }}
    {{ Form::text('enlace', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5',
    'maxlength' => '255', 'placeholder'=>'seguir-el-formato-de-guiónes-entre-palabras') ) }}
</div>
<br>
<div class="input-group input-group-lg">
    {{ Form::label('category_id', 'Categoría:', ['class'=>'input-group-addon']) }}
    {!! Form::select('category_id',$categories,null,['class'=>'form-control ',"describedby"=>"basic-addon1",'required',
    'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
</div>
<br>
<div class="input-group input-group-lg">
    {{ Form::label('category_client_id', 'Categoría Cliente:', ['class'=>'input-group-addon']) }}
    {!! Form::select('category_client_id',$clienteCat,null,['class'=>'form-control ',"describedby"=>"basic-addon1",
    'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)', 'style'=>'width: 100%']) !!}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('precio', 'Precio:', ['class'=>'input-group-addon'])}}
    <span class="input-group-addon">$</span>
    {{Form::text('precioSalvador', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'6'])}}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('precio', 'Precio de Promoción:', ['class'=>'input-group-addon'])}}
    <span class="input-group-addon">$</span>
    {{Form::text('precioPromocion', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'6'])}}
</div>
<br>
<div class="input-group input-group-lg">
    {{ Form::label('tags', 'Disponible en:', ['class'=>'input-group-addon']) }}
    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
        @foreach($centros as $centro)
            <option value='{{ $centro->id }}'>{{ $centro->nombre }}</option>
        @endforeach
    </select>
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('stock', 'Stock:', ['class'=>'input-group-addon'])}}
    {{Form::number('stockEntrante', null, ['class'=>'form-control', 'required'=>''])}}
</div>
<br>
<div class="input-group input-group-lg">
    <label class="radio-inline">{!! Form::radio('estadoProducto','1', true) !!}Venta</label>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label class="radio-inline">{!! Form::radio('estadoProducto','2') !!}Liquidación</label>
</div>
<br>
<div class="input-group input-group-lg">
    {{ Form::label('featured_img', 'Adjuntar Imgagen de Referencia del Producto', ['class'=>'input-group-addon']) }}
    {{ Form::file('featured_img', ['class'=>'form-control', 'required'=>'']) }}
</div>
<br>

<div class="input-group input-group-lg">
    {{Form::label('especificacion1', 'RAM:', ['class'=>'input-group-addon'])}}
    {!! Form::select('especificacion1',$ram,null,['class'=>'form-control ',"describedby"=>"basic-addon1",
    'required', 'id'=>'department', 'style'=>'width: 100%']) !!}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('especificacion2', 'Almacenamiento:', ['class'=>'input-group-addon'])}}
    {!! Form::select('especificacion2',$disco,null,['class'=>'form-control ',"describedby"=>"basic-addon1",
    'required', 'id'=>'department', 'style'=>'width: 100%']) !!}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('especificacion3', 'Procesador:', ['class'=>'input-group-addon'])}}
    {{Form::text('especificacion3', null, ['class'=>'form-control', 'required'=>''])}}
</div>
<br>
<div class="input-group input-group-lg">
    {{Form::label('especificacion4', 'Pantalla:', ['class'=>'input-group-addon'])}}
    {{Form::text('especificacion4', null, ['class'=>'form-control', 'required'=>''])}}
</div>

<div>
    <div>

    </div>
</div>

{{ Form::submit('Registrar Producto', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}