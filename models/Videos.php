<?php 

/*
* Classe para Video
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Videos extends model {

	public $categoria;
	public $init;
	public $max;

	/*
	* Função de Pegar todos os videos
	* 
	* Esta função vai selecionar todos os videos do portal, apenas das notícias
	*
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_all_videos(){

		$sql = "SELECT titulo, descricao, arquivo, tipo, url, DAY(data) as dia, MONTH(data) as mes, YEAR(data) as ano FROM noticias  WHERE tipo = 'video' ORDER BY id DESC LIMIT :max OFFSET :init";
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
	* Função de Pegar todos os videos de uma categoria
	* 
	* Esta função vai selecionar todos os videos de uma categoria do portal
	*
	* @param $categoria string é o nome da categoria
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_videos(){

		$sql = "SELECT titulo, descricao, arquivo, categoria, url, DAY(data) as dia, MONTH(data) as mes, YEAR(data) as ano FROM noticias  WHERE arquivo LIKE '%.mp4%' AND categoria = :categoria ORDER BY id DESC LIMIT :max OFFSET :init";
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

}