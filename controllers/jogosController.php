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
		$noticias_jogos->categoria = "esportes";
		$noticias_jogos->init = 0;
		$noticias_jogos->max = 4;

		$videos_esportes = new Noticias();
		$videos_esportes->categoria = "esportes";
		$videos_esportes->init = 0;
		$videos_esportes->max = 2;

		$slide_esportes = new Jogos();
		$slide_esportes->status_jogo = "Fim de jogo";
		$slide_esportes->init = 0;
		$slide_esportes->max = 3;

		$jogos_hoje = new Jogos();
		$jogos_hoje->day = "20";
		$jogos_hoje->month = "01";
		$jogos_hoje->year = "2021";

		$jogos_amanha = new Jogos();
		$datetime = new DateTime('tomorrow');
		$jogos_amanha->day = /*"20"*/$datetime->format('d');
		$jogos_amanha->month = /*"01"*/$datetime->format('m');
		$jogos_amanha->year = /*"2021"*/$datetime->format('Y');

		$jogos_outro = new Jogos();
		$hoje = date("Y/m/d");
		$datetime = new DateTime($hoje);
		$datetime->modify('+2 day');
		$jogos_outro->day = "20"/*$datetime->format('d')*/;
		$jogos_outro->month = "01"/*$datetime->format('m')*/;
		$jogos_outro->year = "2021"/*$datetime->format('Y')*/;

		$jogos_mais = new Jogos();
		$hoje = date("Y/m/d");
		$datetime = new DateTime($hoje);
		$datetime->modify('+3 day');
		$jogos_mais->day = "20"/*$datetime->format('d')*/;
		$jogos_mais->month = "01"/*$datetime->format('m')*/;
		$jogos_mais->year = "2021"/*$datetime->format('Y')*/;

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


		$dados = array();

		$this->loadView('finalizados', $dados);

	}

	public function jogo(){


		$dados = array();

		$this->loadView('jogo', $dados);

	}
	
}