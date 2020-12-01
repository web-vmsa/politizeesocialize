$(document).ready(function(){

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


});