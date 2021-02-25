<?php 
class jogosController extends controller {

	public function index(){

		$resultados = new Jogos();
		$resultados->status_jogo = "Fim de jogo";
		$resultados->init = 0;
		$resultados->max = 4;

		$agendados = new Jogos();
		$agendados->status_jogo = "Agendado";
		$agendados->init = 0;
		$agendados->max = 4;

		$noticias_jogos = new Noticias();
		$noticias_jogos->categoria_id = 3;
		$noticias_jogos->init = 0;
		$noticias_jogos->max = 4;

		$videos_esportes = new Noticias();
		$videos_esportes->categoria_id = 3;
		$videos_esportes->init = 0;
		$videos_esportes->max = 2;

		$slide_esportes = new Jogos();
		$slide_esportes->status_jogo = "Fim de jogo";
		$slide_esportes->init = 0;
		$slide_esportes->max = 3;

		$jogos_hoje = new Jogos();
		$jogos_hoje->day = date("d");
		$jogos_hoje->month = date("m");
		$jogos_hoje->year = date("Y");

		$jogos_amanha = new Jogos();
		$datetime = new DateTime('tomorrow');
		$jogos_amanha->day = $datetime->format('d');
		$jogos_amanha->month = $datetime->format('m');
		$jogos_amanha->year = $datetime->format('Y');

		$jogos_outro = new Jogos();
		$hoje = date("Y/m/d");
		$datetime = new DateTime($hoje);
		$datetime->modify('+2 day');
		$jogos_outro->day = $datetime->format('d');
		$jogos_outro->month = $datetime->format('m');
		$jogos_outro->year = $datetime->format('Y');

		$jogos_mais = new Jogos();
		$hoje = date("Y/m/d");
		$datetime = new DateTime($hoje);
		$datetime->modify('+3 day');
		$jogos_mais->day = $datetime->format('d');
		$jogos_mais->month = $datetime->format('m');
		$jogos_mais->year = $datetime->format('Y');

		$dados = array(
			'resultados' => $resultados->get_jogos(),
			'agendados' => $agendados->get_jogos(),
			'noticias_jogos' => $noticias_jogos->get_by_categoria(),
			'videos_esportes' => $videos_esportes->get_videos(),
			'slide_esportes' => $slide_esportes->get_jogos(),
			'jogos_hoje' => $jogos_hoje->get_by_date(),
			'jogos_amanha' => $jogos_amanha->get_by_date(),
			'jogos_outro' => $jogos_outro->get_by_date(),
			'jogos_mais' => $jogos_mais->get_by_date()
		);

		$this->loadView('jogos', $dados);

	}

	public function finalizados(){

		$resultados = new Jogos();
		$resultados->status_jogo = "Fim de jogo";
		$resultados->init = 0;
		$resultados->max = 4;

		$agendados = new Jogos();
		$agendados->status_jogo = "Agendado";
		$agendados->init = 0;
		$agendados->max = 4;

		$noticias_jogos = new Noticias();
		$noticias_jogos->categoria_id = 3;
		$noticias_jogos->init = 0;
		$noticias_jogos->max = 4;

		$videos_esportes = new Noticias();
		$videos_esportes->categoria_id = 3;
		$videos_esportes->init = 0;
		$videos_esportes->max = 2;

		$slide_esportes = new Jogos();
		$slide_esportes->status_jogo = "Fim de jogo";
		$slide_esportes->init = 0;
		$slide_esportes->max = 3;

		$jogos_hoje = new Jogos();
		$jogos_hoje->day = date("d");
		$jogos_hoje->month = date("m");
		$jogos_hoje->year = date("Y");

		$jogos_ontem = new Jogos();
		$jogos_ontem->day = date("d")-1;
		$jogos_ontem->month = date("m");
		$jogos_ontem->year = date("Y");

		$jogos_outro = new Jogos();
		$jogos_outro->day = date("d")-2;
		$jogos_outro->month = date("m");
		$jogos_outro->year = date("Y");

		$jogos_mais = new Jogos();
		$jogos_mais->day = date("d")-3;
		$jogos_mais->month = date("m");
		$jogos_mais->year = date("Y");

		$dados = array(
			'resultados' => $resultados->get_jogos(),
			'agendados' => $agendados->get_jogos(),
			'noticias_jogos' => $noticias_jogos->get_by_categoria(),
			'videos_esportes' => $videos_esportes->get_videos(),
			'slide_esportes' => $slide_esportes->get_jogos(),
			'jogos_hoje' => $jogos_hoje->get_by_date(),
			'jogos_ontem' => $jogos_ontem->get_by_date(),
			'jogos_outro' => $jogos_outro->get_by_date(),
			'jogos_mais' => $jogos_mais->get_by_date()
		);

		$this->loadView('finalizados', $dados);

	}

	public function jogo($url){

		$jogo = new Jogos();
		$jogo->url = $url;
		$jogo = $jogo->get_jogo();

		if($jogo == true) {

			$resultados = new Jogos();
			$resultados->status_jogo = "Fim de jogo";
			$resultados->init = 0;
			$resultados->max = 4;

			$agendados = new Jogos();
			$agendados->status_jogo = "Agendado";
			$agendados->init = 0;
			$agendados->max = 4;

			$noticias_jogos = new Noticias();
			$noticias_jogos->categoria_id = 3;
			$noticias_jogos->init = 0;
			$noticias_jogos->max = 4;

			$videos_esportes = new Noticias();
			$videos_esportes->categoria_id = 3;
			$videos_esportes->init = 0;
			$videos_esportes->max = 2;

			$slide_esportes = new Jogos();
			$slide_esportes->status_jogo = "Fim de jogo";
			$slide_esportes->init = 0;
			$slide_esportes->max = 3;

			$categoria = new Categorias();
			$categoria->id = $jogo['categoria_id'];

			$dados = array(
				'resultados' => $resultados->get_jogos(),
				'agendados' => $agendados->get_jogos(),
				'noticias_jogos' => $noticias_jogos->get_by_categoria(),
				'videos_esportes' => $videos_esportes->get_videos(),
				'slide_esportes' => $slide_esportes->get_jogos(),
				'jogo' => $jogo,
				'categoria' => $categoria->get_categoria()
			);

			$this->loadView('jogo', $dados);

		} else {

			$dados = array();

			$this->loadView('404', $dados);

		}

	}
	
}