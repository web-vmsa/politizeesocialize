<?php 
class videosController extends controller {

	public function index(){


		$dados = array();

		$this->loadView('videos', $dados);

	}
	
}