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
	public $day;
	public $month;
	public $year;

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

	/*
	* Função de Pegar Jogos do dia
	* 
	* Esta função vai selecionar os jogos pela sua data
	*
	* @param $day int é o dia 
	* @param $month int é o mês
	* @param $year int é o ano
	* @return true or false
	*/
	public function get_by_date(){

		$sql = "SELECT id, jogo_prop, status_jogo, placar, status_jogo, url, data, DAY(data) as dia, MONTH(data) as mes, YEAR(data) as ano FROM jogos WHERE DAY(data) = :day AND MONTH(data) = :month AND YEAR(data) = :year ORDER BY id DESC";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':day', $this->day);
		$sql->bindValue(':month', $this->month);
		$sql->bindValue(':year', $this->year);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return false;
		}

	}

	/*
	* Função de Pegar Jogo pela url
	* 
	* Esta função vai selecionar um jogo pela sua url passada
	*
	* @param $url string é a url do jogo
	* @return true or false
	*/
	public function get_jogo(){

		$sql = "SELECT usuarios.id, usuarios.nome, usuarios.foto, usuarios.social, jogos.id, jogos.titulo, jogos.descricao, jogos.jogo_prop, jogos.arquivo, jogos.categoria, jogos.url, jogos.lances, jogos.status_jogo, jogos.placar, jogos.arquivo_prop, jogos.id_usuario, jogos.tags, jogos.data, DAY(jogos.data) as dia, MONTH(jogos.data) as mes, YEAR(jogos.data) as ano FROM jogos INNER JOIN usuarios ON usuarios.id = jogos.id_usuario WHERE jogos.url = :url AND jogos.status = '1'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':url', $this->url);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

}