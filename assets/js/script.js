$(document).ready(function(){

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