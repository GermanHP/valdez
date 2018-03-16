<img class="responsive-img" src="img/ubicaciones/purple.png" alt="" id="purple">
<div class="container-fluid" id="sucursales" >
    <br>
    <h5 class="center-align white-text ">&mdash;&mdash;&mdash; ELIGE TU CENTRO DE LIQUIDACIÓN MÁS CERCANO &mdash;&mdash;&mdash;</h5>
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
                    <h4 class="montserrat-extra-light center-align white-text">MERLIOT</h4>
                </a>
                <h5 id="message" class="montserrat-extra-light center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                {{Form::image('/img/ubicaciones/escalon.png',null,['id'=>'ESCALÓN',
                    'class'=>'ubicaciones responsive-img'])}}
                <a  href="https://showtheway.io/to/13.702186,-89.231801?name=VALDEZ%20STORE%20-%20Sucursal%20Escal%26oacute%3Bn"
                    target="_blank"
                    title="Mostrar ruta hacia VALDEZ STORE - Sucursal Escalón con tu App favorita de navegación">
                    <h4 class="montserrat-extra-light center-align white-text">ESCALÓN</h4>
                </a>
                <div id="mapa" hidden></div>
                <h5 id="message2" class="montserrat-extra-light center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                {{Form::image('/img/ubicaciones/soho.png',null,['id'=>'CASCADAS',
                     'class'=>'ubicaciones responsive-img'])}}
                <a href="https://showtheway.io/to/13.678033,-89.251246?name=VALDEZ%20STORE%20-%20Sucursal%20SOHO%20Cascadas"
                   target="_blank"
                   title="Mostrar ruta hacia VALDEZ STORE - Sucursal SOHO Cascadas con tu App favorita de navegación">
                    <h4 class="montserrat-extra-light center-align white-text">CASCADAS</h4>
                </a>
                <h5 id="message3" class="montserrat-extra-light center-align white-text"></h5>
                <br>
            </div>

            <div class="col s12 m12 l3 xl3">
                {{Form::image('/img/ubicaciones/san-miguel.png',null,['id'=>'SAN MIGUEL',
                    'class'=>'ubicaciones responsive-img'])}}
                <a href="https://showtheway.io/to/13.476788,-88.184481?name=VALDEZ%20STORE%20-%20Sucursal%20San%20Miguel"
                   target="_blank"
                   title="Mostrar ruta hacia VALDEZ STORE - Sucursal San Miguel con tu App favorita de navegación">
                    <h4 class="montserrat-extra-light center-align white-text">SAN MIGUEL</h4>
                </a>
                <h5 id="message4" class="montserrat-extra-light center-align white-text"></h5>
                <br>
            </div>

        </div>
        <br>
    </div>
</div>

<script src="https://showtheway.io/w.js" async="async" type="text/javascript"></script>