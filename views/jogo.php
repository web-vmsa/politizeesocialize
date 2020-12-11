<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Política em um só lugar</title>
	<meta name="title" content="Politize e socialize - Política em um só lugar">
	<meta name="description" content="Economia, esportes, política, finanças e televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Política, economia, site de notícias, televisão, novelas, esportes, Flamengo, Corinthians, jogos de futebol">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="article">
	<meta property="article:author" content="Autor do artigo">
	<meta property="article:section" content="Seção do artigo">
	<meta property="article:tag" content="Tags do artigo">
	<meta property="article:published_time" content="date_time">
	<meta property="og:url" content="<?php echo BASE_URL; ?>jogos/jogo/{{url}}">
	<meta property="og:title" content="Politize e socialize - Política em um só lugar">
	<meta property="og:description" content="Economia, esportes, política, finanças e televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>jogos/jogo/{{url}}">
	<meta property="twitter:title" content="Politize e socialize - Política em um só lugar">
	<meta property="twitter:description" content="Economia, esportes, política, finanças e televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon.png" type="image/x-icon" />

	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.5.1.min.js"></script>

	<!-- Script -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

	<!-- Video js -->
	<link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
	<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="https://vjs.zencdn.net/7.10.2/video.js"></script>
	<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />
</head>
<body>
	<!-- Facebook plugin -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="8w1uRG64"></script>

	<!-- SlidesShow -->
	<script type="text/javascript">
		$(document).ready(function(){

			var slideIndex = [1,1,1,1];
			var slideId = ["carousel-slide"]
			var dotId = ["slide-dot-carousel"]
			showDivs(1, 0);

			function plusDivs(n, no) {
			  showDivs(slideIndex[no] += n, no);
			}

			function currentDivs(n, no) {
			  showDivs(slideIndex[no] = n, no);
			}

			function showDivs(n, no) {
			  var i;
			  var x = document.getElementsByClassName(slideId[no]);
			  var d = document.getElementsByClassName(dotId[no]);
			  if (n > x.length) {slideIndex[no] = 1}
			  if (n < 1) {slideIndex[no] = x.length}
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  for (i = 0; i < d.length; i++) {
			    	d[i].className = d[i].className.replace(" slide-dot-active", "");
			   }
			  x[slideIndex[no]-1].style.display = "flex";  
			  d[slideIndex[no]-1].className += " slide-dot-active";
			}

			$(".passa-slide").on("click", function(){

				slideN = $(this).data("id");

				plusDivs(1, slideN);

			});

			$(".volta-slide").on("click", function(){

				slideX = $(this).data("id");

				plusDivs(-1, slideX);

			});

			$(".slide-dot-carousel").on("click", function(){

				dataSlide = $(this).data("slide");
				dotCurrent = $(this).data("id");
				currentDivs(dotCurrent, dataSlide);

			});
		  
		});
	</script>

	<!-- Modal -->
	<div class="modal">
		<!-- Menu -->
		<header class="menu">
			<div class="item-menu conteudo-left fechar-menu">
				<img alt="Menu icon" src="<?php echo BASE_URL; ?>assets/images/close.svg">
				<p>MENU</p>
			</div>
			<div class="item-menu">
				<p>POLITIZE E SOCIALIZE</p>
			</div>
			<div class="item-menu conteudo-right">
				<form method="POST" action="<?php echo BASE_URL; ?>home/resultados/{{pesquisa}}">
					<input type="text" id="pesquisar" name="pesquisar" placeholder="PESQUISAR...">
					<button>
						<img src="<?php echo BASE_URL; ?>assets/images/search.svg">
					</button>
				</form>
			</div>
		</header>

		<!-- Conteúdo do menu -->
		<nav class="conteudo-menu">
			<div class="topo-recentes">
				<p>NAVEGAÇÃO</p>
			</div>

			<div class="itens-menu">
				<a href="<?php echo BASE_URL; ?>">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_home.png">
						<div class="card-texto">
							<p>INICIO</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_escritor.png">
						<div class="card-texto">
							<p>SEJA ESCRITOR</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="https://pt-br.facebook.com/pages/category/Community/Politize-e-socialize-748330938697380/">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_facebook.png">
						<div class="card-texto">
							<p>FACEBOOK</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
			</div>

			<!-- Categorias -->
			<div class="topo-recentes">
				<p>CATEGORIAS</p>
			</div>

			<div class="itens-menu">
				<a href="<?php echo BASE_URL; ?>home/categoria/esportes">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_esportes.png">
						<div class="card-texto">
							<p>ESPORTES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/politica">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_politica.png">
						<div class="card-texto">
							<p>POLÍTICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/saude">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_saude.png">
						<div class="card-texto">
							<p>SAÚDE</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/economia">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_economia.png">
						<div class="card-texto">
							<p>ECONOMIA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/games">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_games.png">
						<div class="card-texto">
							<p>GAMES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/televisao">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_televisao.png">
						<div class="card-texto">
							<p>TELEVISÃO</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>colunas">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_colunas.png">
						<div class="card-texto">
							<p>COLUNAS</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/musica">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_musica.png">
						<div class="card-texto">
							<p>MÚSICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/educacao">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_educacao.png">
						<div class="card-texto">
							<p>EDUCAÇÃO</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
			</div>
		</nav>
	</div>

	<!-- Header -->
	<header class="topo">
		<div class="item-topo some justify-left abrir-menu">
			<img alt="Menu icon" src="<?php echo BASE_URL; ?>assets/images/menu.svg">
			<p>MENU</p>
		</div>
		<div class="item-topo">
			<p class="modifica">28 DE OUTUBRO DE 2020</p>
		</div>
		<div class="item-topo some justify-right pesquisar">
			<p>PESQUISAR</p>
			<img alt="Search icon" src="<?php echo BASE_URL; ?>assets/images/search.svg">
		</div>
	</header>

	<!-- Tarja fixa da seção -->
	<section class="tarja-categoria tarja-categoria-esportes">
		<p>ESPORTES</p>
	</section>

	<!-- Placar do jogo -->
	<div class="postagem-jogo">

		<p class="placar-p">Placar</p>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-com-borda fundo-branco">
				<div class="status-jogo">
					<p>Ao vivo</p>
				</div>
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://rceit.com.br/wp-content/uploads/2019/05/gr%C3%AAmio-escudo-1.png">
					<p>Grêmio</p>
					<h2><span>1-1</span></h2>
					<p>Santos</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/9/92/LogoSantosFC.png">
				</div>
				<div class="data-oficial">
					<p>12/08/2020 12h30</p>
				</div>
			</div>
		</a>
	</div>

	<!-- Borda do placar -->
	<div class="borda-bottom-placar"></div>

	<!-- Dados do artigo -->
	<div class="dados-artigo">
		<p><span>18 de novembro de 2020</span></p>

		<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem de mer agur ipsum.</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros nibh, dapibus sit amet dictum et, auctor ac massa.</p>

		<div class="autor-share">
			<div class="lado-autor">
				<div class="foto-autor">
					<img src="https://rd1.com.br/wp-content/uploads/2019/07/20190729-cleber-machado-globo-1200x812.jpg">
				</div>
				<p>Por <a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">Maicon Azevedo</a> — Politize e socialize</p>
			</div>
			<div class="lado-share">
				<p>Share this —</p>

				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo BASE_URL; ?>jogos/jogo/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
				<a href="https://api.whatsapp.com/send?text=<?php echo BASE_URL; ?>jogos/jogo/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.svg"></a>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL; ?>jogos/jogo/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
			</div>
		</div>
	</div>

	<?php
		$type_video = "video";
	?>

	<!-- Arquivo principal do artigo -->
	<?php if($type_video == "imagem"): ?>
	<div class="file-artigo">
		<img src="https://img.r7.com/images/pr-jair-bolsonaro-1500-03122020151129411">
	</div>
	<?php else: ?>
	<div class="file-artigo">
		<video id="video-artigo" class="video-js" poster="https://images.daznservices.com/di/library/GOAL/47/6a/para-matheus-henrique-gremio-santos-libertadores-09122020_8l94xkiipsp91sh6t2xba1ov5.jpg?t=1318531478&quality=100" controls preload="auto" data-setup="{}">
			<source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
		</video>
	</div>
	<?php endif; ?>

	<!-- Descrição da imagem do artigo -->
	<div class="descricao-arquivo">
		<p>Lorem ipsum <strong>dolor sit amet</strong>, consectetur dit dolor.</p>
	</div>

	<!-- Postagem -->
	<div class="postagem">
		<h2>(Lance a lance &#9917;)</h2>

		<h3>&#9201; 90' minutos</h3>
		<p>Fim de papo! Grêmio e Santos ficam com o 1-1 no placar, agora o Santos decide em casa pelas quartas de final da Libertadores.</p>

		<h3>&#129349; GOOOOOOOOOOOOOOOOOOOLLLLLLL! Do Grêmiooooooooooo</h3>
		<p>Diego Souza converte o pênalti e deixa tudo igual na Arena do Grêmio</p>

		<img src="https://i.ytimg.com/vi/wK41ZWrSYhs/hqdefault.jpg">

		<h3>É PÊNALTIIIII!</h3>
		<p>O Grêmio tem a chance de deixar tudo igual no Placar, Diego Souza vai para a marca da Cal.</p>

		<h3>&#9201; 90'Minutos passados, 1 a 0</h3>

		<h3>EXPULSOOO! &#128213;</h3>

		<p>Pituca que fazia grande partida é expulso</p>

		<h3>&#9201; 45' minutos</h3>
		<p>Fim do primeiro tempo, Santos 1-0 Grêmio</p>

		<h3>&#129349; GOOOOOOOOOOOOOOOOLLLLLLLLLL! É do SANTOOOOOSS</h3>

		<p>Kaio Jorge abre o marcador para o peixe aos 36' minutos de jogo.</p>

		<img src="https://pbs.twimg.com/media/DW63xM-W0AA9Nd0.jpg">

		<h3>&#9201; 01' minutos</h3>
		<p>Inicio de jogo, Grêmio e Santos pela Libertadores</p>

		<div class="linha"></div>
	</div>

	<!-- Comentários -->
	<div class="facebook-comments">
		<h2>Comentários</h2>

		<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="10" data-width="100%"></div>
	</div>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Esportes -->
	<section class="topo-secao esportes-topo-secao">
		<a href="<?php echo BASE_URL; ?>home/categoria/esportes">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>ESPORTES</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right-yellow.svg">
			</div>
		</a>
	</section>

	<!-- Notícias recentes Esportes -->
	<section class="esportes">
		<!-- Jogos -->
		<div class="futebol">
			<div class="jogos">
				<div class="topo-recentes">
					<a href="<?php echo BASE_URL; ?>jogos/finalizados">
						<p>Resultados</p>
						<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
					</a>
				</div>
				<!-- Resultados -->
				<div class="jogos-divs">
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>FLA 1-1 RSC</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>SPFC 3-1 BAH</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>VAS 1-4 CEA</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>INT 0-0 ATH</p>
					</div></a>
				</div>
			</div>
			<div class="divisor"></div>
			<div class="jogos">
				<div class="topo-recentes">
					<a href="<?php echo BASE_URL; ?>jogos">
						<p>Próximos jogos</p>
						<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
					</a>
				</div>
				<!-- Jogos -->
				<div class="jogos-divs">
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>FLA 1-1 RSC</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>SPFC 3-1 BAH</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>VAS 1-4 CEA</p>
					</div></a>
					<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}"><div class="jogo-div">
						<p>INT 0-0 ATH</p>
					</div></a>
				</div>
			</div>
		</div>
		<!-- -->

		<!-- Notícias -->
		<div class="noticias-menores-politica">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://m.extra.globo.com/incoming/24751825-daf-ba9/w488h275-PROP/90486867_es-rio-de-janeiro-rj-13112020treino-do-flamengono-ninho-do-uruburogerio-c.jpg">
					<div class="noticia-menor-conteudo-politica">
						<div class="jogo-descricao">
							<p>FLAMENGO E SANTOS</p>
						</div>
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>20 DE OUT | 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://jpimg.com.br/uploads/2020/09/marinho-participou-de-nove-gols-em-nove-jogos-do-santos-no-brasileirao.jpg">
					<div class="noticia-menor-conteudo-politica">
						<div class="jogo-descricao">
							<p>FLAMENGO E SANTOS</p>
						</div>
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>20 DE OUT | 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://cdn.diariodolitoral.com.br/upload/dn_noticia/2020/09/marinho_2.jpg">
					<div class="noticia-menor-conteudo-politica">
						<div class="jogo-descricao">
							<p>FLAMENGO E SANTOS</p>
						</div>
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>20 DE OUT | 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://uploads.metropoles.com/wp-content/uploads/2020/11/09180535/Rogerio-Ceni-Flamengo-600x400.jpg">
					<div class="noticia-menor-conteudo-politica">
						<div class="jogo-descricao">
							<p>FLAMENGO E SANTOS</p>
						</div>
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>20 DE OUT | 2020</p>
					</div>
				</div>
			</a>
		</div>

		<!-- Carousel e vídeos -->
		<div class="carousel-videos">
			<div class="lado-carousel">
				<div class="carousel-controls">
					<img data-id="0" class="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow-white.svg">
					<div class="slide-dots-carousel">
						<div data-slide="0" data-id="1" class="slide-dot-carousel"></div>
						<div data-slide="0" data-id="2" class="slide-dot-carousel"></div>
						<div data-slide="0" data-id="3" class="slide-dot-carousel"></div>
					</div>
					<img data-id="0" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow.svg">
				</div>

				<div class="carousel-slide fade">
					<img src="https://sportbuzz.uol.com.br/media/_versions/gettyimages-1160655989_widelg.jpg">
					<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
						<div class="slide-carousel-conteudo">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>Lorem Ipsum dolor Sit Amet, consectetur adipscing</p>
						</div>
					</a>
				</div>
				<div class="carousel-slide fade">
					<img src="https://esbrasil.com.br/wp-content/uploads/2019/08/Daniel_site.jpg">
					<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
						<div class="slide-carousel-conteudo">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>Lorem Ipsum dolor Sit Amet, consectetur adipscing</p>
						</div>
					</a>
				</div>
				<div class="carousel-slide fade">
					<img src="https://conteudo.imguol.com.br/c/esporte/41/2020/11/28/neymar-faz-gol-de-penalti-na-partida-psg-x-bordeaux-pelo-campeonato-frances-1606600195230_v2_450x337.jpg">
					<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
						<div class="slide-carousel-conteudo">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>Lorem Ipsum dolor Sit Amet, consectetur adipscing</p>
						</div>
					</a>
				</div>
			</div>
			<div class="videos-esportes">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video-esporte">
						<div class="lado-video">
							<video id="video-esporte" class="video-js vjs-theme-city" poster="https://f.i.uol.com.br/fotografia/2020/10/01/16016045635f768bd3d96b2_1601604563_3x2_md.jpg" preload="auto" data-setup="{}">
							 	<source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
							</video>
							<div class="video-conteudo">
								<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
								<p>20 DE OUT | 2020</p>
							</div>
						</div>
						<div class="lado-descricao">
							<h2>ROGERIO CENI</h2>
							<div class="link-video">
								<p>Lorem Ipsum</p>
								<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
							</div>
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video-esporte">
						<div class="lado-video">
							<video id="video-esporte" class="video-js vjs-theme-city" poster="https://jpimg.com.br/uploads/2020/10/brenner-rubens-chiri-spfc.jpg" preload="auto" data-setup="{}">
							 	<source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
							</video>
							<div class="video-conteudo">
								<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
								<p>20 DE OUT | 2020</p>
							</div>
						</div>
						<div class="lado-descricao">
							<h2>ROGERIO CENI</h2>
							<div class="link-video">
								<p>Lorem Ipsum</p>
								<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- Tarjas abaixo da seção esportes -->
	<div class="tarjas">
		<div class="tarja-esquerda"></div>
		<div class="tarja-direita"></div>
	</div>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>ASSINE A NEWSLETTER E RECEBA AS NOVIDADES DE<br>ESPORTES NO SEU E-MAIL</p>

		<form method="POST" id="form_newsletter">
			<input type="text" name="email" id="email" placeholder="SEU MELHOR E-MAIL">
			<button type="submit">ASSINAR    >></button>
		</form>
	</section>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Seções -->
	<nav class="secoes">
		<a href="<?php echo BASE_URL; ?>home/categoria/televisao"><div class="secao right">TELEVISÃO</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/politica"><div class="secao right">POLÍTICA</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/esportes"><div class="secao right">ESPORTES</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/economia"><div class="secao right">ECONOMIA</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/saude"><div class="secao">SAÚDE</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/educacao"><div class="secao right">EDUCAÇÃO</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/musica"><div class="secao right">MÚSICA</div></a>
		<a href="<?php echo BASE_URL; ?>colunas"><div class="secao right">COLUNAS</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/games"><div class="secao">GAMES</div></a>
	</nav>

	<!-- Vídeos -->
	<section class="videos-rodape">
		<div class="videos">
			<div class="topo-recentes">
				<a href="<?php echo BASE_URL; ?>videos">
					<p>VÍDEOS</p>
					<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
				</a>
			</div>

			<div class="caixa-videos">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video">
						<div class="topo-video">
							<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
							<p>20 DE OUT | 2020</p>
						</div>
						<video id="my-video" class="video-js vjs-theme-city" poster="https://static.independent.co.uk/2020/12/04/07/w_56539538.jpg?width=640" preload="auto" data-setup="{}">
							 <source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
						</video>
						<div class="conteudo-video">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</p>
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video">
						<div class="topo-video">
							<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
							<p>20 DE OUT | 2020</p>
						</div>
						<video id="my-video" class="video-js vjs-theme-city" poster="https://thumbnails.texastribune.org/C-grfyuIcbith-IMQzQKF0ShUpw=/850x570/smart/filters:quality(75)/https://static.texastribune.org/media/files/20ddd1716338a3c77a767d8833a40208/Joe%20Biden%20MS%20TT.jpg" preload="auto" data-setup="{}">
							 <source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
						</video>
						<div class="conteudo-video">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</p>
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video">
						<div class="topo-video">
							<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
							<p>20 DE OUT | 2020</p>
						</div>
						<video id="my-video" class="video-js vjs-theme-city" poster="https://s2.glbimg.com/GZ9JHX1nNNAbFJGcpW2zqRD3uCA=/0x0:1135x757/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2019/Q/d/KwXr58SNiJMaYBvNcAiQ/felipeararuna.jpg" preload="auto" data-setup="{}">
							 <source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
						</video>
						<div class="conteudo-video">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</p>
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="video">
						<div class="topo-video">
							<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
							<p>20 DE OUT | 2020</p>
						</div>
						<video id="my-video" class="video-js vjs-theme-city" poster="https://cdn.jornaldebrasilia.com.br/wp-content/uploads/2019/04/brasileirao.jpg" preload="auto" data-setup="{}">
							 <source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
						</video>
						<div class="conteudo-video">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</p>
						</div>
					</div>
				</a>

				<button id="load-more-videos">CARREGAR MAIS</button>
			</div>
		</div>
		<!-- Widgets -->
		<div class="asides">
			<!-- Redes sociais -->
			<aside class="widget">
				<div class="topo-recentes">
					<p class="cursor-default">REDES SOCIAIS</p>
					<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
				</div>

				<div class="corpo-widget">
					<a href="https://www.instagram.com/politizeesocialize/"><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
					<a href="https://www.youtube.com/channel/UCfgaSsfSpQQx-h-5qhMR7ag/featured"><img src="<?php echo BASE_URL; ?>assets/images/youtube.svg"></a>
					<a href="https://pt-br.facebook.com/pages/category/Community/Politize-e-socialize-748330938697380/"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
				</div>
			</aside>

			<!-- Newsletter lateral -->
			<aside class="widget-newsletter">
				<div class="topo-recentes">
					<p class="cursor-default">ASSINE A NEWSLETTER</p>
					<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
				</div>

				<div class="corpo-widget-newsletter">
					<form method="POST" id="form_newsletter">
						<input type="text" name="email" id="email" placeholder="E-mail">
						<button type="submit">ASSINAR</button>
					</form>
				</div>
			</aside>

			<!-- Facebook lateral -->
			<aside class="widget-facebook">
				<div class="topo-recentes">
					<a href="<?php echo BASE_URL; ?>">
						<p>FACEBOOK</p>
						<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
					</a>
				</div>

				<div class="corpo-widget-facebook">
					<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="270" data-height="480" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
				</div>
			</aside>
		</div>
	</section>

	<!-- Rodapé -->
	<footer class="rodape">
		<nav class="menu-rodape">
			<a href="<?php echo BASE_URL; ?>colunas">COLUNAS</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/economia">ECONOMIA</a>	
			<a href="<?php echo BASE_URL; ?>home/categoria/esportes">ESPORTES</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/games">GAMES</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/politica">POLÍTICA</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/saude">SAÚDE</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/televisao">TELEVISÃO</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/educacao">EDUCAÇÃO</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/musica">MÚSICA</a>
			<a href="<?php echo BASE_URL; ?>">SEJA ESCRITOR</a>
			<a href="<?php echo BASE_URL; ?>">HOMEPAGE</a>
		</nav>
		<div class="item-rodape">
			<h3>SEJA UM ESCRITOR</h3>
			<p>FAÇA PARTE DA EQUIPE DE ESCRITORES DO PORTAL</p>
			<a href="<?php echo BASE_URL; ?>">> SAIBA MAIS</a>
		</div>
		<div class="item-rodape">
			<h3>NEWSLETTER</h3>
			<p>NÃO PERCA NADA DE NOVO DO PORTAL, ASSINE A NEWSLETTER</p>
			<form method="POST" id="form_newsletter_rodape">
				<input type="text" name="email" id="email_rodape" placeholder="E-mail">
				<button type="submit">
					<img src="<?php echo BASE_URL; ?>assets/images/right-red.svg">
				</button>
			</form>
		</div>
	</footer>

	<!-- Copyright -->
	<section class="copyright">
		<p>POLITIZE E SOCIALIZE. TODOS OS DIREITOS RESERVADOS. @2017-@2020</p>
	</section>
</body>
</html>