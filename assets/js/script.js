$(document).ready(function(){

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

  /*
  *   Scroll suave para Links internos
  */
  $('.secoes a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
    targetOffset = $(id).offset().top;
      
    $('html, body').animate({ 
      scrollTop: targetOffset - 100
    }, 500);
  });

});