<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Resultados da Busca por {{busca}}</title>
	<meta name="title" content="Politize e socialize - Resultados da Busca por {{busca}}">
	<meta name="description" content="Faça uma busca no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Política, economia, site de notícias, televisão, novelas, esportes, Flamengo, Corinthians, jogos de futebol">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>home/resultados/{{resultados}}">
	<meta property="og:title" content="Politize e socialize - Resultados da Busca por {{busca}}">
	<meta property="og:description" content="Faça uma busca no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>home/resultados/{{resultados}}">
	<meta property="twitter:title" content="Politize e socialize - Resultados da Busca por {{busca}}">
	<meta property="twitter:description" content="Faça uma busca no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter search-form">
		<p>VJEA OS RESULTADOS DA SUA BUSCA OU<br>FAÇA UMA NOVA</p>

		<form method="POST" action="<?php echo BASE_URL; ?>home/resultados/{{pesquisa}}">
			<input type="text" name="pesquisar" id="pesquisar" placeholder="FAÇA UMA PESQUISA...">
			<button type="submit">PESQUISAR</button>
		</form>
	</section>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
	</div>

	<!-- Postagens do Colunista -->
	<section class="topo-secao destaques-topo-secao">
		<div class="item-topo-secao"></div>
		<div class="item-topo-secao">
			<p class="cursor-default">RESULTADOS</p>
		</div>
		<div class="item-topo-secao justify-right">
			<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
		</div>
	</section>

	<!-- Todas as postagens -->
	<section class="todas-postagens">
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
				<img src="https://s2.glbimg.com/UDPD9jKWz2831nnRnb7-7tmfrqs=/0x0:1280x853/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2019/L/z/RYs7wwTUmALWjqUDS41w/whatsapp-image-2019-09-19-at-00.43.15.jpeg">
				<div class="noticia-menor-conteudo-politica">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</div>
			</div>
		</a>
		<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
			<div class="noticia-menor-politica">
				<img src="https://colunadofla.com/wp-content/uploads/2020/07/rodrigo-caio.jpg">
				<div class="noticia-menor-conteudo-politica">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</div>
			</div>
		</a>
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
		<a href="<?php echo BASE_URL; ?>home/postagem/{{postagem}}">
			<div class="noticia-menor-politica">
				<img src="https://www.lance.com.br/files/article_main/uploads/2020/08/29/5f4adc962b03c.jpeg">
				<div class="noticia-menor-conteudo-politica">
					<h2>LOREM IPSUM  DOLOR SIT AMET, CONSECTETUR ADIPISCING</h2>
					<p>POR HUGO SOUZA | 20 DE OUTUBRO<br>DE 2020</p>
				</div>
			</div>
		</a>
	</section>

	<!-- Carregar mais -->
	<div class="carregar-mais">
		<button id="load-more-results">
			CARREGAR MAIS
		</button>
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
					<a href="https://www.instagram.com"><img src="<?php echo BASE_URL; ?>assets/images/instagram.svg"></a>
					<a href="https://www.youtube.com"><img src="<?php echo BASE_URL; ?>assets/images/youtube.svg"></a>
					<a href="ttps://www.facebook.com"><img src="<?php echo BASE_URL; ?>assets/images/facebook.svg"></a>
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