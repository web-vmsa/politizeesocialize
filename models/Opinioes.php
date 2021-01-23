<?php 

/*
* Classe para Opiniões
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Opinioes extends model {

	public $init;
	public $max;

	/*
	* Função de Pegar todas as opiniões
	* 
	* Esta função vai selecionar todas as opiniões do portal, apenas das notícias
	*
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_all_opi(){

		$sql = "SELECT usuarios.id, usuarios.nome, opinioes.id, opinioes.categoria, opinioes.id_usuario, opinioes.titulo, opinioes.arquivo, opinioes.url, opinioes.tags, opinioes.arquivo_prop, opinioes.data, DAY(opinioes.data) as dia, MONTH(opinioes.data) as mes, YEAR(opinioes.data) as ano FROM opinioes INNER JOIN usuarios ON usuarios.id = opinioes.id_usuario WHERE opinioes.status = '1' ORDER BY opinioes.id DESC LIMIT :max OFFSET :init";
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