<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Esportes / Próximos jogos</title>
	<meta name="title" content="Politize e socialize - Esportes / Próximos jogos">
	<meta name="description" content="Veja os próximos jogos de futebol no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Jogos de Futebol, Flamengo, Próximos jogos, Corinthians, Libertadores, Sulamericana, Champions League, UCL, Real Madrid, Barcelona">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>jogos">
	<meta property="og:title" content="Politize e socialize - Esportes / Próximos jogos">
	<meta property="og:description" content="Veja os próximos jogos de futebol no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>jogos">
	<meta property="twitter:title" content="Politize e socialize - Esportes / Próximos jogos">
	<meta property="twitter:description" content="Veja os próximos jogos de futebol no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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
			var slideId = ["carousel-slide", "slide-colunistas-esportes"]
			var dotId = ["slide-dot-carousel", "slide-dot-secao-esportes"]
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

			$(".slide-dot-secao-esportes").on("click", function(){

				dataSlide = $(this).data("slide");
				dotCurrent = $(this).data("id");
				currentDivs(dotCurrent, dataSlide);

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
	<section class="tarja-categoria tarja-categoria-esportes">
		<p>ESPORTES / PRÓXIMOS JOGOS</p>
	</section>

	<!-- Data -->
	<section class="data-jogos hoje">
		<p class="cursor-default">JOGOS DE HOJE / 12/8/2020</p>
	</section>

	<!-- Jogos -->
	<main class="jogos-placares">
		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="status-jogo">
					<p>Ao vivo</p>
				</div>
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://a2.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fsoccer%2F500%2F819.png">
					<p>Flamengo</p>
					<h2>2<span>-0</span></h2>
					<p>Racing SC</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Escudo_de_Racing_Club_%282014%29.svg/1200px-Escudo_de_Racing_Club_%282014%29.svg.png">
				</div>
				<div class="data-oficial">
					<p>12/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="status-jogo">
					<p>Fim de jogo</p>
				</div>
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/LDUQuitologo2.png">
					<p>LDU Quito</p>
					<h2><span>0-0</span></h2>
					<p>Santos FC</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Santos_logo.svg/1200px-Santos_logo.svg.png">
				</div>
				<div class="data-oficial">
					<p>12/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>
	</main>

	<!-- Data -->
	<section class="data-jogos outro">
		<p class="cursor-default">JOGOS DE AMANHÃ / 13/8/2020</p>
	</section>

	<!-- Jogos -->
	<section class="jogos-placares">
		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://upload.wikimedia.org/wikipedia/pt/b/be/Delf%C3%ADn_Sporting_Club.png">
					<p>Delfín S.C</p>
					<h2><span>0-0</span></h2>
					<p>Palmeiras</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Palmeiras_logo.svg/1200px-Palmeiras_logo.svg.png">
				</div>
				<div class="data-oficial">
					<p>13/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>
	</section>

	<!-- Data -->
	<section class="data-jogos outro">
		<p class="cursor-default">JOGOS DO DIA / 14/8/2020</p>
	</section>

	<!-- Jogos -->
	<section class="jogos-placares">
		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://a2.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fsoccer%2F500%2F819.png">
					<p>Flamengo</p>
					<h2><span>0-0</span></h2>
					<p>Santos FC</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Santos_logo.svg/1200px-Santos_logo.svg.png">
				</div>
				<div class="data-oficial">
					<p>14/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://upload.wikimedia.org/wikipedia/commons/4/41/River_Plate_logo.png">
					<p>River Plate</p>
					<h2><span>0-0</span></h2>
					<p>Boca Juniors</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Boca_Juniors_logo18.svg/1200px-Boca_Juniors_logo18.svg.png">
				</div>
				<div class="data-oficial">
					<p>14/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://a1.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fsoccer%2F500%2F17134.png">
					<p>Brasil de Pelotas</p>
					<h2><span>0-0</span></h2>
					<p>Cruzeiro</p>
					<img src="https://upload.wikimedia.org/wikipedia/pt/e/e4/CruzeiroEC2016.png">
				</div>
				<div class="data-oficial">
					<p>14/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>

		<a href="<?php echo BASE_URL; ?>jogos/jogo/{{jogo}}">
			<div class="jogo-placar jogo-sem-borda">
				<div class="campeonato-jogo">
					<p>Libertadores - Oitavas de Final / Ida</p>
				</div>
				<div class="placar">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Sport_Club_Recife.svg/1200px-Sport_Club_Recife.svg.png">
					<p>Sport Recife</p>
					<h2><span>0-0</span></h2>
					<p>São Paulo FC</p>
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brasao_do_Sao_Paulo_Futebol_Clube.svg/1200px-Brasao_do_Sao_Paulo_Futebol_Clube.svg.png">
				</div>
				<div class="data-oficial">
					<p>14/08/2020 12h30</p>
				</div>
			</div>
		</a>

		<div class="linha-abaixo-jogo"></div>

		<button id="load-more-jogos">CARREGAR MAIS</button>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>RECEBA AS NOVIDADES SOBRE FUTEBOL<br>NO SEU E-MAIL</p>

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

	<!-- Colunistas -->
	<section class="colunistas esportes-secao">
		<div class="topo-colunistas">
			<a href="<?php echo BASE_URL; ?>colunas">
				<p>COLUNISTAS</p>
				<img src="<?php echo BASE_URL; ?>assets/images/right-yellow.svg">
			</a>
		</div>
		<!-- -->
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
		<!-- -->
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
		<!-- -->
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
		<!-- -->
		<div class="slide-colunistas-controls">
			<img data-id="1" class="volta-slide" src="<?php echo BASE_URL; ?>assets/images/left-arrow.svg">
			<div class="slide-dots-secao">
				<div data-slide="1" data-id="1" class="slide-dot-secao-esportes"></div>
				<div data-slide="1" data-id="2" class="slide-dot-secao-esportes"></div>
				<div data-slide="1" data-id="3" class="slide-dot-secao-esportes"></div>
			</div>
			<img data-id="1" class="passa-slide" src="<?php echo BASE_URL; ?>assets/images/right-arrow-black.svg">
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