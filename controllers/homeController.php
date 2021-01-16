<?php 
class homeController extends controller {

	public function index(){

		$noticias_slide = new Noticias();
		$noticias_slide->tipo = "imagem";
		$noticias_slide->init = 0;
		$noticias_slide->max = 4;

		$dados = array(
			'noticias_slide' => $noticias_slide->get_news_slide()
		);

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