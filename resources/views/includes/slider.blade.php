@include('includes.modalsGallery')
    <div class="carousel carousel-slider center " data-indicators="true">
        <div class="container-indicators">
            <div class="right">
                <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator">
                    <i class="material-icons right middle-indicator-text black-text">chevron_right</i>
                </a>
            </div>

            <div class="right" id="previo">
                <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator">
                    <i class="material-icons left  middle-indicator-text black-text">chevron_left</i>
                </a>
            </div>

        </div>
        <div class="carousel-item white-text" href="#one!">
            <img href="#modalGallerySoho" src="img/slider-centros/cascadas.png" alt="CENTRO CASCADAS" class="responsive-img modal-trigger">
        </div>
        <div class="carousel-item white-text" href="#two!">
            <img href="#modalGalleryEscalon" src="img/slider-centros/escalon.png" alt="CENTRO ESCALON" class="responsive-img modal-trigger">
        </div>
        <div class="carousel-item white-text" href="#three!">
            <img href="#modalGalleryMerliot" src="img/slider-centros/merliot.png" alt="CENTRO MERLIOT" class="responsive-img modal-trigger">
        </div>
        <div class="carousel-item white-text" href="#four!">
            <img href="#modalGallerySMiguel" src="img/slider-centros/san-miguel.png" alt="CENTRO SAN MIGUEL" class="responsive-img modal-trigger">
        </div>
    </div>
