<div class="container-fluid" id="sucursales" >
    <br>
    <h6 class="center-align white-text ">&mdash;&mdash;&mdash; ELIGE TU CENTRO DE LIQUIDACIÓN MÁS CERCANO &mdash;&mdash;&mdash;</h6>
    <div class="container">
        <div class="row">

            <div class="col s12 m12 l3 xl3">
                <a href="#modalMerliot" class="modal-trigger">
                    {{Form::image('/img/ubicaciones/merliot.png',null,['id'=>'MERLIOT',
                    'class'=>'ubicaciones responsive-img'])}}
                </a>
                <a href="https://showtheway.io/to/13.67657,-89.262743?name=LAPTOPS%20VALDEZ%20-%20Sucursal%20Merliot"
                   target="_blank"
                   title="Mostrar ruta hacia VALDEZ STORE - Sucursal Merliot con tu App favorita de navegación">
                    <h6 class="center-align white-text">MERLIOT</h6>
                </a>
                <h5 id="message" class="center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                <a href="#modalEscalon" class="modal-trigger" id="ubicaionesM">
                    {{Form::image('/img/ubicaciones/escalon.png',null,['id'=>'ESCALÓN',
                        'class'=>'ubicaciones responsive-img'])}}
                </a>
                <a  href="https://showtheway.io/to/13.702186,-89.231801?name=VALDEZ%20STORE%20-%20Sucursal%20Escal%26oacute%3Bn"
                    target="_blank"
                    title="Mostrar ruta hacia VALDEZ STORE - Sucursal Escalón con tu App favorita de navegación">
                    <h6 class="center-align white-text">ESCALÓN</h6>
                </a>
                <div id="mapa" hidden></div>
                <h5 id="message2" class="center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                <a href="#modalCascadas" class="modal-trigger">
                    {{Form::image('/img/ubicaciones/soho.png',null,['id'=>'CASCADAS',
                         'class'=>'ubicaciones responsive-img'])}}
                </a>
                <a href="https://showtheway.io/to/13.678033,-89.251246?name=VALDEZ%20STORE%20-%20Sucursal%20SOHO%20Cascadas"
                   target="_blank"
                   title="Mostrar ruta hacia VALDEZ STORE - Sucursal SOHO Cascadas con tu App favorita de navegación">
                    <h6 class="center-align white-text">CASCADAS</h6>
                </a>
                <h5 id="message3" class="center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                <a href="#modalSMiguel" class="modal-trigger">
                    {{Form::image('/img/ubicaciones/san-miguel.png',null,['id'=>'SAN-MIGUEL',
                        'class'=>'ubicaciones responsive-img'])}}
                </a>
                <a href="https://showtheway.io/to/13.476788,-88.184481?name=VALDEZ%20STORE%20-%20Sucursal%20San%20Miguel"
                   target="_blank"
                   title="Mostrar ruta hacia VALDEZ STORE - Sucursal San Miguel con tu App favorita de navegación">
                    <h6 class="center-align white-text">SAN MIGUEL</h6>
                </a>
                <h5 id="message4" class="center-align white-text"></h5>
                <br>
            </div>

        </div>
        <br>
    </div>
</div>
{!! Form::image('/img/ubicaciones/asesor.png', null, ['class'=>'responsive-img right hide-on-med-and-down', 'id'=>'asesor', 'alt'=>'CENTROS DE LIQUIDACIÓN']) !!}


<script src="https://showtheway.io/w.js" async="async" type="text/javascript"></script>