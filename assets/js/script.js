$(document).ready(function(){

  // Raiz
  var environment = "development";

  if (environment == "development") {
    var raiz = "http://localhost/politizeesocialize/";
  } else {
    raiz = "https://www.politizeesocialize.com/";
  }

  /*
  *   Abrir o menu
  */
  $(".abrir-menu").click(function(){

      $(".modal").fadeIn("slow");

  });

  /*
  *   Carregar mais jogos
  */
  $(".esconde").hide();

  $("#load-more-jogos").on("click", function(){

    $(".esconde").show();

    $(".carregar-mais-jogos").hide();

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

  /*
  * Carregar mais videos recentes
  */
  var recentes = 0;

  document.onload = load_recentes();

  $(".recentes-load-more").on("click", function(){

    load_recentes();

  });

  function load_recentes(){

    recentes++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_recentes',
      data:{recentes:recentes},
      success:function(result){
        $(".recentes-videos").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre política
  */
  var politica = 0;

  document.onload = load_politica();

  $(".politica-load-more").on("click", function(){

    load_politica();

  });

  function load_politica(){

    politica++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_politica',
      data:{politica:politica},
      success:function(result){
        $(".recentes-politica").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre televisão
  */
  var televisao = 0;

  document.onload = load_televisao();

  $(".televisao-load-more").on("click", function(){

    load_televisao();

  });

  function load_televisao(){

    televisao++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_televisao',
      data:{televisao:televisao},
      success:function(result){
        $(".caixa-dos-videos-televisao").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre esportes
  */
  var esportes = 0;

  document.onload = load_esportes();

  $(".esportes-load-more").on("click", function(){

    load_esportes();

  });

  function load_esportes(){

    esportes++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_esportes',
      data:{esportes:esportes},
      success:function(result){
        $(".caixa-dos-videos-esportes").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre economia
  */
  var economia = 0;

  document.onload = load_economia();

  $(".economia-load-more").on("click", function(){

    load_economia();

  });

  function load_economia(){

    economia++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_economia',
      data:{economia:economia},
      success:function(result){
        $(".caixa-dos-videos-economia").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre saúde
  */
  var saude = 0;

  document.onload = load_saude();

  $(".saude-load-more").on("click", function(){

    load_saude();

  });

  function load_saude(){

    saude++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_saude',
      data:{saude:saude},
      success:function(result){
        $(".caixa-dos-videos-saude").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre educação
  */
  var educacao = 0;

  document.onload = load_educacao();

  $(".educacao-load-more").on("click", function(){

    load_educacao();

  });

  function load_educacao(){

    educacao++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_educacao',
      data:{educacao:educacao},
      success:function(result){
        $(".caixa-dos-videos-educacao").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre música
  */
  var musica = 0;

  document.onload = load_musica();

  $(".musica-load-more").on("click", function(){

    load_musica();

  });

  function load_musica(){

    musica++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_musica',
      data:{musica:musica},
      success:function(result){
        $(".caixa-dos-videos-musica").append(result);
      }
    });

  }

  /*
  * Carregar mais videos sobre games
  */
  var games = 0;

  document.onload = load_games();

  $(".games-load-more").on("click", function(){

    load_games();

  });

  function load_games(){

    games++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_games',
      data:{games:games},
      success:function(result){
        $(".caixa-dos-videos-games").append(result);
      }
    });

  }

  /*
  * Carregar os lances em tempo real do jogo
  */
  setInterval(load_lances,5000);

  function load_lances(){

    var url = $("#url").val();

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_lances',
      data:{url:url},
      success:function(result){
        $("#lances_jogo").html(result);
      }
    });

  }

  /*
  * Carregar o status do jogo
  */
  setInterval(load_status_jogo,5000);

  function load_status_jogo(){

    var url = $("#url").val();

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_status_jogo',
      dataType:'json',
      data:{url:url},
      success:function(result){
        $(".status-jogo p").html(result.status_jogo);
      }
    });

  }

  /*
  * Carregar o placar ao vivo
  */
  setInterval(load_placar,5000);

  function load_placar(){

    var url = $("#url").val();

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_placar',
      data:{url:url},
      success:function(result){
        $("#placar_ao_vivo").html(result);
      }
    });

  }

  /*
  * Carregar mais resultados
  */
  var resultados = 1;

  // Pega o título da pesquisa
  var titulo = $("#titulo").val();

  $("#load-more-results").on("click", function(){

    load_more_results();

  });

  function load_more_results(){

    resultados++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_resultados',
      data:{resultados:resultados, titulo:titulo},
      success:function(result){
        $(".todas-postagens").append(result);
      }
    });

  }

  /*
  * Carregar mais postagens do colunista
  */
  var posts_colunista = 0;

  // Pega o nome do usuário
  var nome = $("#nome").val();

  document.onload = load_more_posts_colunista();

  $(".load-more-posts-colunista").on("click", function(){

    load_more_posts_colunista();

  });

  function load_more_posts_colunista(){

    posts_colunista++;

    $.ajax({
      type:'POST',
      url:raiz+'ajax/load_posts_colunista',
      data:{posts_colunista:posts_colunista, nome:nome},
      success:function(result){
        $(".colunista-postagens").append(result);
      }
    });

  }

});