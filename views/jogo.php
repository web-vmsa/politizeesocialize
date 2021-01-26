<?php $arquivo_prop = json_decode($jogo['arquivo_prop']); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title><?php echo $jogo['titulo']; ?></title>
	<meta name="title" content="<?php echo $jogo['titulo']; ?>">
	<meta name="description" content="<?php echo $jogo['descricao']; ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php echo $jogo['tags']; ?>">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="<?php echo $jogo['nome']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="article">
	<meta property="article:author" content="<?php echo $jogo['nome']; ?>">
	<meta property="article:section" content="<?php echo $jogo['categoria']; ?>">
	<meta property="article:tag" content="<?php echo $jogo['tags']; ?>">
	<meta property="article:published_time" content="<?php echo $jogo['data']; ?>">
	<meta property="og:url" content="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>">
	<meta property="og:title" content="<?php echo $jogo['titulo']; ?>">
	<meta property="og:description" content="<?php echo $jogo['descricao']; ?>">

	<?php if($arquivo_prop->tipo == "imagem"): ?>

	<meta property="og:image" content="<?php echo ADMIN_URL; ?>users/images/<?php echo $jogo['arquivo']; ?>">

	<?php elseif($arquivo_prop->tipo == "video"): ?>

	<meta property="og:video" content="<?php echo ADMIN_URL; ?>users/videos/<?php echo $jogo['arquivo']; ?>" />

	<?php endif; ?>

	<!-- Twitter -->
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>">
	<meta property="twitter:title" content="<?php echo $jogo['titulo']; ?>">
	<meta property="twitter:description" content="<?php echo $jogo['descricao']; ?>">

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

	<!-- Passa url -->
	<input id="url" type="hidden" name="url" value="<?php echo $jogo['url']; ?>">

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

	<!-- Placar do jogo -->
	<div class="postagem-jogo">

		<?php $jogo_prop = json_decode($jogo['jogo_prop']); ?>

		<p class="placar-p">Placar</p>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>">
			<div class="jogo-placar jogo-com-borda fundo-branco">
				<div class="status-jogo">
					<p>Ao vivo</p>
				</div>
				<div class="campeonato-jogo">
					<p><?php echo $jogo_prop->campeonato; ?> - <?php echo $jogo_prop->fase; ?></p>
				</div>
				<div class="placar">
					<img src="<?php echo ADMIN_URL; ?>jogos/escudo/<?php echo $jogo_prop->time_casa; ?>">
					<p><?php echo $jogo_prop->time_casa; ?></p>
					<div id="placar_ao_vivo">
						<h2><span>1-1</span></h2>
					</div>
					<p><?php echo $jogo_prop->time_fora; ?></p>
					<img src="<?php echo ADMIN_URL; ?>jogos/escudo/<?php echo $jogo_prop->time_fora; ?>">
				</div>
				<div class="data-oficial">
					<p><?php echo substr(str_replace(":", "h", $jogo['data']), 0,-3);?></p>
				</div>
			</div>
		</a>
	</div>

	<!-- Borda do placar -->
	<div class="borda-bottom-placar"></div>

	<!-- Dados do artigo -->
	<div class="dados-artigo">
		<p><span><?php echo $jogo['dia']; ?> de <?php
					switch ($jogo['mes']) {
				        case "01":    $mes = "janeiro";     break;
				        case "02":    $mes = "fevereiro";   break;
				        case "03":    $mes = "março";       break;
				        case "04":    $mes = "abril";       break;
				        case "05":    $mes = "maio";        break;
				        case "06":    $mes = "junho";       break;
				        case "07":    $mes = "julho";       break;
				        case "08":    $mes = "agosto";      break;
				        case "09":    $mes = "setembro";    break;
				        case "10":    $mes = "outubro";     break;
				        case "11":    $mes = "novembro";    break;
				        case "12":    $mes = "dezembro";    break; 
				 }
				 
				 echo $mes;
				?> de <?php echo $jogo['ano']; ?></span></p>

		<h2><?php echo $jogo['titulo']; ?></h2>

		<p><?php echo $jogo['descricao']; ?></p>

		<div class="autor-share">
			<div class="lado-autor">
				<div class="foto-autor">
					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $jogo['foto']; ?>">
				</div>
				<p>Por <a href="<?php echo BASE_URL; ?>colunas/colunista/<?php echo $jogo['nome']; ?>"><?php echo $jogo['nome']; ?></a> — Politize e socialize</p>
			</div>
			<div class="lado-share">
				<p>Share this —</p>

				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
				<a href="https://api.whatsapp.com/send?text=<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.svg"></a>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
			</div>
		</div>
	</div>

	<!-- Arquivo principal do artigo -->
	<?php if($arquivo_prop->tipo == "imagem"): ?>

	<div class="file-artigo">
		<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $jogo['arquivo']; ?>">
	</div>

	<?php else: ?>

	<div class="file-artigo">
		<video id="video-artigo" class="video-js" controls preload="auto" data-setup="{}">
			<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $jogo['arquivo']; ?>" type="video/mp4" />
		</video>
	</div>

	<?php endif; ?>

	<!-- Descrição da imagem do artigo -->
	<div class="descricao-arquivo">
		<p><?php echo $arquivo_prop->legenda; ?></p>
	</div>

	<!-- Postagem -->
	<div class="postagem">
		<h2>(Lance a lance &#9917;)</h2>

		<div id="lances_jogo">
			
		</div>

		<div class="linha"></div>
	</div>

	<!-- Comentários -->
	<div class="facebook-comments">
		<h2>Comentários</h2>

		<div class="fb-comments" data-href="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $jogo['url']; ?>" data-numposts="10" data-width="100%"></div>
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

					<?php 
						foreach($resultados as $dados): 

						$propriedades_jogo = json_decode($dados['jogo_prop']);

						$alcunha_casa = new Jogos();
						$alcunha_casa = $alcunha_casa->get_alcunha($propriedades_jogo->time_casa);

						$alcunha_fora = new Jogos();
						$alcunha_fora = $alcunha_fora->get_alcunha($propriedades_jogo->time_fora);
					?>

					<a href="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $dados['url']; ?>"><div class="jogo-div">
						<p><?php echo $alcunha_casa['alcunha']; ?> <?php echo $dados['placar']; ?> <?php echo $alcunha_fora['alcunha']; ?></p>
					</div></a>

					<?php endforeach; ?>

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

					<?php 
						foreach($agendados as $dados): 

						$propriedades_jogo = json_decode($dados['jogo_prop']);

						$alcunha_casa = new Jogos();
						$alcunha_casa = $alcunha_casa->get_alcunha($propriedades_jogo->time_casa);

						$alcunha_fora = new Jogos();
						$alcunha_fora = $alcunha_fora->get_alcunha($propriedades_jogo->time_fora);
					?>

					<a href="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $dados['url']; ?>"><div class="jogo-div">
						<p><?php echo $alcunha_casa['alcunha']; ?> <?php echo $dados['placar']; ?> <?php echo $alcunha_fora['alcunha']; ?></p>
					</div></a>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<!-- -->

		<!-- Notícias -->
		<div class="noticias-menores-politica">

			<?php 
				foreach($noticias_jogos as $dados):

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
						<div class="jogo-descricao">

							<?php 
								$tags = explode(",", $dados['tags']);
							?>

							<p><?php echo mb_strtoupper($tags[0]); ?> E <?php echo mb_strtoupper($tags[1]); ?></p>
						</div>
						<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
						<p><?php echo $dados['dia']; ?> DE <?php
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
							?> | <?php echo $dados['ano']; ?></p>
					</div>
				</div>
			</a>

			<?php endforeach; ?>

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

				<?php 
					foreach($slide_esportes as $dados):

					$arquivo_prop = json_decode($dados['arquivo_prop']);
				?>

				<div class="carousel-slide fade">
					
					<?php if($arquivo_prop->tipo == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($arquivo_prop->tipo == "video"): ?>

					<video>
						<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4">
					</video>

					<?php endif; ?>

					<a href="<?php echo BASE_URL; ?>jogos/jogo/<?php echo $dados['url']; ?>">
						<div class="slide-carousel-conteudo">
							<h2><?php echo mb_strtoupper($dados['titulo']); ?></h2>
							<p><?php echo $dados['descricao']; ?></p>
						</div>
					</a>
				</div>
				
				<?php endforeach; ?>
				
			</div>
			<div class="videos-esportes">

				<?php
					foreach($videos_esportes as $dados):

					$tags = explode(",", $dados['tags']);
				?>

				<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
					<div class="video-esporte">
						<div class="lado-video">
							<video id="video-esporte" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 	<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $dados['arquivo']; ?>" type="video/mp4" />
							</video>
							<div class="video-conteudo">
								<img src="<?php echo BASE_URL; ?>assets/images/play-button.svg">
								<p><?php echo $dados['dia']; ?> DE <?php
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
							 
							 echo substr($mes, 0,-2);
							?> | <?php echo $dados['ano']; ?></p>
							</div>
						</div>
						<div class="lado-descricao">
							<h2><?php echo mb_strtoupper($tags[0]); ?></h2>
							<div class="link-video">
								<p><?php echo $tags[1]; ?></p>
								<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
							</div>
						</div>
					</div>
				</a>
				
				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<!-- Tarjas abaixo da seção esportes 
	<div class="tarjas">
		<div class="tarja-esquerda"></div>
		<div class="tarja-direita"></div>
	</div>
-->

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>ASSINE A NEWSLETTER E RECEBA AS NOVIDADES DE<br>ESPORTES NO SEU E-MAIL</p>

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
					<form method="POST" id="form_newsletter" autocomplete="off">
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
			<form method="POST" id="form_newsletter_rodape" autocomplete="off">
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