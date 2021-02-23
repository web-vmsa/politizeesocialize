<?php 

/*
* Classe para Categorias
*
* @package Categorias
* @author Victor <vmsa03@gmail.com>
*/
class Categorias extends model {

	public $id;

	/*
	* Função de Verificar se a categoria existe
	* 
	* Esta função vai selecionar a categoria e as tags da categoria
	*
	* @param $id int é o id da categoria
	* @return true or false
	*/
	public function get_categoria(){

		$sql = "SELECT * FROM categorias WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $this->nome);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}