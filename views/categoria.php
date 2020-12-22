<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Tudo sobre Esportes</title>
	<meta name="title" content="Politize e socialize - Tudo sobre Esportes">
	<meta name="description" content="Saiba tudo sobre Esportes no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Esportes, Flamengo, Corinthians, Brasileirão, Champions League, FIFA">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>home/categoria/{{categoria}}">
	<meta property="og:title" content="Politize e socialize - Tudo sobre Esportes">
	<meta property="og:description" content="Saiba tudo sobre Esportes no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>home/categoria/{{categoria}}">
	<meta property="twitter:title" content="Politize e socialize - Tudo sobre Esportes">
	<meta property="twitter:description" content="Saiba tudo sobre Esportes no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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

	<!-- Slideshow Principal -->
	<script type="text/javascript">
		
		$(document).ready(function(){

			var slideCount = 1;
			exibiSlide(slideCount);

			function passaSlides(n) {
				exibiSlide(slideCount += n);
			}

			function pulaSlide(n) {
				exibiSlide(slideCount = n);
			}

			function exibiSlide(n){
				var i;
				var slides = document.getElementsByClassName("slideshow-categoria-item");
				var dots = document.getElementsByClassName("slide-dot-categoria");
				if (n > slides.length) {
					slideCount = 1
				}
			    if (n < 1) {
			    	slideCount = slides.length
			    }
			    for (i = 0; i < slides.length; i++) {
			    	slides[i].style.display = "none";
			    }
			    for (i = 0; i < dots.length; i++) {
			    	dots[i].className = dots[i].className.replace(" slide-dot-categoria-active", "");
			    }
			    slides[slideCount-1].style.display = "flex";
			    dots[slideCount-1].className += " slide-dot-categoria-active";
			}

			$("#passa-slide").on('click', function(){

			    passaSlides(+1);

			});

			$("#volta-slide").on('click', function(){

			    passaSlides(-1);

			});

			$(".slide-dot-categoria").on('click', function(){

			    n = $(this).data("id");

			    pulaSlide(n);

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
				<a href="<?php echo BASE_URL; ?>videos">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_videos.png">
						<div class="card-texto">
							<p>VÍDEOS</p>
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

	<!-- Slideshow da categoria -->
	<main class="slideshow-categoria">
		<!-- Controles -->
		<div class="slideshow-categoria-controls">
			<img id="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow-white.svg">
			<div class="slide-dots-categoria">
				<div data-id="1" class="slide-dot-categoria slide-dot-categoria-active"></div>
				<div data-id="2" class="slide-dot-categoria"></div>
				<div data-id="3" class="slide-dot-categoria"></div>
			</div>
			<img id="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow.svg">
		</div>

		<!-- Itens do Slide -->
		<div class="slideshow-categoria-item fade">
			<img src="https://www.konami.com/kde_cms/eu_publish/uploads/pes2019_wt_a_saopaulo-1-1024x576.jpg">
			<div class="slideshow-categoria-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</a>
			</div>
		</div>

		<div class="slideshow-categoria-item fade">
			<img src="https://www.lance.com.br/files/article_main/uploads/2019/12/17/5df92a575b2f2.jpeg">
			<div class="slideshow-categoria-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</a>
			</div>
		</div>

		<div class="slideshow-categoria-item fade">
			<img src="https://noticiasdatv.uol.com.br/media/_versions/artigos/wellington-silva-fluminense-onde-assistir-brasileirao_fixed_large.jpg">
			<div class="slideshow-categoria-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</a>
			</div>
		</div>
	</main>

	<!-- Recentes -->
	<section class="recentes">
		<div class="topo-recentes">
			<p class="cursor-default">RECENTES</p>
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
		</div>

		<div class="noticias-recentes">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-maior">
					<img src="https://noticiasdatv.uol.com.br/media/_versions/artigos/maicon-diego-souza-gremio-onde-assistir-libertadores_fixed_large.jpg">
					<div class="noticia-maior-conteudo">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>
			<div class="noticias-menores">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="noticia-menor">
						<img src="https://sportbuzz.uol.com.br/media/_versions/gettyimages-1229541646_widelg.jpg">
						<div class="noticia-menor-conteudo">
							<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						</div>
					</div>
				</a>

				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="noticia-menor">
						<img src="https://assets.b9.com.br/wp-content/uploads/2019/07/tudo-ou-nada-seleio-amazon.jpg">
						<div class="noticia-menor-conteudo">
							<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

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

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Destaques -->
	<section class="topo-secao destaques-topo-secao">
		<div class="item-topo-secao"></div>
		<div class="item-topo-secao">
			<p class="cursor-default">DESTAQUES</p>
		</div>
		<div class="item-topo-secao justify-right">
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
		</div>
	</section>

	<!-- Recentes -->
	<section class="politica destaques-esportes">
		<div class="noticias-maiores">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-maior-politica">
					<img src="https://s2.glbimg.com/UDPD9jKWz2831nnRnb7-7tmfrqs=/0x0:1280x853/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2019/L/z/RYs7wwTUmALWjqUDS41w/whatsapp-image-2019-09-19-at-00.43.15.jpeg">
					<div class="noticia-maior-conteudo">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-maior-politica">
					<img src="https://colunadofla.com/wp-content/uploads/2020/07/rodrigo-caio.jpg">
					<div class="noticia-maior-conteudo">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>
		</div>

		<div class="noticias-menores-politica">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://www.lance.com.br/files/article_main/uploads/2020/08/29/5f4adc962b03c.jpeg">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://s2.glbimg.com/mngGalithA5ohe3KzGBZp6Zwnlw=/0x0:2048x1152/540x304/smart/https://i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/O/U/FPY20dRwiOAt5VO1ZCBw/50688013266-2d0cdaa7c7-k.jpg">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://conteudo.imguol.com.br/c/esporte/82/2020/12/05/rafael-sobis-comemora-gol-marcado-pelo-cruzeiro-sobre-o-brasil-de-pelotas-no-mineirao-1607217708438_v2_450x337.jpg">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://www.coritiba.com.br/imgview/show/161345/50">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>
		</div>
	</section>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Colunistas -->
	<section class="topo-secao destaques-topo-secao">
		<a href="<?php echo BASE_URL; ?>colunas">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>COLUNISTAS</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas e postagens -->
	<section class="colunistas-categoria">
		<div class="lado-colunistas">
			<div class="topo-recentes">
				<a href="<?php echo BASE_URL; ?>colunas">
					<p>Colunistas</p>
					<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
				</a>
			</div>

			<!-- Colunistas -->
			<div class="lado-colunistas-todos">
				<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
					<div class="lado-colunistas-colunista">
						<div class="foto-colunista">
							<img src="https://thumbs.web.sapo.io/?W=800&H=0&delay_optim=1&epic=NTAxECcfHQfh+jNXETDk3ZQn+0c04rskJ9VJ9aLZtiRo3qjkpAyxT6c2CMAzY2SZspVN5ibUEyzn4ruSwovEHJbiGMbtmw8FONtOLodhNrD8pes=">
						</div>
						<div class="dados-colunista">
							<p>Lorem Ipsum</p>
							<div class="redes-sociais-colunista">
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
							</div>
						</div>
					</div>
				</a>

				<div class="hr-colunista"></div>

				<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
					<div class="lado-colunistas-colunista">
						<div class="foto-colunista">
							<img src="https://conteudo.imguol.com.br/c/esporte/ca/2020/12/01/rogerio-ceni-a-frente-do-flamengo-contra-o-racing-pela-libertadores-1606873342561_v2_450x337.jpg">
						</div>
						<div class="dados-colunista">
							<p>Lorem Ipsum</p>
							<div class="redes-sociais-colunista">
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
							</div>
						</div>
					</div>
				</a>

				<div class="hr-colunista"></div>

				<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
					<div class="lado-colunistas-colunista">
						<div class="foto-colunista">
							<img src="https://www.diariodepernambuco.com.br/static/app/noticia_127983242361/2019/11/21/811387/20191121133348315362u.jpg">
						</div>
						<div class="dados-colunista">
							<p>Lorem Ipsum</p>
							<div class="redes-sociais-colunista">
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
								<a href=""><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
							</div>
						</div>
					</div>
				</a>

				<div class="hr-colunista"></div>

				<button id="load-more">CARREGAR MAIS</button>
			</div>
		</div>
		<div class="lado-postagens">
			<div class="topo-recentes">
				<a href="<?php echo BASE_URL; ?>colunas">
					<p>Postagens</p>
					<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
				</a>
			</div>

			<!-- Postagens recentes -->
			<div class="lado-postagens-todas destaques-esportes">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="noticia-menor-politica">
						<img src="https://www.lance.com.br/files/article_main/uploads/2020/08/29/5f4adc962b03c.jpeg">
						<div class="noticia-menor-conteudo-politica">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
						</div>
					</div>
				</a>

				<div class="hr-postagens"></div>

				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="noticia-menor-politica">
						<img src="https://pbs.twimg.com/media/EogWyRfWMAIU90g.jpg">
						<div class="noticia-menor-conteudo-politica">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
						</div>
					</div>
				</a>

				<div class="hr-postagens"></div>

				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<div class="noticia-menor-politica">
						<img src="https://s2.glbimg.com/vkCxRLzR_FXKmqzxPTPHufEJ-cQ=/0x0:1500x844/540x304/smart/https://i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/Q/z/sNhrseSBS0XDPqOLPlPw/05-12-2020-csa-x-america-mg-ac-6103.jpg">
						<div class="noticia-menor-conteudo-politica">
							<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
							<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
						</div>
					</div>
				</a>

				<div class="hr-postagens"></div>

				<button id="load-more-posts">CARREGAR MAIS</button>
			</div>
		</div>
	</section>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>RECEBA AS NOVIDADES DE ESPORTES<br>NO SEU E-MAIL</p>

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
					<a href="https://pt-br.facebook.com/pages/category/Community/Politize-e-socialize-748330938697380/">
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
			<a href="<?php echo BASE_URL; ?>videos">VÍDEOS</a>
			<a href="<?php echo BASE_URL; ?>">HOMEPAGE</a>
		</nav>
		<div class="item-rodape">
			<h3>SIGA-NOS</h3>
			<p>TAMBÉM TEMOS REDES SOCIAIS, FIQUE POR DENTRO</p>
			<div class="rodape-sociais">
				<a href="https://pt-br.facebook.com/pages/category/Community/Politize-e-socialize-748330938697380/"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
				<a href="https://www.youtube.com/channel/UCfgaSsfSpQQx-h-5qhMR7ag/featured"><img src="<?php echo BASE_URL; ?>assets/images/youtube.svg"></a>
				<a href="https://www.instagram.com/politizeesocialize/"><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
			</div>
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