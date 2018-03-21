@extends('layouts.admin')
@section('content')
    {!! Html::style('css/app.css') !!}
    <style>
        .demo-ribbon {
            width: 100%;
            height: 40vh;
            background-color: #3F51B5;
            flex-shrink: 0;
        }

        .demo-main {
            margin-top: -35vh;
            flex-shrink: 0;
        }

        .demo-header .mdl-layout__header-row {
            padding-left: 40px;
        }

        .demo-container {
            max-width: 1600px;
            width: calc(100% - 16px);
            margin: 0 auto;
        }

        .demo-content {
            border-radius: 2px;
            padding: 80px 56px;
            margin-bottom: 80px;
        }

        .text-underlinded{
            text-underline-color: black;
            text-underline-style: dash;
        }

        .demo-layout.is-small-screen .demo-content {
            padding: 40px 28px;
        }

        .demo-content h3 {
            margin-top: 10px;
        }

        .demo-footer .mdl-mini-footer--link-list a {
            font-size: 13px;
        }
    </style>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
        <div class="demo-ribbon"></div>
        <main class="demo-main mdl-layout__content">
            <div class="demo-container mdl-grid">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                    <h1 class="text-center"><strong>{{$candidatos->nombreCandidato}} {{$candidatos->apellidoCandidato}}</strong></h1>
                    <div class="text-center">
                    @if(!empty($candidatos->foto))
                        <img src="{{asset('img/candidatos/foto' . $candidatos->foto)}}" alt="CANDIDATO"
                             class="responsive-img image-liquidacion" width="270" height="270">
                    @endif
                    </div>
                    <div class="container">
                        <h3><strong class="text-underlinded">INFORMACIÓN PERSONAL</strong></h3>
                        <hr class="divider">
                        <h4><strong>Dirección completa: </strong>{{$candidatos->direccionCandidato}}</h4>
                        <br>
                        <h4><strong>Teléfono: </strong>{{$candidatos->telefonoCandidato}}</h4>
                        <br>
                        <h4><strong>Correo electrónico: </strong>{{$candidatos->emailCandidato}}</h4>
                        <br>
                        <h4><strong>Edad: </strong>{{$candidatos->edadCandidato}} años</h4>
                        <br>
                        <h4><strong>DUI: </strong>{{$candidatos->DUICandidato}}</h4>
                        <br>
                        <h3><strong>EXPERIENCIA LABORAL</strong></h3>
                        <hr class="divider">
                        <h4><strong>Empresa: </strong>{{$candidatos->empresa1}}</h4>
                        <br>
                        <h4><strong>Descripción de la experiencia: </strong>{{$candidatos->experiencia1}}</h4>
                        <br>
                        <h4><strong>Empresa: </strong>{{$candidatos->empresa2}}</h4>
                        <br>
                        <h4><strong>Descripción de la experiencia: </strong>{{$candidatos->experiencia2}}</h4>
                        <br>
                        <h3><strong>PUESTO AL QUE APLICA</strong></h3>
                        <hr class="divider">
                        <h4><strong>
                                @if($candidatos->id_puesto==1)
                                    Ejecutivo de Ventas
                                    @elseif($candidatos->id_puesto==2)
                                Supervisor de Ventas
                                    @elseif($candidatos->id_puesto==3)
                                Técnico en Hardware
                                    @else
                                Técnico en Software
                                    @endif
                            </strong>
                        </h4>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="$$hosted_libs_prefix$$/$$version$$/material.min.js"></script>
    {!! Html::style('js/app.js') !!}
@stop