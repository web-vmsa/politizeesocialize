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

	public function opiniao() {


		$dados = array();

		$this->loadView('opiniao', $dados);
	}
	
}