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
							echo '<p>'.$item['dia'].' DE'; 
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
	
}