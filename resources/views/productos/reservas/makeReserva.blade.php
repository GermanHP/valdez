@extends('layouts.contenido')
@section('content')

    @include('alertas.errores')
    @include('alertas.flash')

    <br>
    <div class="container">
        <div class="card">
            <div class="row">
                <br>
                <div class="col s6 m6 l6 xl6">
                    <h5 class="right-align">{{$producto->nombre}}</h5>
                </div>
                <div class="col s6 m6 l6 xl6 red-text">
                    <h5>${{$producto->precioPromoEs}}</h5>
                </div>
                <div class="col s12 m12 l12 xl12">
                    @if(!empty($producto->image))
                        <img src="{{asset('img/enStock/img' . $producto->image)}}" alt="RESERVAR"
                             class="responsive-img center-block" width="500">
                    @endif
                </div>
                @if($producto->category_id==1)
                    <!-- Modal Trigger -->
                <div class="col s12 m12 l12 xl12 center-align">
                    <a href="#modalOptimizar" class="waves-effect waves-light btn nav-color pulse modal-trigger">
                        ESTE PRODUCTO SE PUEDE OPTIMIZAR
                    </a>
                </div>
                @endif
                {!! Form::open(['route' => ['reservado.store'], 'method'=>'POST', 'data-parsley-validate' => '',
                'files' => true, 'id'=>'formReserva']) !!}

                <div class="container">
                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::label('Nombres',null,['class'=>'validate'])}}
                        {{Form::text('nombres',null, ['class'=>'validate', 'placeholder'=>'Nombres',
                        'required' => '', 'autocomplete'=>'given-name'])}}
                    </div>

                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::label('Apellidos',null,['class'=>'validate'])}}
                        {{Form::text('apellidos',null, ['class'=>'validate', 'placeholder'=>'Apellidos',
                        'required' => '', 'autocomplete'=>'family-name'])}}
                    </div>

                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::text('numeroDUI',null,['class'=>'validate','pattern'=>'[0-9]{9}','placeholder'=>
                        'Numero de DUI sin guiones.', 'maxlength'=>'9', 'required' => ''])}}
                        <label for="numeroDUI">DUI</label>
                    </div>

                    <!--aquí se hace la reserva y se obtienen los datos del producto visualizado-->
                    <div class="input-field col s12 m12 l12 xl12">
                        {!! Form::hidden('nombreProducto', $producto->nombre,null,['disabled'=>true]) !!}
                        {!! Form::hidden('fabricanteProducto', $producto->fabricante, null,['disabled'=>true]) !!}
                        {!! Form::hidden('precioProducto', $producto->precioPromoEs, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('imageProducto', $producto->image, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('caract1', $producto->caracteristica1, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('caract2', $producto->caracteristica2, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('caract3', $producto->caracteristica3, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('caract4', $producto->caracteristica4, null, ['disabled'=>true]) !!}
                        {!! Form::hidden('creadoEn', \Carbon\Carbon::now('America/El_Salvador')) !!}
                    </div>
                    <!-- termina la reserva -->
                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::label('Correo Electrónico',null,['class'=>'input-group-addon'])}}
                        <p></p><br>
                        {{Form::email('correoReserva',null, ['class'=>'validate', 'placeholder'=>'e-mail',
                        'id'=>'correoReserva', 'autocomplete'=>'email'])}}
                    </div>

                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::text('telefonoCliente',null,['class'=>'validate','placeholder'=>
                        'Numero de teléfono sin guiones.', 'maxlength'=>'8', 'autocomplete'=>'given-name'])}}
                        <label for="telefonoCliente">Teléfono</label>
                    </div>

                    <div class="input-field col s12 m12 l12 xl12">
                        {{Form::label('Describenos tu necesidad',null,['class'=>'validate'])}}
                        {{Form::textarea('mensaje',null, ['class'=>'validate materialize-textarea',
                        'placeholder'=>'Descripción', 'required' => ''])}}
                    </div>

                    <div class="input-field col s6 m6 l6 xl6">
                        {{ Form::label('centroLiqui', 'Selecciona el Centro Donde Reservará:', ['class'=>
                        'input-group-addon']) }}
                        <br>
                        {!! Form::select('centroLiqui',$centros,null,['class'=>'js-example-basic-single form-control ',
                        "describedby"=>"basic-addon1",'required', 'id'=>'department', 'onchange'=>'GetMunicipios(this)',
                        'style'=>'width: 100%']) !!}
                    </div>

                    <div class="input-field col s6 m6 l6 xl6">
                       <blockquote>El tiempo de reserva son 8 horas, si no realizas tu compra durante éste lapso,
                           el producto
                       pasará a stock nuevamente. <br><br>
                       Al dar click en RESERVAR estás aceptando ésta condición.</blockquote>
                    </div>

                    <!-- Modal Structure -->
                    <div id="modalOptimizar" class="modal modal-fixed-footer modal-lg">
                        <div class="modal-content">
                            <h4 class="center-align">Optimizar Reserva</h4>
                            <div class="row">
                                <br>
                                <div class="container">
                                    <div class="input-field col s4 m4 l4 xl4">
                                        <div class="input-field col s6 m6 l6 xl6">
                                            {{ Form::label('optimizaRam', 'RAM', ['class'=>'input-group-addon']) }}
                                            <br>
                                            {!! Form::select('optimizaRam',$ram,null,['class'=>
                                            'js-example-basic-single form-control ',"describedby"=>"basic-addon1",
                                            'required', 'id'=>'department', 'style'=>
                                            'width: 100%']) !!}
                                        </div>
                                    </div>
                                    <div class="input-field col s4 m4 l4 xl4">
                                        <div class="input-field col s6 m6 l6 xl6">
                                            {{ Form::label('optimizaDisco', 'Almacenamiento', ['class'=>
                                            'input-group-addon']) }}
                                            <br>
                                            {!! Form::select('optimizaDisco',$disco,null,['class'=>
                                            'js-example-basic-single form-control ',"describedby"=>"basic-addon1",
                                            'required', 'id'=>'department', 'style'=>
                                            'width: 100%']) !!}
                                        </div>
                                    </div>
                                    <div class="col s4 m4 l4 xl4">
                                        <br>
                                        {{ Form::label('optimizaDisco', 'ACTUALIZAR SISTEMA OPERATIVO $50', ['class'=>
                                            'input-group-addon']) }}
                                        <select>
                                            <option value="{{$producto->precioPromoEs + 0}}" selected>
                                                No
                                            </option>
                                            <option value="{{$producto->precioPromoEs + 50}}">
                                                Windows 10 Pro Original
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat center">
                                Ok
                            </a>
                        </div>
                    </div>

                    <br><br><br>

                    <div class="center">
                        <br><br>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="g-recaptcha" data-sitekey="6LcVrEwUAAAAAKIRqA7sOelFLCWUQCqgwEPiDXn2"></div>
                            </div>
                            <div class="co s12 m12">
                                {!!Form::submit('RESERVAR', ['class'=>'btn nav-color btn-large','name'=>'btnReservar'])!!}
                                {!! Form::close() !!}
                                <a href="{{url('/productos')}}" class="btn grey btn-large">CANCELAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
@stop