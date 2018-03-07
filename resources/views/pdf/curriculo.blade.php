<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>VALDEZ STORE</title>



</head>
<body>
    <style>
        <!-- Styles -->
        {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
        {!! Html::style('https://code.getmdl.io/1.3.0/material.teal-pink.min.css') !!}
        {!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
        {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}
        {!! Html::script('https://code.jquery.com/jquery-3.2.1.slim.min.js') !!}
        {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}

        {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js') !!}
        {!! Html::style('//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css') !!}

        {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

        <?php include(public_path() . '/css/app.css');?>

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
                <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800
                mdl-cell mdl-cell--8-col">
                    <h1 class="text-center">
                        <strong>
                            {{$data[0]->nombreCandidato}} {{$data[0]->apellidoCandidato}}
                        </strong>
                    </h1>
                    <div class="text-center">
                        @if(!empty($data[0]->foto))
                            <img src="{{asset('img/candidatos/foto' . $data[0]->foto)}}" alt="Apple"
                                 class="responsive-img image-liquidacion" width="270" height="270">
                        @endif
                    </div>
                    <div class="container">
                        <h3><strong class="text-underlinded">INFORMACIÓN PERSONAL</strong></h3>
                        <hr class="divider">
                        <h4><strong>Dirección completa: </strong>{{$data[0]->direccionCandidato}}</h4>
                        <br>
                        <h4><strong>Teléfono: </strong>{{$data[0]->telefonoCandidato}}</h4>
                        <br>
                        <h4><strong>Correo electrónico: </strong>{{$data[0]->emailCandidato}}</h4>
                        <br>
                        <h4><strong>Edad: </strong>{{$data[0]->edadCandidato}} años</h4>
                        <br>
                        <h4><strong>DUI: </strong>{{$data[0]->DUICandidato}}</h4>
                        <br>
                        <h3><strong>EXPERIENCIA LABORAL</strong></h3>
                        <hr class="divider">
                        <h4><strong>Empresa: </strong>{{$data[0]->empresa1}}</h4>
                        <br>
                        <h4><strong>Descripción de la experiencia: </strong>{{$data[0]->experiencia1}}</h4>
                        <br>
                        <h4><strong>Empresa: </strong>{{$data[0]->empresa2}}</h4>
                        <br>
                        <h4><strong>Descripción de la experiencia: </strong>{{$data[0]->experiencia2}}</h4>
                        <br>
                        <h3><strong>PUESTO AL QUE APLICA</strong></h3>
                        <hr class="divider">
                        <h4><strong>
                                @if($data[0]->id_puesto==1)
                                    Ejecutivo de Ventas
                                @elseif($data[0]->id_puesto==2)
                                    Supervisor de Ventas
                                @elseif($data[0]->id_puesto==3)
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
</body>
</html>