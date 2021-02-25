<?php 
class colunasController extends controller {

	public function index(){


		$colunistas_politica = new Colunistas();
		$colunistas_politica->categoria_id = 1;

		$colunistas_televisao = new Colunistas();
		$colunistas_televisao->categoria_id = 2;

		$colunistas_esportes = new Colunistas();
		$colunistas_esportes->categoria_id = 3;

		$colunistas_economia = new Colunistas();
		$colunistas_economia->categoria_id = 5;

		$colunistas_saude = new Colunistas();
		$colunistas_saude->categoria_id = 4;

		$colunistas_educacao = new Colunistas();
		$colunistas_educacao->categoria_id = 8;

		$colunistas_musica = new Colunistas();
		$colunistas_musica->categoria_id = 7;

		$colunistas_games = new Colunistas();
		$colunistas_games->categoria_id = 6;

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

			$colunistas = new Colunistas();
			$colunistas->categoria_id = $colunista['categoria_id'];

			$categoria = new Categorias();
			$categoria->id = $colunista['categoria_id'];
			
			$dados = array(
				'colunista' => $colunista,
				'colunistas' => $colunistas->get_colunistas_by_categoria(),
				'categoria' => $categoria->get_categoria()
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
			$maiores->categoria_id = $opiniao['categoria_id'];
			$maiores->init = 0;
			$maiores->max = 2;

			$menores = new Noticias();
			$menores->categoria_id = $opiniao['categoria_id'];
			$menores->init = 2;
			$menores->max = 4;

			$colunistas = new Colunistas();
			$colunistas->categoria_id = $opiniao['categoria_id'];

			$categoria = new Categorias();
			$categoria->id = $opiniao['categoria_id'];

			$dados = array(
				'opiniao' => $opiniao,
				'maiores' => $maiores->get_by_categoria(),
				'menores' => $menores->get_by_categoria(),
				'colunistas' => $colunistas->get_colunistas_by_categoria(),
				'categoria' => $categoria->get_categoria()
			);

			$this->loadView('opiniao', $dados);

		} else {

			$dados = array();

			$this->loadView('404', $dados);

		}
	}
	
}