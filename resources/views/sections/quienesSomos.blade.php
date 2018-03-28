@extends('layouts.esencia')
@section('content')
    <style>
        div#quienes-img, img#quienes-img {
            width: 100%;
            height: 100%;
            display: block;
            position: relative;

        }

        div#quienes-img h5#quienes-p {
            display: block;
            position: absolute;
            text-align: right;
            bottom: 45%;
            margin-left: 10%;
            padding: 5px;
            width: 75%;
            font-size: 10px;
        }
    </style>

        <div class="hide-on-med-and-down">
            <img class="responsive-img ancho-cien" src="img/hide/banner-low.png" alt="VIVE LA EXPERIENCIA">
        </div>
        <div class="hide-on-large-only" id="quienes-img">
            <img src="img/hide/banner-quienes.png" alt="VIVE LA EXPERIENCIA" id="quienes-img">
            <br>
            <h5 id="quienes-p"  class="evogria cyan-text-2 letter-spacing2">
               VIVE LA EXPERIENCIA
            </h5>
        </div>

    <br>
    <div class="container">
        <div class="row" id="subir-quienes">
            <div id="nuestra-esencia"></div>
            <br><br>

            <div class="col s12 m12 l7 xl7" id="quienes-somos-1">
                <h6 class="montserrat-extra-light texto-gris">&nbsp; NUESTRA ESENCIA</h6>
                <hr class="divider teal">
                <br>
                <p class="texto-justificado texto-gris">Porque desde años atrás, GRUPO VALDEZ viene trabajando fuertemente para satisfacer las necesidades
                    de sus clientes, apostándole a la calidad y creando relaciones sólidas, duraderas y de confianza,
                    siendo esto garantía de su éxito. Cuando adquiere un dispositivo (laptop, smartphone o tablet),
                    elige mucho más que eso; elige una filosofía de trabajo que respeta principios y valores.</p>
                <p class="texto-justificado texto-gris">Valdez Store, nace hace más de una década, como un negocio orientado a productos tecnológicos.
                    Es una  empresa sólida a nivel nacional en El Salvador, a través de una cadena de centros de
                    liquidaciones; líderes en brindar portátiles a bajos precios, con la mejor tecnología del mercado
                    nacional y centroamericano.</p>
                <br>
                <img class="hide-on-large-only responsive-img" src="img/banners/lateral-2.png" alt="Quiénes Somos">
                <br>
                <div id="mision"></div>
                <br><br>
                    <h6 class="texto-gris"><strong>Misión</strong></h6>

                <p class="texto-justificado texto-gris">Somos una empresa integrada en venta de tecnología, de todas las marcas reconocidas a nivel mundial,
                    satisfaciendo las necesidades de todos nuestros clientes; con precios accesibles, al alcance de
                    todos los sectores sociales de nuestro país.</p>
                <div id="vision"></div>
                <br><br>
                    <h6 class="texto-gris"><strong>Visión</strong></h6>


                <p class="texto-justificado texto-gris">Expandirnos a nivel internacional, ofreciendo tecnología de las mejores marcas, a bajos precios,
                    cuidando el bolsillo de nuestros clientes.</p>
            </div>
            <div class="hide-on-med-and-down col s1 m1 l1 xl1"></div>
            <div class="hide-on-med-and-down col s4 m4 l4 xl4" id="quienes-somos-1">
                <br>
                <hr class="divider teal">
                <br>
                <img class="hide-on-med-and-down" src="img/banners/lateral-1.png" alt="Quiénes Somos" width="300" height="200">
                <img class="hide-on-med-and-down" src="img/banners/lateral-2.png" alt="Quiénes Somos" width="300" height="200">
                <img class="hide-on-med-and-down" src="img/banners/lateral-3.png" alt="Quiénes Somos" width="300" height="200">
            </div>
        </div>
        <br><br><br>
        <div class="row" id="quienes-somos-1">
            <br>
        <h6 class="montserrat-extra-light texto-gris">&nbsp; MODELO DE NEGOCIO</h6>
        <hr class="divider teal">
        <p class="texto-justificado texto-gris">&nbsp;&nbsp; Valdez Store, importa y distribuye laptops, smartphones y tablets a nivel
            centroamericano, a precios hasta de un tercio del mercado local.  Usted puede  estar &nbsp;&nbsp; &nbsp;&nbsp;seguro que la calidad
            de nuestros productos  prevalece, y además cuenta con el respaldo y la garantía de hasta 1 año, por parte
            de la prestigiosa marca y&nbsp;&nbsp; &nbsp;&nbsp;reconocida, Laptop’s Valdez.
        </p>
        <p class="texto-justificado texto-gris">
            &nbsp; Nuestro modelo de negocio es: <strong>¡Llegar a todos los extractos sociales!</strong>
        </p>
        </div>
    </div>
    <br><br><br>
    <div class="parallax-container valign-wrapper responsive hide-on-med-and-down" id="consulta">
        <div class="section no-pad-bot">
            <div class="container">
                <!--   Target Section   -->
                <div class="row">
                    <div class="col s4 m4 l4 xl4">
                        <div class="icon-block center-align">
                            <img class="responsive-img" src="img/icons/estudiante.png" alt="ESTUDIANTE">
                            <h6 class="center white-text evogria espaciado">ESTUDIANTE</h6>

                            <p class="light white-text center-align">
                                Estamos conscientes que los estudiantes, disponen de un presupuesto ajustable; es por ellos,
                                que brindamos las mejores soluciones tecnológicas, cuidando que cada laptop que se ofrece,
                                cumpla con la mejor calidad y se ajuste a la demanda en el mercado.
                            </p>
                        </div>

                    </div>

                    <div class="col s4 m4 l4 xl4">
                        <div class="icon-block center-align">
                            <img class="responsive-img" src="img/icons/empresario.png" alt="EMPRESARIO">
                            <h6 class="center white-text evogria espaciado">EMPRESARIO</h6>

                            <p class="light white-text center-align">
                                Trabajamos con empresas que buscan el éxito, brindamos las mejoras en su infraestructura
                                tecnológica, con calidad y servicio al cliente.
                                <br><br><br><br>
                            </p>
                        </div>

                    </div>

                    <div class="col s4 m4 l4 xl4">
                        <div class="icon-block center-align">
                            <img class="responsive-img" src="img/icons/sociedad.png" alt="SOCIEDAD">
                            <h6 class="center white-text evogria espaciado">SOCIEDAD</h6>

                            <p class="light white-text center-align">
                                Con Valdez Store, usted reduce su presupuesto. Estamos conscientes de que la economía puede
                                alcanzarse con un socio estratégico que además de brindarle un buen producto, le ofrezca la
                                mejor atención y asesoría.<br>
                            </p>
                        </div>

                    </div>

                    <div class="col s4 m4 l4 xl4">
                        <div class="divider-teal"></div>
                    </div>
                    <div class="col s4 m4 l4 xl4">
                        <div class="divider-teal"></div>
                    </div>
                    <div class="col s4 m4 l4 xl4">
                        <div class="divider-teal"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="parallax"><img class="responsive-img" src="img/banners/banner-icon.png" alt="SECTORES"></div>
    </div>

    <!--   Target Section Med and Down   -->
    <div class="row subir hide-on-large-only">
        <br><br><br><br><br><br>
        <!--<img src="img/hide/banner-low-target.png" alt="" class="responsive-img">-->

        <div class="row">
            <div class="col s12 m12 l4 xl4">
                <div class="icon-block center-align">
                    <img class="responsive-img" src="img/icons/estudiante.png" alt="ESTUDIANTE">
                    <h6 class="center texto-gris evogria espaciado">ESTUDIANTE</h6>

                    <p class="texto-gris center-align">
                        Estamos conscientes que los estudiantes, disponen de un presupuesto ajustable; es por ellos,
                        que brindamos las mejores soluciones tecnológicas, cuidando que cada laptop que se ofrece,
                        cumpla con la mejor calidad y se ajuste a la demanda en el mercado.
                    </p>
                </div>
                <hr class="divider teal">
            </div>

            <div class="col s12 m12 l4 xl4">
                <div class="icon-block center-align">
                    <img class="responsive-img" src="img/icons/empresario.png" alt="EMPRESARIO">
                    <h6 class="center texto-gris evogria espaciado">EMPRESARIO</h6>

                    <p class="texto-gris center-align">
                        Trabajamos con empresas que buscan el éxito, brindamos las mejoras en su infraestructura
                        tecnológica, con calidad y servicio al cliente.
                        <br><br><br><br>
                    </p>
                </div>
                <hr class="divider teal">
            </div>

            <div class="col s12 m12 l4 xl4">
                <div class="icon-block center-align">
                    <img class="responsive-img" src="img/icons/sociedad.png" alt="SOCIEDAD">
                    <h6 class="center texto-gris evogria espaciado">SOCIEDAD</h6>

                    <p class="texto-gris center-align">
                        Con Valdez Store, usted reduce su presupuesto. Estamos conscientes de que la economía puede
                        alcanzarse con un socio estratégico que además de brindarle un buen producto, le ofrezca la
                        mejor atención y asesoría.<br> <br>
                    </p>
                </div>
                <hr class="divider teal">
            </div>
        </div>
    </div>

        <div id="quienes-somos-1">
    <br><br>
    <div class="container">
        <div class="row">
            <h6 class="montserrat-extra-light texto-gris">NUESTROS CENTROS DE LIQUIDACIÓN</h6>
            <hr class="divider teal">
            <div class="col s12 m12 l12 xl12">
                <br>
                <p class="texto-justificado texto-gris">La tecnología que brinda la empresa a todo el público salvadoreño,
                    se garantiza por cuatro centros de liquidaciones; llamados así, por ser centros caracterizados
                    por brindas productos en accesibles precios. Las sucursales se encuentran ubicadas en cuatros
                    puntos estratégicos; en el departamento de San Salvador (Paseo General Escalón en C.C. Vía Madrid),
                    La Libertad (Platillo Merliot y SOHO Cascadas), y en San Miguel (C.C. Mi Plaza).
                </p>
                <p class="texto-justificado texto-gris">En diciembre de 2017, Valdez Store cruzó fronteras y se traslada al país
                    hermano: Nicaragua. La apertura en C.C. Multicentro Las Américas, posterior a ellos, en el siguiente
                    mes, se inaugura la segunda sucursal en Metrocentro. Es así como nuestra compañía inicia su
                    expansión en Centroamérica;  brindando la experiencia Valdez a todos los sectores, ofreciendo
                    calidad y un servicio al cliente sin igual, con garantías integrales y un enfoque al ahorro.
                </p>
                <p class="texto-justificado texto-gris">Nuestra compañía, conforma una ventana única de productos tecnológicos de
                    las mejores marcas a nivel mundial, entre los cuales destacan: portátiles, tablet, smartphones y
                    accesorios. Ayudando así, a estirar el presupuesto de nuestros clientes, ofreciéndoles lo mejor en
                    este rubro.
                </p>
            </div>
        </div>
    </div>
    <br><br>
        </div>
    <div id="slider-indicators">
        @include('includes.slider')
    </div>

    <br><br>
    <div class="container" id="quienes-somos-1">
        <div class="row" id="quienes-somos-1">
            <br>
            <h6 class="montserrat-extra-light texto-gris">&nbsp; ABASTECIMIENTO Y LOGÍSTICA</h6>
            <hr class="divider teal">
            <div class="col s12 m12 l12 xl12">
                <br>
                <p class="texto-justificado texto-gris">Nuestra compañía se ha caracterizado por adquirir grandes volúmenes de
                    productos para abastecer cada uno de sus establecimientos. Somos importadores directos de diversas
                    marcas (HP, Lenovo, Apple, Samsung, Panasonic, Toshiba, Acer, Gateway) en el que contamos con un
                    excelente proceso de planificación, operación y control sobre importación de productos con los más
                    altos estándares de calidad, compra venta, movimiento y almacenaje. Desde la búsqueda de proveedores
                    hasta trasladarlos al punto de venta.
                </p>
                <p class="texto-justificado texto-gris">Es decir, el control de toda la cadena de abastecimiento, desde la compra
                    de materia prima hasta la entrega del producto final.
                </p>
            </div>
            <div class="col s12 m12 l12 xl12 center">
                <img src="img/varios/logistica.png" alt="Abastecimiento y Logística" class="responsive-img">
            </div>

        <hr class="divider teal">
        <br>
        </div>
    </div>
    <br>

    <div>
        <img class="responsive-img ancho-cien" src="img/banners/asesores-05.png" alt="ASESORES">
    </div>
        <div id="quienes-somos-1">
    <br><br>
    <div class="container hide-on-med-and-down">
        <h6 class="montserrat-extra-light texto-gris">NUESTROS ASESORES DE SERVICIO DESTACAN POR SER:</h6>
        <hr class="divider teal">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <div class="row">
                    <div class="col s12 m12 l3 xl3 alineacion-derecha">
                        <div>
                            <img class="responsive-img" src="img/icons/icon1.png" alt="AUTODIDACTAS">
                        </div>
                    </div>
                    <div class="col s12 m12 l9 xl9">
                        <br><br>
                        <h6 class="texto-gris montserrat-extra-light">AUTODIDACTAS</h6>
                        <p class="texto-gris texto-justificado">Somos fieles en nuestra labor diaria. La integridad muestra lo mejor de nosotros en todas las
                            circunstancias, cumpliendo siempre con altos estándares éticos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col s12 m12 l12 xl12">
                <div class="row">
                    <div class="col s12 m12 l3 xl3 alineacion-derecha">
                        <div>
                            <img class="responsive-img" src="img/icons/icon2.png" alt="APASIONADOS">
                        </div>
                    </div>
                    <div class="col s12 m12 l9 xl9">
                        <br><br>
                        <h6 class="texto-gris montserrat-extra-light">APACIONADO(A)S POR LA TECNOLOGÍA</h6>
                        <p class="texto-gris texto-justificado">Creemos en lo nuevo, en el cambio constante y nos apasiona la tecnología.
                            Nuestra capacidad de adaptación, sin traicionar nuestros principios, forma parte del listado
                            de retos que nos permitimos encarar todos los días. No cesamos de buscar la mejora continua
                            en nuestros servicios, procesos y sistemas. Conocemos nuestras fortalezas y las optimizamos.
                            Amamos estar a la vanguardia..
                        </p>
                    </div>
                </div>
            </div>

            <div class="col s12 m12 l12 xl12">
                <div class="row">
                    <div class="col s12 m12 l3 xl3 alineacion-derecha">
                        <div>
                            <img class="responsive-img" src="img/icons/icon3.png" alt="VERSÁTILES">
                        </div>
                    </div>
                    <div class="col s12 m12 l9 xl9">
                        <br><br>
                        <h6 class="texto-gris montserrat-extra-light">VERSÁTILES</h6>
                        <p class="texto-gris texto-justificado">Nuestra capacidad de adaptación, sin traicionar nuestros años de experiencia, forman parte del
                            listado de retos que nos permitimos encarar todos los días.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col s12 m12 l12 xl12">
                <div class="row">
                    <div class="col s12 m12 l3 xl3 alineacion-derecha">
                        <div>
                            <img class="responsive-img" src="img/icons/icon4.png" alt="MINUCIOSOS">
                        </div>
                    </div>
                    <div class="col s12 m12 l9 xl9">
                        <br><br>
                        <h6 class="texto-gris montserrat-extra-light">MINUCIOSO(A)S</h6>
                        <p class="texto-gris texto-justificado">La búsqueda de la perfección en los detalles más pequeños y en los retos más grandes es guía de
                            nuestra labor diaria.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l12 xl12">
                <div class="row">
                    <div class="col s12 m12 l3 xl3 alineacion-derecha">
                        <div>
                            <img class="responsive-img" src="img/icons/icon5.png" alt="CON PASIÓN">
                        </div>
                    </div>
                    <div class="col s12 m12 l9 xl9">
                        <br><br>
                        <h6 class="texto-gris montserrat-extra-light">CON PASIÓN POR LAS VENTAS Y ATENCIÓN AL CLIENTE</h6>
                        <p class="texto-gris texto-justificado">La infraestructura moderna que brinda un estatus acogedor y moderno a nuestros clientes hace el
                            contraste perfecto con la imagen de nuestros asesores y asesoras de servicio, quienes se deben al
                            compromiso con las diferentes marcas  para proyectar la  imagen corporativa que durante muchos
                            años se ha construido, es por ello que nuestro personal cumple con las expectativas y percepción de
                            nuestros clientes y busca el enfoque de marca de esta unidad de negocio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider teal">
    </div>

            <div class="container hide-on-large-only">
                <h6 class="montserrat-extra-light texto-gris">NUESTROS ASESORES DE SERVICIO DESTACAN POR SER:</h6>
                <hr class="divider teal">
                <div class="row">
                    <div class="col s12 m12 l12 xl12">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3 center-align">
                                <h6 class="texto-gris montserrat-extra-light">AUTODIDACTAS</h6>
                                <br>
                                <div>
                                    <img class="responsive-img" src="img/icons/auto.png" alt="AUTODIDACTAS" width="75" height="75">
                                </div>
                            </div>
                            <div class="col s12 m12 l9 xl9">
                                <br>
                                <p class="texto-gris texto-justificado">Somos fieles en nuestra labor diaria. La integridad muestra lo mejor de nosotros en todas las
                                    circunstancias, cumpliendo siempre con altos estándares éticos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l12 xl12">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3 center-align">
                                <h6 class="texto-gris montserrat-extra-light">APACIONADO(A)S POR LA TECNOLOGÍA</h6>
                                <br>
                                <div>
                                    <img class="responsive-img" src="img/icons/apasionado.png" alt="APASIONADOS" width="75" height="75">
                                </div>
                            </div>
                            <div class="col s12 m12 l9 xl9">
                                <br>
                                <p class="texto-gris texto-justificado">Creemos en lo nuevo, en el cambio constante y nos apasiona la tecnología.
                                    Nuestra capacidad de adaptación, sin traicionar nuestros principios, forma parte del listado
                                    de retos que nos permitimos encarar todos los días. No cesamos de buscar la mejora continua
                                    en nuestros servicios, procesos y sistemas. Conocemos nuestras fortalezas y las optimizamos.
                                    Amamos estar a la vanguardia..
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l12 xl12">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3 center-align">
                                <h6 class="texto-gris montserrat-extra-light">VERSÁTILES</h6>
                                <br>
                                <div>
                                    <img class="responsive-img" src="img/icons/versa.png" alt="VERSÁTILES" width="75" height="75">
                                </div>
                            </div>
                            <div class="col s12 m12 l9 xl9">
                                <br>
                                <p class="texto-gris texto-justificado">Nuestra capacidad de adaptación, sin traicionar nuestros años de experiencia, forman parte del
                                    listado de retos que nos permitimos encarar todos los días.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m12 l12 xl12">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3 center-align">
                                <h6 class="texto-gris montserrat-extra-light">MINUCIOSO(A)S</h6>
                                <br>
                                <div>
                                    <img class="responsive-img" src="img/icons/minu.png" alt="MINUCIOSOS" width="75" height="75">
                                </div>
                            </div>
                            <div class="col s12 m12 l9 xl9">
                                <br>
                                <p class="texto-gris texto-justificado">La búsqueda de la perfección en los detalles más pequeños y en los retos más grandes es guía de
                                    nuestra labor diaria.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12 xl12">
                        <div class="row">
                            <div class="col s12 m12 l3 xl3 center-align">
                                <h6 class="texto-gris montserrat-extra-light">CON PASIÓN POR LAS VENTAS Y ATENCIÓN AL CLIENTE</h6>
                                <br>
                                <div>
                                    <img class="responsive-img" src="img/icons/conpa.png" alt="CON PASIÓN" width="75" height="75">
                                </div>
                            </div>
                            <div class="col s12 m12 l9 xl9">
                                <br>
                                <p class="texto-gris texto-justificado">La infraestructura moderna que brinda un estatus acogedor y moderno a nuestros clientes hace el
                                    contraste perfecto con la imagen de nuestros asesores y asesoras de servicio, quienes se deben al
                                    compromiso con las diferentes marcas  para proyectar la  imagen corporativa que durante muchos
                                    años se ha construido, es por ello que nuestro personal cumple con las expectativas y percepción de
                                    nuestros clientes y busca el enfoque de marca de esta unidad de negocio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider teal">
            </div>

        @include('sections.ubicaciones')
        </div>
@stop