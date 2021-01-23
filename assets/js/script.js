$(document).ready(function(){

  // Raiz
  var environment = "development";

  if (environment == "development") {
    var raiz = "http://localhost/politizeesocialize/";
  } else {
    var raiz = "http://localhost/politizeesocialize/";
  }

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

  /*
  * Carregar mais vídeos do rodapé
  */
  var init = 0;

  document.onload = load_more_videos();

  $("#load-more-videos").on("click", function(){

    load_more_videos();

  });

  function load_more_videos(){

    init++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax',
      data:{init:init},
      success:function(result){
        $(".caixa-videos").append(result);
      }
    });

  }

  /*
  * Formulário da Newsletter
  */
  $("#form_newsletter").submit(function(e){

    e.preventDefault();

    var email = $("#email").val();

    if (email == "") {
      $("#form_newsletter button").html("PREENCHA SEU E-MAIL!");
    } else {
      $.ajax({
        type:'POST',
        url:raiz+'ajax/newsletter',
        data:{email:email},
        success:function(result){
          if (result == 1) {
            $("#form_newsletter button").html("USUÁRIO JÁ CADASTRADO!");
          } else {
            $("#form_newsletter button").html("CADASTRADO REALIZADO!");
          }
        }
      });
    }

  });

   /*
  * Formulário da Newsletter
  */
  $("#form_newsletter_maior").submit(function(e){

    e.preventDefault();

    var email = $("#email_maior").val();

    if (email == "") {
      $("#form_newsletter_maior button").html("PREENCHA SEU E-MAIL!");
    } else {
      $.ajax({
        type:'POST',
        url:raiz+'ajax/newsletter',
        data:{email:email},
        success:function(result){
          if (result == 1) {
            $("#form_newsletter_maior button").html("USUÁRIO JÁ CADASTRADO!");
          } else {
            $("#form_newsletter_maior button").html("CADASTRADO REALIZADO!");
          }
        }
      });
    }

  });

   /*
  * Formulário da Newsletter
  */
  $("#form_newsletter_rodape").submit(function(e){

    e.preventDefault();

    var email = $("#email_rodape").val();

    if (email == "") {
      $("#email_rodape").val("Preencha seu e-mail!");
    } else {
      $.ajax({
        type:'POST',
        url:raiz+'ajax/newsletter',
        data:{email:email},
        success:function(result){
          if (result == 1) {
            $("#email_rodape").val("Usuário já cadastrado!");
          } else {
            $("#email_rodape").val("Cadastro realizado!");
          }
        }
      });
    }

  });

  /*
  * Carregar mais colunistas
  */
  var inicio = 0;

  document.onload = load_more();

  $("#load-more").on("click", function(){

    load_more();

  });

  function load_more(){

    inicio++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_colunistas',
      data:{inicio:inicio},
      success:function(result){
        $("#resultado_colunistas").append(result);
      }
    });

  }

  /*
  * Carregar mais postagens
  */
  var postagens = 0;

  document.onload = load_more_posts();

  $("#load-more-posts").on("click", function(){

    load_more_posts();

  });

  function load_more_posts(){

    postagens++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_postagens',
      data:{postagens:postagens},
      success:function(result){
        $("#resultado_postagens").append(result);
      }
    });

  }

});