<?php 

/*
* Classe para Notícias
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Noticias extends model {

	public $id;
	public $id_usuario;
	public $categoria;
	public $titulo;
	public $descricao;
	public $tags;
	public $url;
	public $arquivo;
	public $arquivo_prop;
	public $postagem;
	public $data;
	public $init;
	public $max;

	/*
	* Função de Pegar as notícias recentes
	* 
	* Esta função vai dar um select em todas notícias recentes do portal para o slide
	*
	* @param $init é o valor inicial do count do limit
	* @param $max é o valor final do count do limit
	* @return true or false
	*/
	public function get_news(){

		$sql = "SELECT usuarios.id, usuarios.nome, noticias.id, noticias.id_usuario, noticias.titulo, noticias.arquivo, noticias.url, noticias.arquivo_prop, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.status = '1' ORDER BY noticias.id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':init', $this->init, PDO::PARAM_INT);
		$sql->bindValue(':max', $this->max, PDO::PARAM_INT);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar as notícias por categoria
	* 
	* Esta função vai dar um select em todas as notícias de uma categoria, determinadas
	* pelo init, max e categoria
	*
	* @param $categoria string é o nome da categoria
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_by_categoria(){

		$sql = "SELECT usuarios.id, usuarios.nome, noticias.id, noticias.categoria, noticias.id_usuario, noticias.titulo, noticias.arquivo, noticias.url, noticias.tags, noticias.arquivo_prop, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.status = '1' AND noticias.categoria = :categoria ORDER BY noticias.id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':categoria', $this->categoria);
		$sql->bindValue(':init', $this->init, PDO::PARAM_INT);
		$sql->bindValue(':max', $this->max, PDO::PARAM_INT);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar as notícias por categoria e video
	* 
	* Esta função vai dar um select em todas as notícias que são videos de uma categoria, determinadas
	* pelo init, max e categoria
	*
	* @param $categoria string é o nome da categoria
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_videos(){

		$sql = "SELECT usuarios.id, usuarios.nome, noticias.id, JSON_VALUE(noticias.arquivo_prop, '$.tipo'), noticias.categoria, noticias.id_usuario, noticias.titulo, noticias.tags, noticias.descricao, noticias.arquivo, noticias.url, noticias.arquivo_prop, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.status = '1' AND noticias.categoria = :categoria AND JSON_VALUE(noticias.arquivo_prop, '$.tipo') = 'video' ORDER BY noticias.id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':categoria', $this->categoria);
		$sql->bindValue(':init', $this->init, PDO::PARAM_INT);
		$sql->bindValue(':max', $this->max, PDO::PARAM_INT);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar a notícia pela url
	* 
	* Esta função vai dar um select e buscar a notícia pela sua url passada
	*
	* @return true or false
	*/
	public function get_new(){

		$sql = "SELECT usuarios.id, usuarios.nome, usuarios.foto, noticias.id, noticias.categoria, noticias.id_usuario, noticias.titulo, noticias.descricao, noticias.tags, noticias.postagem, noticias.arquivo, noticias.url, noticias.arquivo_prop, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.status = '1' AND noticias.url = :url";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':url', $this->url);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	/*
	* Função de busca resultados
	* 
	* Esta função vai dar um select nas notícias com o titulo parecido ao da pesquisa
	*
	* @return $titulo string é o titulo da noticia, do tipo LIKE
	* @return true or false
	*/
	public function get_resultados($titulo){

		$sql = "SELECT usuarios.id, usuarios.nome, noticias.id, noticias.categoria, noticias.id_usuario, noticias.titulo, noticias.arquivo, noticias.url, noticias.tags, noticias.arquivo_prop, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.titulo LIKE '%$titulo%' AND noticias.status = '1' ORDER BY noticias.id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':init', $this->init, PDO::PARAM_INT);
		$sql->bindValue(':max', $this->max, PDO::PARAM_INT);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

}