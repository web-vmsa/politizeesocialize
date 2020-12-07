<?php 
class colunasController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('colunas', $dados);

	}
	
}