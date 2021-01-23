<?php 

/*
* Classe para Colunistas
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Colunistas extends model {

	public $categoria;
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

		$sql = "SELECT * FROM usuarios WHERE JSON_VALUE(usuario_prop, '$.nivel') = 'escritor' ORDER BY id DESC LIMIT :max OFFSET :init";
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

		$sql = "SELECT * FROM usuarios WHERE JSON_VALUE(usuario_prop, '$.categoria') = :categoria ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':categoria', $this->categoria);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

}