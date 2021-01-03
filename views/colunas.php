<!DOCTYPE html>
<html>
<head>
	<!-- Primary Meta Tags -->
	<title>Politize e socialize - Colunas e Colunistas</title>
	<meta name="title" content="Politize e socialize - Tudo sobre Esportes">
	<meta name="description" content="Tudo sobre as colunas e os Colunistas na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Colunistas, Colunas, escritores, Futebol, esportes, Bolsonaro, política, televisão, Anitta, Ludmilla, Pablo Vittar, K-Pop, economia, Plano Real, Câmara dos Deputados, Coronavírus, Pandemia, MEC, Enem 2021, Vestibular, Guns Roses, Música">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Portuguese">
	<meta name="revisit-after" content="2 days">
	<meta name="author" content="Victor Miguel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo BASE_URL; ?>colunas">
	<meta property="og:title" content="Politize e socialize - Colunas e Colunistas">
	<meta property="og:description" content="Tudo sobre as colunas e os Colunistas na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
	<meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/logotipo-politizeesocialize.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo BASE_URL; ?>colunas">
	<meta property="twitter:title" content="Politize e socialize - Colunas e Colunistas">
	<meta property="twitter:description" content="Tudo sobre as colunas e os Colunistas na Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.">
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
	<section class="tarja-categoria tarja-categoria-colunas">
		<p>COLUNAS E COLUNISTAS</p>
	</section>

	<!-- Publicidade -->
	<div class="publicidade">
		<div class="publicidade-item">
			<p>PUBLICIDADE</p>
		</div>
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

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Política -->
	<section class="topo-secao politica-topo-secao" id="politica">
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

	<!-- Colunistas da Seção Política -->
	<section class="colunistas-secao colunistas-secao-politica">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Televisão -->
	<section class="topo-secao televisao-topo-secao" id="televisao">
		<a href="<?php echo BASE_URL; ?>home/categoria/televisao">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>TELEVISÃO</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Televisão -->
	<section class="colunistas-secao colunistas-secao-televisao">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Esportes -->
	<section class="topo-secao esportes-topo-secao" id="esportes">
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

	<!-- Colunistas da Seção Esportes -->
	<section class="colunistas-secao colunistas-secao-esportes">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Economia -->
	<section class="topo-secao economia-topo-secao" id="economia">
		<a href="<?php echo BASE_URL; ?>home/categoria/economia">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>ECONOMIA</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Economia -->
	<section class="colunistas-secao colunistas-secao-economia">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Saúde -->
	<section class="topo-secao saude-topo-secao" id="saude">
		<a href="<?php echo BASE_URL; ?>home/categoria/saude">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>SAÚDE</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Saúde -->
	<section class="colunistas-secao colunistas-secao-saude">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Educação -->
	<section class="topo-secao educacao-topo-secao" id="educacao">
		<a href="<?php echo BASE_URL; ?>home/categoria/educacao">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>EDUCAÇÃO</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Educação -->
	<section class="colunistas-secao colunistas-secao-educacao">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Música -->
	<section class="topo-secao musica-topo-secao" id="musica">
		<a href="<?php echo BASE_URL; ?>home/categoria/musica">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>MÚSICA</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Música -->
	<section class="colunistas-secao colunistas-secao-musica">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Games -->
	<section class="topo-secao games-topo-secao" id="games">
		<a href="<?php echo BASE_URL; ?>home/categoria/financas">
			<div class="item-topo-secao"></div>
			<div class="item-topo-secao">
				<p>GAMES</p>
			</div>
			<div class="item-topo-secao justify-right">
				<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
			</div>
		</a>
	</section>

	<!-- Colunistas da Seção Games -->
	<section class="colunistas-secao colunistas-secao-games">
		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static.poder360.com.br/2020/12/JairBolsonaro-PessoaComDeficiencia-Michelle-14-868x644.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/PDFt8rv5N6BqUV6kcID838G79Fo=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SH7RXY3KBBGC7E2MGUR34CCHPA.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://f.i.uol.com.br/fotografia/2020/05/30/15908728835ed2cb33ad63d_1590872883_3x2_md.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://imagens.brasil.elpais.com/resizer/6PompmIOEFiHliFkdnHBi-dO2EI=/768x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/SBJ3UW43NBHBLGRMP73V22ZF3I.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://www.cartacapital.com.br/wp-content/uploads/2020/10/Lula-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>

		<div class="borda-colunista-secao"></div>

		<a href="<?php echo BASE_URL; ?>colunas/colunista/{{colunista}}">
			<div class="colunista-secao">
				<div class="colunista-secao-foto">
					<img src="https://static1.purepeople.com.br/articles/0/30/68/00/@/3467315-andreia-sadi-revela-nome-dos-filhos-com-624x600-2.jpg">
				</div>
				<h2>VICTOR MIGUEL</h2>
				<p>"PROGRAMADOR E UX DESIGNER APAIXONADO."</p>
			</div>
		</a>
	</section>

	<!-- Linha -->
	<div class="linha"></div>

	<!-- Newsletter -->
	<div class="borda-top-newsletter"></div>
	<section class="secao-newsletter">
		<p>RECEBA AS NOVIDADES DOS COLUNISTAS<br>NO SEU E-MAIL</p>

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
					<a href="<?php echo BASE_URL; ?>">
						<p>REDES SOCIAIS</p>
						<img src="<?php echo BASE_URL; ?>assets/images/right.svg">
					</a>
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