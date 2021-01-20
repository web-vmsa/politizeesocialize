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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>">
	<meta property="og:title" content="Politize e socialize - Política em um só lugar">
	<meta property="og:description" content="Economia, esportes, política, finanças e televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>">
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

			var slideIndex = [1,1];
			var slideId = ["slideshow-item", "carousel-slide"]
			var dotId = ["slide-dot", "slide-dot-carousel"]
			showDivs(1, 0);
			showDivs(1, 1);

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

			$(".slide-dot").on("click", function(){

				slideCurrent = $(this).data("slide");
				dotCurrent = $(this).data("id");
				currentDivs(dotCurrent, slideCurrent);

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

	<!-- Slideshow -->
	<main class="slideshow">

		<?php 
			foreach($noticias_slide as $dados):

			$arquivo_prop = json_decode($dados['arquivo_prop']);
		?>

		<!-- Itens -->
		<div class="slideshow-item fade">
			<?php if($arquivo_prop->tipo == "imagem"): ?>

			<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

			<?php elseif($arquivo_prop->tipo == "video"): ?>

			<video>
				<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
			</video>

			<?php endif; ?>

			<div class="slideshow-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
					<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
					<p>POR <?php echo mb_strtoupper($dados['nome']); ?> | <?php echo $dados['dia']; ?> DE 

				<?php
					switch ($dados['mes']) {
				        case "01":    $mes = "JANEIRO";     break;
				        case "02":    $mes = "FEVEREIRO";   break;
				        case "03":    $mes = "MARÇO";       break;
				        case "04":    $mes = "ABRIL";       break;
				        case "05":    $mes = "MAIO";        break;
				        case "06":    $mes = "JUNHO";       break;
				        case "07":    $mes = "JULHO";       break;
				        case "08":    $mes = "AGOSTO";      break;
				        case "09":    $mes = "SETEMBRO";    break;
				        case "10":    $mes = "OUTUBRO";     break;
				        case "11":    $mes = "NOVEMBRO";    break;
				        case "12":    $mes = "DEZEMBRO";    break; 
				 }
				 
				 echo $mes;
				?>


				<br>DE <?php echo $dados['ano']; ?></p>
				</a>
			</div>
		</div>

		<?php endforeach; ?>

		<!--

		<div class="slideshow-item fade">
			<img src="https://exame.com/wp-content/uploads/2019/01/parlamento-portugal.jpg?quality=70&strip=info&w=1024">
			<div class="slideshow-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</a>
			</div>
		</div>
		<div class="slideshow-item fade">
			<img src="https://www.iol.pt/multimedia/oratvi/multimedia/imagem/id/5bd9cf950cf252f8f40b239e/1024">
			<div class="slideshow-item-conteudo">
				<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</a>
			</div>
		</div>

		-->

		<!-- Itens -->

		<div class="slideshow-controls">
			<div class="slide-button">
				<img data-id="0" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow.svg">
			</div>
			<div class="slide-dots">
				<div data-slide="0" data-id="1" class="slide-dot"></div>
				<div data-slide="0" data-id="2" class="slide-dot"></div>
				<div data-slide="0" data-id="3" class="slide-dot"></div>
			</div>
		</div>
	</main>

	<!-- Recentes -->
	<section class="recentes">
		<div class="topo-recentes">
			<a href="<?php echo BASE_URL; ?>home/categoria/recentes">
				<p>RECENTES</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="noticias-recentes">

			<?php 
				foreach($noticia_maior as $dados):

				$arquivo_prop = json_decode($dados['arquivo_prop']);
			?>

			<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
				<div class="noticia-maior">

					<?php if($arquivo_prop->tipo == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($arquivo_prop->tipo == "video"): ?>

					<video>
						<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
					</video>

					<?php endif; ?>

					<div class="noticia-maior-conteudo">
						<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
						<p>POR <?php echo mb_strtoupper($dados['nome']); ?> | <?php echo $dados['dia']; ?> DE 

						<?php
							switch ($dados['mes']) {
						        case "01":    $mes = "JANEIRO";     break;
						        case "02":    $mes = "FEVEREIRO";   break;
						        case "03":    $mes = "MARÇO";       break;
						        case "04":    $mes = "ABRIL";       break;
						        case "05":    $mes = "MAIO";        break;
						        case "06":    $mes = "JUNHO";       break;
						        case "07":    $mes = "JULHO";       break;
						        case "08":    $mes = "AGOSTO";      break;
						        case "09":    $mes = "SETEMBRO";    break;
						        case "10":    $mes = "OUTUBRO";     break;
						        case "11":    $mes = "NOVEMBRO";    break;
						        case "12":    $mes = "DEZEMBRO";    break; 
						 }
						 
						 echo $mes;
						?>


						<br>DE <?php echo $dados['ano']; ?></p>
					</div>
				</div>
			</a>

			<?php endforeach; ?>

			<div class="noticias-menores">

				<?php 
					foreach($noticias_menores as $dados):

					$arquivo_prop = json_decode($dados['arquivo_prop']);
				?>

				<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
					<div class="noticia-menor">
						
						<?php if($arquivo_prop->tipo == "imagem"): ?>

						<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

						<?php elseif($arquivo_prop->tipo == "video"): ?>

						<video>
							<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
						</video>

						<?php endif; ?>

						<div class="noticia-menor-conteudo">
							<p>POR <?php echo mb_strtoupper($dados['nome']); ?> | <?php echo $dados['dia']; ?> DE 

							<?php
								switch ($dados['mes']) {
							        case "01":    $mes = "JANEIRO";     break;
							        case "02":    $mes = "FEVEREIRO";   break;
							        case "03":    $mes = "MARÇO";       break;
							        case "04":    $mes = "ABRIL";       break;
							        case "05":    $mes = "MAIO";        break;
							        case "06":    $mes = "JUNHO";       break;
							        case "07":    $mes = "JULHO";       break;
							        case "08":    $mes = "AGOSTO";      break;
							        case "09":    $mes = "SETEMBRO";    break;
							        case "10":    $mes = "OUTUBRO";     break;
							        case "11":    $mes = "NOVEMBRO";    break;
							        case "12":    $mes = "DEZEMBRO";    break; 
							 }
							 
							 echo $mes;
							?>


							<br>DE <?php echo $dados['ano']; ?></p>
							<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
						</div>
					</div>
				</a>

				<?php endforeach; ?>

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

	<!-- Política -->
	<section class="topo-secao politica-topo-secao">
		<a href="<?php echo BASE_URL; ?>home/categoria/politica">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>POLÍTICA</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Recentes política -->
	<section class="politica">
		<div class="noticias-maiores">

			<?php 
				foreach($maiores_politica as $dados):

				$arquivo_prop = json_decode($dados['arquivo_prop']);
			?>

			<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
				<div class="noticia-maior-politica">

					<?php if($arquivo_prop->tipo == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($arquivo_prop->tipo == "video"): ?>

					<video>
						<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
					</video>

					<?php endif; ?>

					<div class="noticia-maior-conteudo">
						<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
						<p>POR <?php echo mb_strtoupper($dados['nome']); ?> | <?php echo $dados['dia']; ?> DE 

							<?php
								switch ($dados['mes']) {
							        case "01":    $mes = "JANEIRO";     break;
							        case "02":    $mes = "FEVEREIRO";   break;
							        case "03":    $mes = "MARÇO";       break;
							        case "04":    $mes = "ABRIL";       break;
							        case "05":    $mes = "MAIO";        break;
							        case "06":    $mes = "JUNHO";       break;
							        case "07":    $mes = "JULHO";       break;
							        case "08":    $mes = "AGOSTO";      break;
							        case "09":    $mes = "SETEMBRO";    break;
							        case "10":    $mes = "OUTUBRO";     break;
							        case "11":    $mes = "NOVEMBRO";    break;
							        case "12":    $mes = "DEZEMBRO";    break; 
							 }
							 
							 echo $mes;
							?>


							<br>DE <?php echo $dados['ano']; ?></p>
					</div>
				</div>
			</a>

			<?php endforeach; ?>

		</div>

		<div class="noticias-menores-politica">

			<?php 
				foreach($menores_politica as $dados):

				$arquivo_prop = json_decode($dados['arquivo_prop']);
			?>

			<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
				<div class="noticia-menor-politica">
					
					<?php if($arquivo_prop->tipo == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($arquivo_prop->tipo == "video"): ?>

					<video>
						<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
					</video>

					<?php endif; ?>

					<div class="noticia-menor-conteudo-politica">
						<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
						<p>POR <?php echo mb_strtoupper($dados['nome']); ?> | <?php echo $dados['dia']; ?> DE 

							<?php
								switch ($dados['mes']) {
							        case "01":    $mes = "JANEIRO";     break;
							        case "02":    $mes = "FEVEREIRO";   break;
							        case "03":    $mes = "MARÇO";       break;
							        case "04":    $mes = "ABRIL";       break;
							        case "05":    $mes = "MAIO";        break;
							        case "06":    $mes = "JUNHO";       break;
							        case "07":    $mes = "JULHO";       break;
							        case "08":    $mes = "AGOSTO";      break;
							        case "09":    $mes = "SETEMBRO";    break;
							        case "10":    $mes = "OUTUBRO";     break;
							        case "11":    $mes = "NOVEMBRO";    break;
							        case "12":    $mes = "DEZEMBRO";    break; 
							 }
							 
							 echo $mes;
							?>


							<br>DE <?php echo $dados['ano']; ?></p>
					</div>
				</div>
			</a>

			<?php endforeach; ?>

		</div>
	</section>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Televisão -->
	<section class="topo-secao televisao-topo-secao">
		<a href="<?php echo BASE_URL; ?>home/categoria/politica">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>TELEVISÃO</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Notícias recentes Televisão -->
	<section class="televisao">
		<div class="lado-noticias">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-maior">
					<img src="https://uploads.metropoles.com/wp-content/uploads/2020/09/01085635/anitta-56-1024x683.jpg">
					<div class="noticia-maior-conteudo">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://i.uai.com.br/IEvZhk8IbLMyhraHAfZQWoIGV4c=/750x0/imgsapp2.uai.com.br/app/noticia_133890394703/2020/11/27/265437/20201129133043275275e.jpg">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>

			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="noticia-menor-politica">
					<img src="https://static.poder360.com.br/2020/06/jn-868x644.jpg">
					<div class="noticia-menor-conteudo-politica">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
					</div>
				</div>
			</a>
		</div>
		<div class="lado-videos">
			<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
				<div class="video">
					<div class="topo-video">
						<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
						<p>20 DE OUT | 2020</p>
					</div>
					<video id="my-video" class="video-js vjs-theme-city" poster="https://www.vagalume.com.br/ludmilla/images/ludmilla.jpg" preload="auto" data-setup="{}">
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
					<video id="my-video" class="video-js vjs-theme-city" poster="https://static1.purepeople.com.br/articles/7/28/05/97/@/3187348-marina-ruy-barbosa-e-comparada-com-model-624x600-1.jpg" preload="auto" data-setup="{}">
						 <source src="<?php echo BASE_URL; ?>users/videos/video.mp4" type="video/mp4" />
					</video>
					<div class="conteudo-video">
						<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
						<p>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</p>
					</div>
				</div>
			</a>
		</div>
	</section>

	<!-- Colunistas 
	<section class="colunistas televisao-secao">
		<div class="topo-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas">
				<p>COLUNISTAS</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right-purple.svg">
			</a>
		</div>
		
		<div class="slide-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://www.esporteinterativo.com.br/__export/1598051660157/sites/esporteinterativo/img/2020/08/21/agif20081919353737_1_crop1598051658952.jpg_2060162980.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://bolavip.com/__export/1606738512090/sites/bolavip/img/2020/11/30/rodrigo_caioo_crop1606738476353.jpg_1902800913.jpg">
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
		</div>
		
		<div class="slide-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://jpimg.com.br/uploads/2020/10/brenner-rubens-chiri-spfc.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://www.esporteinterativo.com.br/__export/1598051660157/sites/esporteinterativo/img/2020/08/21/agif20081919353737_1_crop1598051658952.jpg_2060162980.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://bolavip.com/__export/1606738512090/sites/bolavip/img/2020/11/30/rodrigo_caioo_crop1606738476353.jpg_1902800913.jpg">
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
		</div>
		
		<div class="slide-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://www.esporteinterativo.com.br/__export/1598051660157/sites/esporteinterativo/img/2020/08/21/agif20081919353737_1_crop1598051658952.jpg_2060162980.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://bolavip.com/__export/1606738512090/sites/bolavip/img/2020/11/30/rodrigo_caioo_crop1606738476353.jpg_1902800913.jpg">
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
		</div>
		
		<div class="slide-colunistas-controls">
			<img data-id="2" class="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow.svg">
			<div class="slide-dots-secao">
				<div data-slide="2" data-id="1" class="slide-dot-secao"></div>
				<div data-slide="2" data-id="2" class="slide-dot-secao"></div>
				<div data-slide="2" data-id="3" class="slide-dot-secao"></div>
			</div>
			<img data-id="2" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow-black.svg">
		</div>
	</section>
-->

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
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
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
					<img data-id="1" class="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow-white.svg">
					<div class="slide-dots-carousel">
						<div data-slide="1" data-id="1" class="slide-dot-carousel"></div>
						<div data-slide="1" data-id="2" class="slide-dot-carousel"></div>
						<div data-slide="1" data-id="3" class="slide-dot-carousel"></div>
					</div>
					<img data-id="1" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow.svg">
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

	<!-- Tarjas abaixo da seção esportes 
	<div class="tarjas">
		<div class="tarja-esquerda"></div>
		<div class="tarja-direita"></div>
	</div>
-->

	<!-- Colunistas
	<section class="colunistas esportes-secao">
		<div class="topo-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas">
				<p>COLUNISTAS</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right-yellow.svg">
			</a>
		</div>
		
		<div class="slide-colunistas-esportes">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://img.estadao.com.br/fotos/crop/1200x1200/resources/jpg/8/0/1579647009808.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/EdmundoVasco2008.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://futebolatino.lance.com.br/wp-content/uploads/2020/03/jornal-espanhol-relembra-historias-e-declaracoes-polemicas-de-romario-Futebol-Latino-25-03.jpeg">
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
		</div>
		
		<div class="slide-colunistas-esportes">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://jpimg.com.br/uploads/2020/10/brenner-rubens-chiri-spfc.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://www.esporteinterativo.com.br/__export/1598051660157/sites/esporteinterativo/img/2020/08/21/agif20081919353737_1_crop1598051658952.jpg_2060162980.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://bolavip.com/__export/1606738512090/sites/bolavip/img/2020/11/30/rodrigo_caioo_crop1606738476353.jpg_1902800913.jpg">
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
		</div>
		
		<div class="slide-colunistas-esportes">
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://www.esporteinterativo.com.br/__export/1598051660157/sites/esporteinterativo/img/2020/08/21/agif20081919353737_1_crop1598051658952.jpg_2060162980.jpg">
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
			<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
				<div class="colunista">
					<div class="foto-colunista">
						<img src="https://bolavip.com/__export/1606738512090/sites/bolavip/img/2020/11/30/rodrigo_caioo_crop1606738476353.jpg_1902800913.jpg">
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
		</div>
		
		<div class="slide-colunistas-controls">
			<img data-id="3" class="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow.svg">
			<div class="slide-dots-secao">
				<div data-slide="3" data-id="1" class="slide-dot-secao-esportes"></div>
				<div data-slide="3" data-id="2" class="slide-dot-secao-esportes"></div>
				<div data-slide="3" data-id="3" class="slide-dot-secao-esportes"></div>
			</div>
			<img data-id="3" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow-black.svg">
		</div>
	</section>
-->

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
					<div class="fb-page" data-href="https://www.facebook.com/Politize-e-socialize-748330938697380/" data-tabs="timeline" data-width="270" data-height="480" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
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