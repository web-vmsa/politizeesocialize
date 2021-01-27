<?php 
class colunasController extends controller {

	public function index(){


		$colunistas_politica = new Colunistas();
		$colunistas_politica->categoria = "politica";

		$colunistas_televisao = new Colunistas();
		$colunistas_televisao->categoria = "televisao";

		$colunistas_esportes = new Colunistas();
		$colunistas_esportes->categoria = "esportes";

		$colunistas_esportes = new Colunistas();
		$colunistas_esportes->categoria = "esportes";

		$colunistas_economia = new Colunistas();
		$colunistas_economia->categoria = "economia";

		$colunistas_saude = new Colunistas();
		$colunistas_saude->categoria = "saude";

		$colunistas_educacao = new Colunistas();
		$colunistas_educacao->categoria = "educacao";

		$colunistas_musica = new Colunistas();
		$colunistas_musica->categoria = "musica";

		$colunistas_games = new Colunistas();
		$colunistas_games->categoria = "games";

		$dados = array(
			'colunistas_politica' => $colunistas_politica->get_colunistas_by_categoria(),
			'colunistas_televisao' => $colunistas_televisao->get_colunistas_by_categoria(),
			'colunistas_esportes' => $colunistas_esportes->get_colunistas_by_categoria(),
			'colunistas_economia' => $colunistas_economia->get_colunistas_by_categoria(),
			'colunistas_saude' => $colunistas_saude->get_colunistas_by_categoria(),
			'colunistas_educacao' => $colunistas_educacao->get_colunistas_by_categoria(),
			'colunistas_musica' => $colunistas_musica->get_colunistas_by_categoria(),
			'colunistas_games' => $colunistas_games->get_colunistas_by_categoria()
		);

		$this->loadView('colunas', $dados);

	}

	public function colunista($nome) {

		$colunista = new Colunistas();
		$colunista->nome = $nome;
		$colunista = $colunista->get_colunista();

		if ($colunista == true) {

			$categoria = json_decode($colunista['usuario_prop']);

			$colunistas = new Colunistas();
			$colunistas->categoria = $categoria->categoria;
			
			$dados = array(
				'colunista' => $colunista,
				'colunistas' => $colunistas->get_colunistas_by_categoria()
			);

			$this->loadView('colunista', $dados);

		} else {

			$dados = array();

			$this->loadView('404', $dados);

		}

	}

	public function opiniao($url) {


		$opiniao = new Opinioes();
		$opiniao->url = $url;
		$opiniao = $opiniao->get_opi();

		if ($opiniao == true) {

			$maiores = new Noticias();
			$maiores->categoria = $opiniao['categoria'];
			$maiores->init = 0;
			$maiores->max = 2;

			$menores = new Noticias();
			$menores->categoria = $opiniao['categoria'];
			$menores->init = 2;
			$menores->max = 4;

			$colunistas = new Colunistas();
			$colunistas->categoria = $opiniao['categoria'];

			$dados = array(
				'opiniao' => $opiniao,
				'maiores' => $maiores->get_by_categoria(),
				'menores' => $menores->get_by_categoria(),
				'colunistas' => $colunistas->get_colunistas_by_categoria()
			);

			$this->loadView('opiniao', $dados);

		} else {

			$dados = array();

			$this->loadView('404', $dados);

		}
	}
	
}