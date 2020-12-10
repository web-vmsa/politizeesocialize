<?php 
class jogosController extends controller {

	public function index(){


		$dados = array();

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