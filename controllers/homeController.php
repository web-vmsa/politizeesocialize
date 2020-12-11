<?php 
class homeController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('home', $dados);

	}

	public function categoria(){


		$dados = array();

		$this->loadView('categoria', $dados);
	}

	public function resultados(){


		$dados = array();

		$this->loadView('resultados', $dados);
	}

	public function noticia(){


		$dados = array();

		$this->loadView('postagem', $dados);
	}
	
}