<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title><?php echo $opiniao['titulo']; ?></title>
	<meta name="title" content="<?php echo $opiniao['titulo']; ?>">
	<meta name="description" content="<?php echo $opiniao['descricao']; ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php echo $opiniao['tags']; ?>">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="<?php echo $opiniao['nome']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="article">
	<meta property="article:author" content="<?php echo $opiniao['nome']; ?>">
	<meta property="article:section" content="<?php echo utf8_encode($categoria['nome_normal']); ?>">
	<meta property="article:tag" content="<?php echo $opiniao['tags']; ?>">
	<meta property="article:published_time" content="<?php echo $opiniao['data']; ?>">
	<meta property="og:url" content="<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>">
	<meta property="og:title" content="<?php echo $opiniao['titulo']; ?>">
	<meta property="og:description" content="<?php echo $opiniao['descricao']; ?>">

	<?php if($opiniao['tipo'] == "imagem"): ?>

	<meta property="og:image" content="<?php echo ADMIN_URL; ?>users/images/<?php echo $opiniao['arquivo']; ?>">

	<?php elseif($opiniao['tipo'] == "video"): ?>

	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png" />

	<?php endif; ?>

	<!-- Twitter -->
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>">
	<meta property="twitter:title" content="<?php echo $opiniao['titulo']; ?>">
	<meta property="twitter:description" content="<?php echo $opiniao['descricao']; ?>">

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
	<section class="tarja-categoria tarja-categoria-<?php echo $categoria['nome']; ?>">
		<p>OPINIÃO / <?php echo mb_strtoupper(utf8_encode($categoria['nome_normal'])); ?></p>
	</section>

	<!-- Dados do artigo -->
	<div class="dados-artigo">
		<p><span><?php echo $opiniao['dia']; ?> de <?php
					switch ($opiniao['mes']) {
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
				?> de <?php echo $opiniao['ano']; ?></span></p>

		<h2><?php echo $opiniao['titulo']; ?></h2>

		<p><?php echo $opiniao['descricao']; ?></p>

		<div class="autor-share">
			<div class="lado-autor">
				<div class="foto-autor">
					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $opiniao['foto']; ?>">
				</div>
				<p>Por <a href="<?php echo BASE_URL; ?>colunas/colunista/<?php echo $opiniao['nome']; ?>"><?php echo $opiniao['nome']; ?></a> — Politize e socialize</p>
			</div>
			<div class="lado-share">
				<p>Share this —</p>

				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
				<a href="https://api.whatsapp.com/send?text=<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.svg"></a>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
			</div>
		</div>
	</div>

	<!-- Arquivo principal do artigo -->
	<?php if($opiniao['tipo'] == "imagem"): ?>

	<div class="file-artigo">
		<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $opiniao['arquivo']; ?>">
	</div>

	<?php else: ?>

	<div class="file-artigo">
		<video id="video-artigo" class="video-js" controls preload="auto" data-setup="{}">
			<source src="<?php echo ADMIN_URL; ?>users/videos/<?php echo $opiniao['arquivo']; ?>" type="video/mp4" />
		</video>
	</div>

	<?php endif; ?>

	<!-- Descrição da imagem do artigo -->
	<div class="descricao-arquivo">
		<p><?php echo $opiniao['legenda']; ?></p>
	</div>

	<!-- Postagem -->
	<div class="postagem">
		
		<?php echo $opiniao['postagem']; ?>

		<div class="linha"></div>
	</div>

	<!-- Comentários -->
	<div class="facebook-comments">
		<h2>Comentários</h2>

		<div class="fb-comments" data-href="<?php echo BASE_URL; ?>colunas/opiniao/<?php echo $opiniao['url']; ?>" data-numposts="10" data-width="100%"></div>
	</div>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Mais da categoria -->
	<section class="topo-secao esportes-topo-secao">
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

	<!-- Recentes -->
	<section class="politica destaques-<?php echo $opiniao['categoria']; ?>">
		<div class="noticias-maiores">

			<?php
				foreach($maiores as $dados):
			?>

			<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">
				<div class="noticia-maior-politica">

					<?php if($dados['tipo'] == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($dados['tipo'] == "video"): ?>

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
				foreach($menores as $dados):
			?>

			<a href="<?php echo BASE_URL; ?>home/noticia/<?php echo $dados['url']; ?>">

				<div class="noticia-menor-politica">

					<?php if($dados['tipo'] == "imagem"): ?>

					<img src="<?php echo ADMIN_URL; ?>users/images/<?php echo $dados['arquivo']; ?>">

					<?php elseif($dados['tipo'] == "video"): ?>

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

	<!-- Esportes -->
	<section class="topo-secao esportes-topo-secao">
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

	<!-- Colunistas da Seção Esportes -->
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

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>ASSINE A NEWSLETTER E RECEBA AS OPINIÕES<br>NO SEU E-MAIL</p>

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