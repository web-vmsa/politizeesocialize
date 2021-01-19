<?php 
class homeController extends controller {

	public function index(){

		$noticias_slide = new Noticias();
		$noticias_slide->init = 0;
		$noticias_slide->max = 3;

		$noticia_maior = new Noticias();
		$noticia_maior->init = 3;
		$noticia_maior->max = 1;

		$noticias_menores = new Noticias();
		$noticias_menores->init = 4;
		$noticias_menores->max = 2;

		$maiores_politica = new Noticias();
		$maiores_politica->categoria = "politica";
		$maiores_politica->init = 0;
		$maiores_politica->max = 2;

		$dados = array(
			'noticias_slide' => $noticias_slide->get_news(),
			'noticia_maior' => $noticia_maior->get_news(),
			'noticias_menores' => $noticias_menores->get_news(),
			'maiores_politica' => $maiores_politica->get_by_categoria()
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