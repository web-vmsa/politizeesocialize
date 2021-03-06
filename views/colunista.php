<?php 

	$redes_sociais = json_decode($colunista['social']);

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Colunista <?php echo $colunista['nome']; ?></title>
	<meta name="title" content="Politize e socialize - Colunista <?php echo $colunista['nome']; ?>">
	<meta name="description" content="Tudo sobre o colunista <?php echo $colunista['nome']; ?> na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Política, Bolsonaro, Brasília, Sergio Moro">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>colunas/colunista/<?php echo $colunista['nome']; ?>">
	<meta property="og:title" content="Politize e socialize - Colunista <?php echo $colunista['nome']; ?>">
	<meta property="og:description" content="Tudo sobre o colunista <?php echo $colunista['nome']; ?> na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>colunas/colunista/<?php echo $colunista['nome']; ?>">
	<meta property="twitter:title" content="Politize e socialize - Colunista <?php echo $colunista['nome']; ?>">
	<meta property="twitter:description" content="Tudo sobre o colunista <?php echo $colunista['nome']; ?> na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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

	<!-- Nome do usuário -->
	<input type="hidden" id="nome" name="nome" value="<?php echo $colunista['nome']; ?>">

	<!-- Modal -->
	<div class="modal">
		<!-- Menu -->
		<header class="menu">
			<div class="item-menu conteudo-left fechar-menu">
				<img onclick="ativaSlides(+1);" alt="Menu icon" src="<?php echo BASE_URL; ?>assets/images/close.svg">
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
	<section class="tarja-categoria tarja-categoria-<?php echo $categoria['nome']; ?>">
		<p><?php echo mb_strtoupper(utf8_encode($categoria['nome_normal'])); ?></p>
	</section>

	<!-- Topo do perfil do Colunista -->
	<section class="topo-perfil-colunista">
		<div class="dados-colunista-perfil">
			<div class="foto-colunista-perfil">
				<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $colunista['foto']; ?>">
			</div>
			<h2 class="cursor-default"><?php echo $colunista['nome']; ?></h2>
		</div>
		<div class="redes-sociais-colunista-perfil">
			<a href="<?php echo $redes_sociais->facebook; ?>"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
			<a href="<?php echo $redes_sociais->instagram; ?>"><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
			<a href="<?php echo $redes_sociais->linkedin; ?>"><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
			<a href="<?php echo $redes_sociais->youtube; ?>"><img src="<?php echo BASE_URL; ?>assets/images/youtube.svg"></a>
		</div>
	</section>

	<!-- Bio -->
	<section class="bio-colunista">
		<p class="cursor-default">“<?php echo $colunista['biografia']; ?>” — <?php echo $colunista['nome']; ?></p>
	</section>

	<!-- Postagens do Colunista -->
	<section class="topo-secao destaques-topo-secao">
		<div class="item-topo-secao"></div>
		<div class="item-topo-secao">
			<p class="cursor-default">POSTAGENS</p>
		</div>
		<div class="item-topo-secao justify-right">
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
		</div>
	</section>

	<!-- Todas as postagens -->
	<section class="todas-postagens colunista-postagens todas-postagens-<?php echo $categoria['nome']; ?>">
		
	</section>

	<!-- Carregar mais -->
	<div class="carregar-mais">
		<button class="load-more-posts-colunista" id="load-more-posts">
			CARREGAR MAIS
		</button>
	</div>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Política -->
	<section class="topo-secao politica-topo-secao">
		<a href="<?php echo BASE_URL; ?>home/categoria/<?php echo $categoria['id']; ?>">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p><?php echo mb_strtoupper(utf8_encode($categoria['nome_normal'])); ?></p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Política -->
	<section class="colunistas-secao colunistas-secao-<?php echo $categoria['nome']; ?>">

		<?php
			foreach($colunistas as $dados):
		?>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/<?php echo $dados['nome']; ?>">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['foto']; ?>">
				</div>
				<h2><?php echo mb_strtoupper($dados['nome']); ?></h2>
				<p>"<?php echo mb_strtoupper($dados['biografia']); ?>"</p>
			</div>
		</a>

		<?php endforeach; ?>

		<div class="borda-colunista-secao"></div>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

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
		<p>POLITIZE E SOCIALIZE. TODOS OS DIREITOS RESERVADOS. @2017-@<?php echo date("Y"); ?></p>
	</section>
</body>
</html>