<?php 

/*
* Classe para Colunistas
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Colunistas extends model {

	public $nome;
	public $categoria_id;
	public $init;
	public $max;

	/*
	* Função de Pegar todos os colunistas
	* 
	* Esta função vai selecionar todos os colunistas por demanda no portal
	*
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_all(){

		$sql = "SELECT * FROM usuarios WHERE nivel = 'escritor' ORDER BY id DESC LIMIT :max OFFSET :init";
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
	* Função de Pegar todos os colunistas pela categoria
	* 
	* Esta função vai selecionar todos os colunistas pela sua categoria
	*
	* @param $categoria string é a categoria 
	* @return true or false
	*/
	public function get_colunistas_by_categoria(){

		$sql = "SELECT * FROM usuarios WHERE nivel = 'escritor' AND categoria_id = :categoria_id ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':categoria_id', $this->categoria_id);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar Colunista 
	* 
	* Esta função vai selecionar o respectivo colunista pelo seu nome
	*
	* @param $nome string é o nome do colunista 
	* @return true or false
	*/
	public function get_colunista(){

		$sql = "SELECT * FROM usuarios WHERE nivel = 'escritor' AND nome = :nome AND status = '1'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $this->nome);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar Postagens do colunista 
	* 
	* Esta função vai selecionar todos os posts do colunista
	*
	* @param $nome string é o nome do colunista 
	* @return true or false
	*/
	public function get_colunista_posts(){

		$sql = "SELECT usuarios.id, usuarios.nome, opinioes.id, opinioes.categoria_id, opinioes.id_usuario, opinioes.titulo, opinioes.arquivo, opinioes.url, opinioes.tags, opinioes.tipo, opinioes.legenda, opinioes.data, DAY(opinioes.data) as dia, MONTH(opinioes.data) as mes, YEAR(opinioes.data) as ano FROM opinioes INNER JOIN usuarios ON usuarios.id = opinioes.id_usuario WHERE opinioes.status = '1' AND usuarios.nome = :nome ORDER BY opinioes.id DESC LIMIT :max OFFSET :init";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $this->nome);
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