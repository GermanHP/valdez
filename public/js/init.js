(function($){
  $(function(){

    $('.button-collapse').sideNav();

    $('.parallax').parallax();

    $('.modal').modal();

      // start carrousel
      $('.carousel.carousel-slider').carousel({
          fullWidth: true,
          indicators: false
      });



      // move next carousel
      $('.moveNextCarousel').click(function(e){
          e.preventDefault();
          e.stopPropagation();
          $('.carousel').carousel('next');
      });

      // move prev carousel
      $('.movePrevCarousel').click(function(e){
          e.preventDefault();
          e.stopPropagation();
          $('.carousel').carousel('prev');
      });

    $('.slider').slider({
        indicators: false,
        height: 550
    });

      // Next slide
      $('.next-slide').slider('next');

    $('ul.tabs').tabs({
        swipeable: true,
        height: 550
    });

    $('select').material_select();

    $('.collapsible').collapsible();

    //funcion para animar al hacer clic en una etiqueta a
      $('a#anchorCentros').click(function(){
          $('html, body').animate({
              scrollTop: $( $(this).attr('href') ).offset().top
          }, 800);
          return false;
      });
      //fin de la funcion para animar

  }); // end of document ready
})(jQuery); // end of jQuery name space

//script para realizar animación de scrollfire
var options = [ {
    selector: '#text-fade-in',
    offset: 400,
    callback: function (el) {
        Materialize.fadeInImage($(el))
    }
} ];
Materialize.scrollFire(options);