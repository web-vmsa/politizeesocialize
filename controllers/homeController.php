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
		$maiores_politica->categoria_id = 1;
		$maiores_politica->init = 0;
		$maiores_politica->max = 2;

		$menores_politica = new Noticias();
		$menores_politica->categoria_id = 1;
		$menores_politica->init = 2;
		$menores_politica->max = 4;

		$maior_televisao = new Noticias();
		$maior_televisao->categoria_id = 2;
		$maior_televisao->init = 0;
		$maior_televisao->max = 1;

		$menores_televisao = new Noticias();
		$menores_televisao->categoria_id = 2;
		$menores_televisao->init = 1;
		$menores_televisao->max = 2;

		$videos_televisao = new Noticias();
		$videos_televisao->categoria_id = 2;
		$videos_televisao->init = 0;
		$videos_televisao->max = 2;

		$resultados = new Jogos();
		$resultados->status_jogo = "Fim de jogo";
		$resultados->init = 0;
		$resultados->max = 4;

		$agendados = new Jogos();
		$agendados->status_jogo = "Agendado";
		$agendados->init = 0;
		$agendados->max = 4;

		$noticias_jogos = new Noticias();
		$noticias_jogos->categoria_id = 3;
		$noticias_jogos->init = 0;
		$noticias_jogos->max = 4;

		$videos_esportes = new Noticias();
		$videos_esportes->categoria_id = 3;
		$videos_esportes->init = 0;
		$videos_esportes->max = 2;

		$slide_esportes = new Jogos();
		$slide_esportes->status_jogo = "Fim de jogo";
		$slide_esportes->init = 0;
		$slide_esportes->max = 3;

		$dados = array(
			'noticias_slide' => $noticias_slide->get_news(),
			'noticia_maior' => $noticia_maior->get_news(),
			'noticias_menores' => $noticias_menores->get_news(),
			'maiores_politica' => $maiores_politica->get_by_categoria(),
			'menores_politica' => $menores_politica->get_by_categoria(),
			'maior_televisao' => $maior_televisao->get_by_categoria(),
			'menores_televisao' => $menores_televisao->get_by_categoria(),
			'videos_televisao' => $videos_televisao->get_videos(),
			'resultados' => $resultados->get_jogos(),
			'agendados' => $agendados->get_jogos(),
			'noticias_jogos' => $noticias_jogos->get_by_categoria(),
			'videos_esportes' => $videos_esportes->get_videos(),
			'slide_esportes' => $slide_esportes->get_jogos()
		);

		$this->loadView('home', $dados);

	}

	public function categoria($nome){


		$categoria = new Categorias();
		$categoria->nome = $nome;
		$categoria = $categoria->get_categoria();
 
		if($categoria == true) {

			if ($categoria['nome'] == "recentes") {

				$slide = new Noticias();
				$slide->init = 0;
				$slide->max = 3;

				$noticia_maior = new Noticias();
				$noticia_maior->init = 3;
				$noticia_maior->max = 1;

				$noticias_menores = new Noticias();
				$noticias_menores->init = 4;
				$noticias_menores->max = 2;

				$maiores_destaque = new Noticias();
				$maiores_destaque->init = 6;
				$maiores_destaque->max = 2;

				$menores_destaque = new Noticias();
				$menores_destaque->init = 8;
				$menores_destaque->max = 4;
				
				$dados = array(
					'categoria' => $categoria,
					'slide' => $slide->get_news(),
					'noticia_maior' => $noticia_maior->get_news(),
					'noticias_menores' => $noticias_menores->get_news(),
					'maiores_destaque' => $maiores_destaque->get_news(),
					'menores_destaque' => $menores_destaque->get_news()
				);

				$this->loadView('categoria', $dados);

			} else {

				$slide = new Noticias();
				$slide->categoria_id = $categoria['id'];
				$slide->init = 0;
				$slide->max = 3;

				$noticia_maior = new Noticias();
				$noticia_maior->categoria_id = $categoria['id'];
				$noticia_maior->init = 3;
				$noticia_maior->max = 1;

				$noticias_menores = new Noticias();
				$noticias_menores->categoria_id = $categoria['id'];
				$noticias_menores->init = 4;
				$noticias_menores->max = 2;

				$maiores_destaque = new Noticias();
				$maiores_destaque->categoria_id = $categoria['id'];
				$maiores_destaque->init = 6;
				$maiores_destaque->max = 2;

				$menores_destaque = new Noticias();
				$menores_destaque->categoria_id = $categoria['id'];
				$menores_destaque->init = 8;
				$menores_destaque->max = 4;
				
				$dados = array(
					'categoria' => $categoria,
					'slide' => $slide->get_by_categoria(),
					'noticia_maior' => $noticia_maior->get_by_categoria(),
					'noticias_menores' => $noticias_menores->get_by_categoria(),
					'maiores_destaque' => $maiores_destaque->get_by_categoria(),
					'menores_destaque' => $menores_destaque->get_by_categoria()
				);

				$this->loadView('categoria', $dados);

			}
		} else {

			$dados = array();

			$this->loadView("404", $dados);			

		}
		
	}

	public function resultados(){


		$dados = array();

		$this->loadView('resultados', $dados);
	}

	public function noticia($url){

		$noticia = new Noticias();
		$noticia->url = $url;
		$noticia = $noticia->get_new();

		if ($noticia == true) {

			$maiores = new Noticias();
			$maiores->categoria = $noticia['categoria'];
			$maiores->init = 0;
			$maiores->max = 2;

			$menores = new Noticias();
			$menores->categoria = $noticia['categoria'];
			$menores->init = 2;
			$menores->max = 4;

			$dados = array(
				'noticia' => $noticia,
				'maiores' => $maiores->get_by_categoria(),
				'menores' => $menores->get_by_categoria()
			);

			$this->loadView('postagem', $dados);

		} else {

			$dados = array();

			$this->loadView('404', $dados);

		}

	}
	
}