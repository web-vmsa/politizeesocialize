<?php 
class ajaxController extends controller {

	public function index(){


		$dados = array();

		if (!empty($_POST['init'])) {
			
			$page = $_POST['init'];

			$max = 4;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_all_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function newsletter(){

		$dados = array();

		if (!empty($_POST['email'])) {
			
			$email = htmlspecialchars($_POST['email']);

			$existe = new Newsletter();
			$existe->email = $email;
			$existe->status = 1;
			$verifica = $existe->get_assinante();

			if ($verifica == true) {
				
				$dados['resultado'] = 1;

			} else {

				$novo = new Newsletter();
				$novo->email = $email;
				$novo->status = 1;
				$novo->set_assinante();

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_colunistas(){

		$dados = array();

		if (!empty($_POST['inicio'])) {
			
			$page = $_POST['inicio'];

			$max = 3;
			$init = ($page * $max) - $max;

			$colunistas = new Colunistas();
			$colunistas->init = $init;
			$colunistas->max = $max;
			$data_colunistas = $colunistas->get_all();

			foreach ($data_colunistas as $colunista) {

				$redes_sociais = json_decode($colunista['social']);

				echo '<a href="'.BASE_URL.'colunas/colunista/'.$colunista['nome'].'">';
					echo '<div class="lado-colunistas-colunista">';
						echo '<div class="foto-colunista">';
							echo '<img src="'.ADMIN_URL.'users/images/'.$colunista['foto'].'">';
						echo '</div>';
						echo '<div class="dados-colunista">';
							echo '<p>'.$colunista['nome'].'</p>';
							echo '<div class="redes-sociais-colunista">';
								echo '<a href="'.$redes_sociais->instagram.'"><img src="'.BASE_URL.'assets/images/instagram.svg"></a>';
								echo '<a href="'.$redes_sociais->facebook.'"><img src="'.BASE_URL.'assets/images/facebook.svg"></a>';
								echo '<a href="'.$redes_sociais->linkedin.'"><img src="'.BASE_URL.'assets/images/linkedin.svg"></a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				echo '<div class="hr-colunista"></div>';
			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_postagens(){

		$dados = array();

		if (!empty($_POST['postagens'])) {
			
			$page = $_POST['postagens'];

			$max = 3;
			$init = ($page * $max) - $max;

			$postagens = new Opinioes();
			$postagens->init = $init;
			$postagens->max = $max;
			$data_postagens = $postagens->get_all_opi();

			foreach ($data_postagens as $posts) {

				echo '<a href="'.BASE_URL.'colunas/opiniao/'.$posts['url'].'">';
					echo '<div class="noticia-menor-politica">';
						
						if ($posts['tipo'] == "imagem") {

							echo '<img src="'.ADMIN_URL.'users/images/'.$posts['arquivo'].'">';

						} else {

							echo '<video>';
								echo '<source src="'.ADMIN_URL.'users/videos/'.$posts['arquivo'].'" type="video/mp4">';
							echo '</video>';

						}

						echo '<div class="noticia-menor-conteudo-politica">';
							echo '<h2>'.mb_strtoupper($posts['titulo']).'</h2>';
							echo '<p>POR '.mb_strtoupper($posts['nome']).' | '.$posts['dia'].' DE ';

							switch ($posts['mes']) {
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

							echo '<br>DE 2020</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

				echo '<div class="hr-postagens"></div>';
			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_recentes(){


		$dados = array();

		if (!empty($_POST['recentes'])) {
			
			$page = $_POST['recentes'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_all_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_politica(){


		$dados = array();

		if (!empty($_POST['politica'])) {
			
			$page = $_POST['politica'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 1;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_televisao(){


		$dados = array();

		if (!empty($_POST['televisao'])) {
			
			$page = $_POST['televisao'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 2;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_esportes(){


		$dados = array();

		if (!empty($_POST['esportes'])) {
			
			$page = $_POST['esportes'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 3;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_economia(){


		$dados = array();

		if (!empty($_POST['economia'])) {
			
			$page = $_POST['economia'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 5;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_saude(){


		$dados = array();

		if (!empty($_POST['saude'])) {
			
			$page = $_POST['saude'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 4;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_educacao(){


		$dados = array();

		if (!empty($_POST['educacao'])) {
			
			$page = $_POST['educacao'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 8;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_musica(){


		$dados = array();

		if (!empty($_POST['musica'])) {
			
			$page = $_POST['musica'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 7;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_games(){


		$dados = array();

		if (!empty($_POST['games'])) {
			
			$page = $_POST['games'];

			$max = 3;
			$init = ($page * $max) - $max;

			$videos = new Videos();
			$videos->categoria_id = 6;
			$videos->init = $init;
			$videos->max = $max;
			$data_video = $videos->get_videos();

			foreach ($data_video as $item) {
				
				echo '<a href="'.BASE_URL.'home/noticia/'.$item['url'].'">';
					echo '<div class="video">';
						echo '<div class="topo-video">';
							echo '<img src="'.BASE_URL.'assets/images/play-button.svg">';
							echo '<p>'.$item['dia'].' DE '; 
							switch ($item['mes']) {
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
							echo ' | '.$item['ano'].'</p>';
						echo '</div>';
						echo '<video id="my-video" class="video-js vjs-theme-city" preload="auto" data-setup="{}">
							 <source src="'.ADMIN_URL.'users/videos/'.$item['arquivo'].'" type="video/mp4" />
						</video>';
						echo '<div class="conteudo-video">';
							echo '<h2>'.mb_strtoupper($item['titulo']).'</h2>';
							echo '<p>'.mb_strtoupper($item['descricao']).'</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_lances() {

		$dados = array();

		if (!empty($_POST['url'])) {
			
			$url = $_POST['url'];

			$lances = new Jogos();
			$lances->url = $url;
			$lances = $lances->get_jogo();

			$dados['resultado'] = $lances['lances'];

		}

		$this->loadView('ajax', $dados);

	}

	public function load_status_jogo() {

		$dados = array();

		if (!empty($_POST['url'])) {
			
			$url = $_POST['url'];

			$placar = new Jogos();
			$placar->url = $url;
			$placar = $placar->get_jogo();

			$dados['resultado'] = json_encode($placar);

		}

		$this->loadView('ajax', $dados);

	}

	public function load_placar() {

		$dados = array();

		if (!empty($_POST['url'])) {
			
			$url = $_POST['url'];

			$placar = new Jogos();
			$placar->url = $url;
			$placar = $placar->get_jogo();

			$jogo_prop = json_decode($placar['jogo_prop']);

			$placar = $placar['placar'];

			$resultado = explode("-", $placar);

			$valor_maior = max($resultado);

			$placar_time_casa = $resultado[0];

			$placar_time_fora = $resultado[1];

			if($placar_time_casa == $valor_maior && $placar_time_fora == $valor_maior){

				echo '<h2><span>'.$placar_time_casa.'-'.$placar_time_fora.'</span></h2>';

			} else {

				if ($placar_time_casa == $valor_maior) {
					
					echo '<h2>'.$placar_time_casa.'<span>-'.$placar_time_fora.'</span></h2>';

				} else {

					echo '<h2><span>'.$placar_time_casa.'-</span>'.$placar_time_fora.'</h2>';

				}

			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_resultados(){

		$dados = array();

		if (!empty($_POST['resultados'])) {
			
			$titulo = htmlspecialchars($_POST['titulo']);

			$page = $_POST['resultados'];

			$max = 8;
			$init = ($page * $max) - $max;

			$postagens = new Noticias();
			$postagens->init = $init;
			$postagens->max = $max;
			$data_postagens = $postagens->get_resultados($titulo);

			foreach ($data_postagens as $posts) {

				echo '<a href="'.BASE_URL.'colunas/opiniao/'.$posts['url'].'">';
					echo '<div class="noticia-menor-politica">';
						
						if ($posts['tipo'] == "imagem") {

							echo '<img src="'.ADMIN_URL.'users/images/'.$posts['arquivo'].'">';

						} else {

							echo '<video>';
								echo '<source src="'.ADMIN_URL.'users/videos/'.$posts['arquivo'].'" type="video/mp4">';
							echo '</video>';

						}

						echo '<div class="noticia-menor-conteudo-politica">';
							echo '<h2>'.mb_strtoupper($posts['titulo']).'</h2>';
							echo '<p>POR '.mb_strtoupper($posts['nome']).' | '.$posts['dia'].' DE ';

							switch ($posts['mes']) {
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

							echo '<br>DE 2020</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';
			}

		}

		$this->loadView('ajax', $dados);

	}

	public function load_posts_colunista() {

		$dados = array();

		if (!empty($_POST['posts_colunista'])) {
			
			$page = $_POST['posts_colunista'];

			$nome = $_POST['nome'];

			$max = 8;
			$init = ($page * $max) - $max;

			$postagens = new Colunistas();
			$postagens->nome = $nome;
			$postagens->init = $init;
			$postagens->max = $max;
			$data_postagens = $postagens->get_colunista_posts();

			foreach ($data_postagens as $posts) {

				$arquivo_prop = json_decode($posts['arquivo_prop']);

				echo '<a href="'.BASE_URL.'colunas/opiniao/'.$posts['url'].'">';
					echo '<div class="noticia-menor-politica">';
						
						if ($posts['tipo'] == "imagem") {

							echo '<img src="'.ADMIN_URL.'users/images/'.$posts['arquivo'].'">';

						} else {

							echo '<video>';
								echo '<source src="'.ADMIN_URL.'users/videos/'.$posts['arquivo'].'" type="video/mp4">';
							echo '</video>';

						}

						echo '<div class="noticia-menor-conteudo-politica">';
							echo '<h2>'.mb_strtoupper($posts['titulo']).'</h2>';
							echo '<p>POR '.mb_strtoupper($posts['nome']).' | '.$posts['dia'].' DE ';

							switch ($posts['mes']) {
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

							echo '<br>DE 2020</p>';
						echo '</div>';
					echo '</div>';
				echo '</a>';
			}

		}

		$this->loadView('ajax', $dados);

	}
	
}