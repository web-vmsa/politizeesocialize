<?php 

/*
* Classe para Categorias
*
* @package Categorias
* @author Victor <vmsa03@gmail.com>
*/
class Categorias extends model {

	public $nome;

	/*
	* Função de Verificar se a categoria existe
	* 
	* Esta função vai selecionar a categoria e as tags da categoria
	*
	* @param $nome string é o nome da categoria
	* @return true or false
	*/
	public function get_categoria(){

		$sql = "SELECT * FROM categorias WHERE nome = :nome";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $this->nome);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}