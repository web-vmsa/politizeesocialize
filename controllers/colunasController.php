<?php 
class colunasController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('colunas', $dados);

	}

	public function colunista() {


		$dados = array();

		$this->loadView('colunista', $dados);
	}

	public function opiniao($url) {


		$opiniao = new Opinioes();
		$opiniao->url = $url;
		$opiniao = $opiniao->get_opi();

		if ($opiniao == true) {

			$maiores = new Noticias();
			$maiores->categoria = /*$opiniao['categoria']*/"politica";
			$maiores->init = 0;
			$maiores->max = 2;

			$menores = new Noticias();
			$menores->categoria = /*$opiniao['categoria']*/"politica";
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