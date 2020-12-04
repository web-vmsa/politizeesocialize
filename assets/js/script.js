$(document).ready(function(){

  /*
  *  Slideshow Main
  */
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slideshow-item");
    var dots = document.getElementsByClassName("slide-dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slide-dot-active", "");
    }
    slides[slideIndex-1].style.display = "flex";
    dots[slideIndex-1].className += " slide-dot-active";
  }

  $("#passa-slide").on('click', function(){

    plusSlides(+1);

  });

  $(".slide-dot").on('click', function(){

    n = $(this).data("id");

    currentSlide(n);

  });


  /*
  *  Modifica topo
  */
  $( window ).scroll(function() {
    
    if ($(this).scrollTop() > 200){

      $('.some').css({visibility:"hidden"});
      $('.modifica').html("POLITIZE E SOCIALIZE");
      $('.topo').fadeIn("slow").css({position:"fixed", top:"0", width:"100%", paddingLeft:"0", paddingRight:"0", zIndex:"3"});

    } else {
      $('.some').css({visibility:"visible"});
      $('.modifica').html("POLITIZE E SOCIALIZE");
      $('.topo').css({position:"relative", top:"none", width:"auto", paddingLeft:"60px", paddingRight:"60px", zIndex:"1"}); 
    }

  });


  /*
  *   Slideshow Colunistas
  */
  var slideColunistas = 1;
  showSlidesColunistas(slideColunistas);

  // Next/previous controls
  function plusSlidesColunistas(n) {
    showSlidesColunistas(slideColunistas += n);
  }

  // Thumbnail image controls
  function currentSlideColunistas(n) {
    showSlidesColunistas(slideColunistas = n);
  }

  function showSlidesColunistas(n) {
    var i;
    var slidesColunistas = document.getElementsByClassName("slide-colunistas");
    var dotsColunistas = document.getElementsByClassName("slide-dot-secao");
    if (n > slidesColunistas.length) {slideColunistas = 1}
    if (n < 1) {slideColunistas = slidesColunistas.length}
    for (i = 0; i < slidesColunistas.length; i++) {
        slidesColunistas[i].style.display = "none";
    }
    for (i = 0; i < dotsColunistas.length; i++) {
        dotsColunistas[i].className = dotsColunistas[i].className.replace(" slide-dot-secao-active", "");
    }
    slidesColunistas[slideColunistas-1].style.display = "flex";
    dotsColunistas[slideColunistas-1].className += " slide-dot-secao-active";
  }

  $("#passa-colunista").on('click', function(){

    plusSlidesColunistas(-1);

  });

  $("#volta-colunista").on('click', function(){

    plusSlidesColunistas(+1);

  });

  $(".slide-dot-secao").on('click', function(){

    n = $(this).data("id");

    currentSlideColunistas(n);

  });


  /*
  *   Slideshow seção esportes
  */
  var slideCarousel = 1;
  showSlidesCarousel(slideCarousel);

  // Next/previous controls
  function plusSlidesCarousel(n) {
    showSlidesCarousel(slideCarousel += n);
  }

  // Thumbnail image controls
  function currentSlideCarousel(n) {
    showSlidesCarousel(slideCarousel = n);
  }

  function showSlidesCarousel(n) {
    var i;
    var slidesCarousel = document.getElementsByClassName("carousel-slide");
    var dotsCarousel = document.getElementsByClassName("slide-dot-carousel");
    if (n > slidesCarousel.length) {slideCarousel = 1}
    if (n < 1) {slideCarousel = slidesCarousel.length}
    for (i = 0; i < slidesCarousel.length; i++) {
        slidesCarousel[i].style.display = "none";
    }
    for (i = 0; i < dotsCarousel.length; i++) {
        dotsCarousel[i].className = dotsCarousel[i].className.replace(" slide-dot-carousel-active", "");
    }
    slidesCarousel[slideCarousel-1].style.display = "flex";
    dotsCarousel[slideCarousel-1].className += " slide-dot-carousel-active";
  }

  $("#passa-carousel").on('click', function(){

      plusSlidesCarousel(-1);

    });

    $("#volta-carousel").on('click', function(){

      plusSlidesCarousel(+1);

    });

    $(".slide-dot-carousel").on('click', function(){

      n = $(this).data("id");

      currentSlideCarousel(n);

    });

  /*
  *   Slideshow Colunistas da seção de esportes
  */
  var ColunistasEsportes = 1;
  showColunistasEsportes(ColunistasEsportes);

  // Next/previous controls
  function plusColunistasEsportes(n) {
    showColunistasEsportes(ColunistasEsportes += n);
  }

  // Thumbnail image controls
  function currentColunistasEsportes(n) {
    showColunistasEsportes(ColunistasEsportes = n);
  }

  function showColunistasEsportes(n) {
    var i;
    var slidesColunistasEsportes = document.getElementsByClassName("slide-colunistas-esportes");
    var dotsColunistasEsportes = document.getElementsByClassName("slide-dot-secao-esportes");
    if (n > slidesColunistasEsportes.length) {ColunistasEsportes = 1}
    if (n < 1) {ColunistasEsportes = slidesColunistasEsportes.length}
    for (i = 0; i < slidesColunistasEsportes.length; i++) {
        slidesColunistasEsportes[i].style.display = "none";
    }
    for (i = 0; i < dotsColunistasEsportes.length; i++) {
        dotsColunistasEsportes[i].className = dotsColunistasEsportes[i].className.replace(" slide-dot-secao-active", "");
    }
    slidesColunistasEsportes[ColunistasEsportes-1].style.display = "flex";
    dotsColunistasEsportes[ColunistasEsportes-1].className += " slide-dot-secao-active";
  }

  $("#passa-colunista-esportes").on('click', function(){

    plusColunistasEsportes(-1);

  });

  $("#volta-colunista-esportes").on('click', function(){

    plusColunistasEsportes(+1);

  });

  $(".slide-dot-secao-esportes").on('click', function(){

    n = $(this).data("id");

    currentColunistasEsportes(n);

  });

  /*
  *   Abrir o menu
  */
  $(".abrir-menu").click(function(){

      $(".modal").fadeIn("slow");

  });

  /*
  *   Fechar o menu
  */
  $(".fechar-menu").click(function(){

      $(".modal").fadeOut("slow");

  });

  /*
  *   Abrir caixa de pesquisa
  */
  $(".pesquisar").click(function(){

      $(".modal").fadeIn("slow");
      $("#pesquisar").focus();

  });

});