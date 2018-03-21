@extends('layouts.admin')
@section('content')
    @include('alertas.errores')
    @include('alertas.flash')
    <br>
    <div class="container-fluid panel panel-body mdl-card">
        <table class="table table-striped table-responsive-lg" id="registrados">
            <thead>
            <tr>
                <th><h3 class="text-center">Foto</h3></th>
                <th><h3 class="text-center">Nombres</h3></th>
                <th><h3 class="text-center">Apellidos</h3></th>
                <th><h3 class="text-center">Edad</h3></th>
                <th><h3 class="text-center">Puesto al que aplica</h3></th>
                <th><h3 class="text-center">Acciones</h3></th>
            </tr>
            </thead>
            <tbody>

            @foreach($candidatos as $candidato)
                <tr>
                    <td class="text-center">
                        @if(!empty($candidato->foto))
                            <img src="{{asset('img/candidatos/foto' . $candidato->foto)}}" alt="CANDIDATO"
                                 class="responsive-img image-liquidacion" width="100" height="100">
                        @endif
                    </td>
                    <td class="text-center">
                        <h3>{{$candidato->nombreCandidato}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>{{$candidato->apellidoCandidato}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>{{$candidato->edadCandidato}}</h3>
                    </td>
                    <td class="text-center">
                        <h3>
                            @if($candidato->id_puesto==1)
                                Ejecutivo de Ventas
                                @elseif($candidato->id_puesto==2)
                            Supervisor de Ventas
                                @elseif($candidato->id_puesto==3)
                            Técnico en Hardware
                                @else
                            Técnico en Software
                                @endif
                        </h3>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('candidato.show', $candidato->id) }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-color--green-400"><i class="material-icons">visibility</i></a>
                    </td>
                </tr>
            @endforeach
            {{$candidatos->links()}}
            </tbody>
        </table>
    </div>
@stop