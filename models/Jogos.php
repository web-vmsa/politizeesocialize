<?php 

/*
* Classe para Jogos
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Jogos extends model {

	public $id;
	public $id_usuario;
	public $categoria;
	public $jogo_prop;
	public $placar;
	public $status_jogo;
	public $titulo;
	public $descricao;
	public $tags;
	public $url;
	public $arquivo;
	public $arquivo_prop;
	public $lances;
	public $data;
	public $init;
	public $max;

	/*
	* Função de Pegar todos os jogos
	* 
	* Esta função vai selecionar todos os placares que o usuário criou
	*
	* @param $status_jogo string é o status do jogo
	* @param $init int é o valor inicial do count do limit
	* @param $max int é o valor final do count do limit
	* @return true or false
	*/
	public function get_jogos(){

		$sql = "SELECT * FROM jogos WHERE status_jogo = :status_jogo ORDER BY id DESC LIMIT :init,:max";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':status_jogo', $this->status_jogo);
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
	* Função de Pegar alcunha do time
	* 
	* Esta função vai selecionar a alcunha de um time
	*
	* @param $nome string é o nome do time
	* @return true or false
	*/
	public function get_alcunha($nome){

		$sql = "SELECT * FROM equipes WHERE nome = :nome";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}