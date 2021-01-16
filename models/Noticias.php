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
	public $tipo;
	public $init;
	public $max;

	/*
	* Função de Pegar as notícias recentes
	* 
	* Esta função vai dar um select em todas notícias recentes do portal para o slide
	*
	* @param $tipo string é o tipo da notícia, se é imagem ou vídeo
	* @param $init é o valor inicial do count do limit
	* @param $max é o valor final do count do limit
	* @return true or false
	*/
	public function get_news_slide(){

		$sql = "SELECT usuarios.id, usuarios.nome, noticias.id, noticias.id_usuario, noticias.titulo, noticias.arquivo, noticias.url, noticias.arquivo_prop, JSON_EXTRACT(noticias.arquivo_prop, '$.tipo') as tipo, noticias.data, DAY(noticias.data) as dia, MONTH(noticias.data) as mes, YEAR(noticias.data) as ano FROM noticias INNER JOIN usuarios ON usuarios.id = noticias.id_usuario WHERE noticias.status = '1' AND JSON_EXTRACT(noticias.arquivo_prop, '$.tipo') = :tipo ORDER BY noticias.id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':tipo', $this->tipo);
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