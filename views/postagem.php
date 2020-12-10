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
						<img class="card-navegacao-img" src="https://www.zonacurva.com.br/wp-content/uploads/2020/01/isen%C3%A7%C3%A3o-jornalismo.jpg">
						<div class="card-texto">
							<p>INICIO</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://www.racecomunicacao.com.br/wp-content/uploads/2018/01/Assessoria-de-imprensa-e-branding.jpg">
						<div class="card-texto">
							<p>SEJA ESCRITOR</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://angra.rj.gov.br/sopa/fotos/noticias/56979_I.jpg">
						<div class="card-texto">
							<p>DOE SANGUE</p>
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
						<img class="card-navegacao-img" src="https://maranhaohoje.com/wp-content/uploads/2018/04/Galo.jpg">
						<div class="card-texto">
							<p>ESPORTES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/politica">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://conteudo.imguol.com.br/c/parceiros/ab/2020/12/02/presidente-do-brasil-jair-bolsonaro-1606912952211_v2_450x337.jpg">
						<div class="card-texto">
							<p>POLÍTICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/saude">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://s2.glbimg.com/hPzLCw15vJyIznSwNP-MRS60uUk=/620x430/e.glbimg.com/og/ed/f/original/2020/03/09/gettyimages-1203348066.jpg">
						<div class="card-texto">
							<p>SAÚDE</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/economia">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://cdn4.ecycle.com.br/cache/images/2018-02/50-650-economia-o-que-e.jpg">
						<div class="card-texto">
							<p>ECONOMIA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/games">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://i2.wp.com/roteirobaby.com.br/portal/wp-content/uploads/2018/08/console-controller-gamer-21067.jpg?resize=600%2C400&ssl=1">
						<div class="card-texto">
							<p>GAMES</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/televisao">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://www.elasnotapetevermelho.com.br/wp-content/uploads/2017/10/anitta-400x400.jpg">
						<div class="card-texto">
							<p>TELEVISÃO</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>colunas">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://www.caaraponews.com.br/userfiles/uploads/imagens/materias/2019/09/original/3c9d6b1a37398f34c707473299bfd7df.jpg">
						<div class="card-texto">
							<p>COLUNAS</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/musica">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://play-lh.googleusercontent.com/dwyqtk9CgAaoXUcYB8pUHXRErF5A2Shd0UrZdBLkpAFx_e630aZahwN31HRZWNksIQ">
						<div class="card-texto">
							<p>MÚSICA</p>
							<img src="<?php echo BASE_URL; ?>assets/images/right-white.svg">
						</div>
					</div>
				</a>
				<a href="<?php echo BASE_URL; ?>home/categoria/educacao">
					<div class="card-navegacao">
						<img class="card-navegacao-img" src="https://i1.wp.com/www.institutomillenium.org.br/wp-content/uploads/2018/11/educacaoo.jpg?fit=620%2C465&ssl=1">
						<div class="card-texto">
							<p>EUCAÇÃO</p>
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
	<section class="tarja-categoria tarja-categoria-politica">
		<p>POLÍTICA</p>
	</section>

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

				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo BASE_URL; ?>home/postagem/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/linkedin.svg"></a>
				<a href="https://api.whatsapp.com/send?text=<?php echo BASE_URL; ?>home/postagem/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.svg"></a>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL; ?>home/postagem/{{url}}"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
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
		<video id="video-artigo" class="video-js" poster="https://images.autosport.pt/2020/12/romain-grosjean.jpg" controls preload="auto" data-setup="{}">
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
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. <a href="">Aenean aliquet orci mi, nec placerat dolor fermentum eget.</a> Pellentesque vel neque ut turpis ultrices commodo eu eu ex. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

		<img src="https://s2.glbimg.com/n8bxblHe4tA1NYbKz5wVQKdl9UA=/0x0:1280x948/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/2/Z/XhCCDqRdAwode4sThAVA/whatsapp-image-2020-10-03-at-13.43.59.jpeg">

		<h2>Lorem Ipsum</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. <a href="">Aenean aliquet orci mi, nec placerat dolor fermentum eget.</a> Pellentesque vel neque ut turpis ultrices commodo eu eu ex. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis maximus rhoncus. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex. Vestibulum blandit arcu nec feugiat posuere. Aenean aliquet orci mi, nec placerat dolor fermentum eget. Pellentesque vel neque ut turpis ultrices commodo eu eu ex.</p>

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
</body>
</html>