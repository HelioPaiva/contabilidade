<?php

require_once 'model/database.php';

class cliente {
	private //$id,
	$id,
	$cnpj,
	$nomeFantasia,
	$razaoSocial,
	$cep,
	$endereco,
	$numero,
	$bairro,
	$cidade,
	$uf,
	$email,
	$telefone,
	$celular,
	$contato,
	$obs,
	$dataCadastro,
	$dataModificacao,
	$idUsuario,
	$cnpjClienteCadastro;


	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getidCliente(){
		return $this->idCliente;
	}
	public function getcnpj(){
		return $this->cnpj;
	}
	public function getnomeFantasia(){
		return $this->nomeFantasia;
	}
	public function getrazaoSocial(){
		return $this->razaoSocial;
	}
	public function getcep(){
		return $this->cep;
	}
	public function getendereco(){
		return $this->endereco;
	}
	public function getnumero(){
		return $this->numero;
	}
	public function getbairro(){
		return $this->bairro;
	}
	public function getcidade(){
		return $this->cidade;
	}
	public function getuf(){
		return $this->uf;
	}
	public function getemail(){
		return $this->email;
	}
	public function gettelefone(){
		return $this->telefone;
	}
	public function getcelular(){
		return $this->celular;
	}
	public function getcontato(){
		return $this->contato;
	}
	public function getobs(){
		return $this->obs;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}
	public function getidUsuario(){
		return $this->idUsuario;
	}
	public function getcnpjClienteCadastro(){
		return $this->cnpjClienteCadastro;
	}


	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setidCliente($idCliente){
		$this->idCliente = $idCliente;
	}
	public function setcnpj($cnpj){
		$this->cnpj = $cnpj;
	}
	public function setnomeFantasia($nomeFantasia){
		$this->nomeFantasia = $nomeFantasia;
	}
	public function setrazaoSocial($razaoSocial){
		$this->razaoSocial = $razaoSocial;
	}
	public function setcep($cep){
		$this->cep = $cep;
	}
	public function setendereco($endereco){
		$this->endereco = $endereco;
	}
	public function setnumero($numero){
		$this->numero = $numero;
	}
	public function setbairro($bairro){
		$this->bairro = $bairro;
	}
	public function setcidade($cidade){
		$this->cidade = $cidade;
	}
	public function setuf($uf){
		$this->uf = $uf;
	}
	public function setemail($email){
		$this->email = $email;
	}
	public function settelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setcelular($celular){
		$this->celular = $celular;
	}
	public function setcontato($contato){
		$this->contato = $contato;
	}
	public function setobs($obs){
		$this->obs = $obs;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
	}
	public function setidUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
	public function setcnpjClienteCadastro($cnpjClienteCadastro){
		$this->cnpjClienteCadastro = $cnpjClienteCadastro;
	}


	/*Métodos*/
	public function add(cliente $cliente){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($cliente as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO cliente " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		echo "Dados Cadastrados Com Sucesso!";

	}

	public function edit(cliente $cliente, $id){
		$db = new database();
		$itens = null;

		foreach ($cliente as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE cliente";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id;
		
		$db->edit($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT * 
		FROM cliente";

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idCliente){
		$db = new database();

		$sql = "SELECT *
		FROM cliente
		Where id = ".$idCliente."
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