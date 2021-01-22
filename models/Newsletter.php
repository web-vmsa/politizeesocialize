<?php 

/*
* Classe para Newsletter
*
* @package Portal
* @author Victor <vmsa03@gmail.com>
*/
class Newsletter extends model {

	public $email;
	public $status;

	/*
	* Função de Verificar se usuário é assinante ou não
	* 
	* Esta função vai selecionar se o e-mail já está cadastrado na newsletter
	*
	* @param $email string é o email do assinante
	* @param $status string é a situação do usuário
	* @return true or false
	*/
	public function get_assinante(){

		$sql = "SELECT * FROM assinantes WHERE email = :email AND status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':status', $this->status);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return false;
		}

	}

	/*
	* Função de Assinar newsletter
	* 
	* Esta função vai adicionar um novo assinante a newsletter
	*
	* @param $email string é o email do assinante
	* @param $status string é a situação do usuário
	* @return true or false
	*/
	public function set_assinante(){

		$sql = "INSERT INTO assinantes SET email = :email, status = :status";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':status', $this->status);
		$sql->execute();

	}

}