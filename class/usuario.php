<?php 

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//Get e Set Usuario
	private function getIdusuario(){
		return $this->idusuario;
	}
	private function setIdusuario($value){
		$this->idusuario = $value;
	}

	//Get e Set Login
	private function getDeslogin(){
		return $this->deslogin;
	}
	private function setDeslogin($value){
		$this->deslogin = $value;
	}

	//Get e Set Senha
	private function getDessenha(){
		return $this->dessenha;
	}
	private function setDessenha($value){
		$this->dessenha = $value;
	}

	//Get e Set Cadastro
	private function getDtcadastro(){
		return $this->dtcadastro;
	}
	private function setDtcadastro($value){
		$this->dtcadastro = $value;
	}


	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

		if (count($results) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}

	}

	public function __toString(){
	    if ($this->getIdusuario()) {
	        return json_encode(array(
	            "idusuario"=>$this->getIdusuario(),
	            "deslogin"=>$this->getDeslogin(),
	            "dessenha"=>$this->getDessenha(),
	            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
	        ));
	    } else {
	        return 'Usuário inexistente';
	    }
	}

	
}


 ?>