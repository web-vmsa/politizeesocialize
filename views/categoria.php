<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Tudo sobre <?php echo $categoria['nome']; ?></title>
	<meta name="title" content="Politize e socialize - Tudo sobre <?php echo $categoria['nome']; ?>">
	<meta name="description" content="<?php echo utf8_encode($categoria['descricao']); ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php echo utf8_encode($categoria['tags']); ?>">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>home/categoria/<?php echo $categoria['nome']; ?>">
	<meta property="og:title" content="Politize e socialize - Tudo sobre <?php echo $categoria['nome']; ?>">
	<meta property="og:description" content="<?php echo utf8_encode($categoria['descricao']); ?>">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>home/categoria/<?php echo $categoria['nome']; ?>">
	<meta property="twitter:title" content="Politize e socialize - Tudo sobre <?php echo $categoria['nome']; ?>">
	<meta property="twitter:description" content="<?php echo utf8_encode($categoria['descricao']); ?>">
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
	<?php if($categoria['nome'] == "recentes"): ?>
	<section class="tarja-categoria tarja-categoria-politica">
		<p><?php echo mb_strtoupper($categoria['nome']); ?></p>
	</section>
	<?php else: ?>
	<section class="tarja-categoria tarja-categoria-<?php echo $categoria['nome']; ?>">
		<p><?php echo mb_strtoupper($categoria['nome']); ?></p>
	</section>
	<?php endif; ?>

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

		<?php 
			foreach($slide as $dados):

			$arquivo_prop = json_decode($dados['arquivo_prop']);
		?>

		<div class="slideshow-categoria-item fade">

			<?php if($arquivo_prop->tipo == "imagem"): ?>

			<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

			<?php elseif($arquivo_prop->tipo == "video"): ?>

			<video>
				<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
			</video>

			<?php endif; ?>

			<div class="slideshow-categoria-item-conteudo">
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

	</main>

	<!-- Recentes -->
	<section class="recentes">
		<div class="topo-recentes">
			<p class="cursor-default">RECENTES</p>
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
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
	<section class="politica destaques-<?php echo $categoria['nome']; ?>">
		<div class="noticias-maiores">

			<?php 
				foreach($maiores_destaque as $dados):

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
				foreach($menores_destaque as $dados):

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

				<div id="resultado_colunistas">

				</div>

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
			<div class="lado-postagens-todas destaques-<?php echo $categoria['nome']; ?>">

				<div id="resultado_postagens">

				</div>

				<button id="load-more-posts">CARREGAR MAIS</button>
			</div>
		</div>
	</section>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>RECEBA AS NOVIDADES DE ESPORTES<br>NO SEU E-MAIL</p>

		<form method="POST" id="form_newsletter_maior" autocomplete="off">
			<input type="text" name="email" id="email_maior" placeholder="SEU MELHOR E-MAIL">
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

			</div>

			<button id="load-more-videos">CARREGAR MAIS</button>
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