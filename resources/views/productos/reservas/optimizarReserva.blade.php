@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="card">
            <div class="row">
                <br>

                <div class="col s12 m12 l12 xl12">
                    <img src="img/arrivals/laptop2arrival.png" alt="Producto a Reservar"
                         class="responsive-img center-block" width="550">
                </div>
                <div class="container">
                    <div class="input-field col s12 m12 l12 xl12">
                        <div class="input-field col s12">
                            <select>
                                <option value="" disabled selected>Selecciona Capacidad</option>
                                <option value="1">4GB</option>
                                <option value="2">8GB</option>
                                <option value="3">16GB</option>
                            </select>
                            <label>RAM</label>
                        </div>
                    </div>
                    <div class="input-field col s12 m12 l12 xl12">
                        <select>
                            <option value="" disabled selected>Selecciona Capacidad</option>
                            <option value="1">250GB</option>
                            <option value="2">500GB</option>
                            <option value="3">1TB</option>
                        </select>
                        <label>Disco Duro</label>
                    </div>
                    <div class="input-field col s6 m6 l6 xl6">
                        <p>ACTUALIZAR A WINDOWS 10</p><p class="montserrat-extra-light">Licencia Original</p><p
                                class="montserrat-extra-light">$50</p>
                        <select>
                            <option value="0" disabled selected>No</option>
                            <option value="1">Sí</option>
                        </select>
                    </div>
                    <div class="input-field col s12 m12 l12 xl12 center">
                        {!!Form::submit('RESERVAR', ['class'=>'btn nav-color btn-large','name'=>'btnReservar'])!!}
                        {!!Form::submit('CANCELAR', ['class'=>'btn grey btn-large','name'=>'btnCancelar'])!!}
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
@stop