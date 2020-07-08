<?php

require_once 'model/database.php';

class usuario {
	private //$id,
	$email,
	$password,
	$dataCadastro;

	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getemail(){
		return $this->email;
	}
	public function getpassword(){
		return $this->password;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}

	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setemail($email){
		$this->email = $email;
	}
	public function setpassword($password){
		$this->password = $password;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}

	/*Métodos*/
	public function add(usuario $usuario){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($usuario as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO usuario " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function edit(usuario $usuario, $id){
		$db = new database();
		$itens = null;

		foreach ($usuario as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE usuario";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id . " AND idUnidade=1;";
		
		$db->edit($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT id
		,nome
		,perfil
		,status
		,dataAdmissao 
		FROM usuario";

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idUsuario){
		$db = new database();

		$sql = "SELECT *
		FROM usuario
		Where id = ".$idUsuario."
		";

		$result = $db->read($sql);
		return $result;
	}

	public function login($email, $password){
		$db = new database();

		$sql = "SELECT *, p.perfil
				FROM usuario u
				LEFT JOIN perfil p
				ON u.idPerfil = p.id
				where email = '".$email."' 
				and password = '".$password."' 
				and idStatus = 1";
		$result = $db->read($sql);
		return $result;
	}


}