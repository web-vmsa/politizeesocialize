<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Vídeos</title>
	<meta name="title" content="Politize e socialize - Vídeos">
	<meta name="description" content="Veja todos os Vídeos da Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Política, Vídeos,economia, site de notícias, televisão, novelas, esportes, Flamengo, Corinthians, jogos de futebol">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>videos">
	<meta property="og:title" content="Politize e socialize - Vídeos">
	<meta property="og:description" content="Veja todos os Vídeos da Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>videos">
	<meta property="twitter:title" content="Politize e socialize - Vídeos">
	<meta property="twitter:description" content="Veja todos os Vídeos da Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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
				<form method="GET" autocomplete="off" action="<?php echo BASE_URL; ?>home/resultados">
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
				<a href="<?php echo BASE_URL; ?>home/categoria/3">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_esportes.png">
						<div class="card-texto">
							<p>ESPORTES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/1">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_politica.png">
						<div class="card-texto">
							<p>POLÍTICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/4">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_saude.png">
						<div class="card-texto">
							<p>SAÚDE</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/5">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_economia.png">
						<div class="card-texto">
							<p>ECONOMIA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/6">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_games.png">
						<div class="card-texto">
							<p>GAMES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/2">
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
				<a href="<?php echo BASE_URL; ?>home/categoria/7">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="<?php echo BASE_URL; ?>assets/images/card_musica.png">
						<div class="card-texto">
							<p>MÚSICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/8">
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
			<p class="modifica">
				<?php echo date("d"); ?> DE 

				<?php 
					switch (date("m")) {
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

				DE <?php echo date("Y"); ?></p>
		</div>
		<div class="item-topo some justify-right pesquisar">
			<p>PESQUISAR</p>
			<img alt="Search icon" src="<?php echo BASE_URL; ?>assets/images/search.svg">
		</div>
	</header>

	<!-- Tarja fixa da seção -->
	<section class="tarja-categoria tarja-categoria-colunas">
		<p>VÍDEOS</p>
	</section>

	<!-- Vídeos recentes -->
	<section class="videos-recentes">
		<div class="topo-recentes">
			<p class="cursor-default">RECENTES</p>
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-politica recentes-videos">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more recentes-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Seções -->
	<nav class="secoes">
		<a href="#televisao"><div class="secao right">TELEVISÃO</div></a>
		<a href="#politica"><div class="secao right">POLÍTICA</div></a>
		<a href="#esportes"><div class="secao right">ESPORTES</div></a>
		<a href="#economia"><div class="secao right">ECONOMIA</div></a>
		<a href="#saude"><div class="secao">SAÚDE</div></a>
		<a href="#educacao"><div class="secao right">EDUCAÇÃO</div></a>
		<a href="#musica"><div class="secao right">MÚSICA</div></a>
		<a href="<?php echo BASE_URL; ?>colunas"><div class="secao right">COLUNAS</div></a>
		<a href="#games"><div class="secao">GAMES</div></a>
	</nav>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Política -->
	<section class="videos-recentes" id="politica">
		<div class="topo-recentes topo-recentes-politica">
			<a href="<?php echo BASE_URL; ?>home/categoria/1">
				<p>POLÍTICA</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-politica recentes-politica">
		
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more politica-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Televisão -->
	<section class="videos-recentes" id="televisao">
		<div class="topo-recentes topo-recentes-televisao">
			<a href="<?php echo BASE_URL; ?>home/categoria/2">
				<p>TELEVISÃO</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-televisao">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more televisao-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Esportes -->
	<section class="videos-recentes" id="esportes">
		<div class="topo-recentes topo-recentes-esportes">
			<a href="<?php echo BASE_URL; ?>home/categoria/3">
				<p>ESPORTES</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-esportes">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more esportes-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Economia -->
	<section class="videos-recentes" id="economia">
		<div class="topo-recentes topo-recentes-economia">
			<a href="<?php echo BASE_URL; ?>home/categoria/5">
				<p>ECONOMIA</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-economia">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more economia-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Saúde -->
	<section class="videos-recentes" id="saude">
		<div class="topo-recentes topo-recentes-saude">
			<a href="<?php echo BASE_URL; ?>home/categoria/4">
				<p>SAÚDE</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-saude">

		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more saude-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Educação -->
	<section class="videos-recentes" id="educacao">
		<div class="topo-recentes topo-recentes-educacao">
			<a href="<?php echo BASE_URL; ?>home/categoria/8">
				<p>EDUCAÇÃO</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-educacao">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more educacao-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Música -->
	<section class="videos-recentes" id="musica">
		<div class="topo-recentes topo-recentes-musica">
			<a href="<?php echo BASE_URL; ?>home/categoria/7">
				<p>MÚSICA</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-musica">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more musica-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Vídeos recentes sobre Games -->
	<section class="videos-recentes" id="games">
		<div class="topo-recentes topo-recentes-games">
			<a href="<?php echo BASE_URL; ?>home/categoria/6">
				<p>GAMES</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</a>
		</div>

		<div class="caixa-dos-videos caixa-dos-videos-games">
			
		</div>
	</section>

	<!-- Carregar mais vídeos recentes -->
	<div class="load-more games-load-more">
		<button>CARREGAR MAIS</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>RECEBA OS VÍDEOS DO PORTAL<br>NO SEU E-MAIL</p>

		<form method="POST" id="form_newsletter" autocomplete="off">
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
		<a href="<?php echo BASE_URL; ?>home/categoria/2"><div class="secao right">TELEVISÃO</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/1"><div class="secao right">POLÍTICA</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/3"><div class="secao right">ESPORTES</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/5"><div class="secao right">ECONOMIA</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/4"><div class="secao">SAÚDE</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/8"><div class="secao right">EDUCAÇÃO</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/7"><div class="secao right">MÚSICA</div></a>
		<a href="<?php echo BASE_URL; ?>colunas"><div class="secao right">COLUNAS</div></a>
		<a href="<?php echo BASE_URL; ?>home/categoria/6"><div class="secao">GAMES</div></a>
	</nav>

	<!-- Rodapé -->
	<footer class="rodape">
		<nav class="menu-rodape">
			<a href="<?php echo BASE_URL; ?>colunas">COLUNAS</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/5">ECONOMIA</a>	
			<a href="<?php echo BASE_URL; ?>home/categoria/3">ESPORTES</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/6">GAMES</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/1">POLÍTICA</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/4">SAÚDE</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/2">TELEVISÃO</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/8">EDUCAÇÃO</a>
			<a href="<?php echo BASE_URL; ?>home/categoria/7">MÚSICA</a>
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