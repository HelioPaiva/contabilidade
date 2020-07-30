<?php

require_once 'model/database.php';

class usuario {
	private /*$id,*/
	$nome,
	$sexo,
	$email,
	$password,
	$idStatus,
	$idPerfil,
	$dataCadastro,
	$dataModificacao,
	$obs;

	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getnome(){
		return $this-> nome;
	}
	public function getsexo(){
		return $this-> sexo;
	}
	public function getemail(){
		return $this-> email;
	}
	public function getpassword(){
		return $this-> password;
	}
	public function getidStatus(){
		return $this-> idStatus;
	}
	public function getidPerfil(){
		return $this-> idPerfil;
	}
	public function getdataCadastro(){
		return $this-> dataCadastro;
	}
	public function getdataModificacao(){
		return $this-> dataModificacao;
	}
	public function getobs(){
		return $this-> obs;
	}


	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setnome($nome){
		$this-> nome = $nome;
	}
	public function setsexo($sexo){
		$this-> sexo = $sexo;
	}
	public function setemail($email){
		$this-> email = $email;
	}
	public function setpassword($password){
		$this-> password = $password;
	}
	public function setidStatus($idStatus){
		$this-> idStatus = $idStatus;
	}
	public function setidPerfil($idPerfil){
		$this-> idPerfil = $idPerfil;
	}
	public function setdataCadastro($dataCadastro){
		$this-> dataCadastro = $dataCadastro;
	}
	public function setdataModificacao($dataModificacao){
		$this-> dataModificacao = $dataModificacao;
	}
	public function setobs($obs){
		$this-> obs = $obs;
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
		header("Location: seleciona-usuario.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";
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
		$sql .= " WHERE id=" . $id;
		
		$db->edit($sql);
		header("Location: seleciona-usuario.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT u.id, u.nome, u.email, p.perfil 
		FROM usuario u
		LEFT JOIN perfil p
		ON u.idPerfil = p.id";

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

	public function atualizacaoDeSenha($id, $password){
		$db = new database();
		$sql = "UPDATE usuario set password = '".$password."' where id = ".$id;
		$db->edit($sql);

	}


}