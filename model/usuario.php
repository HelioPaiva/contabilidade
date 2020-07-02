<?php

require_once 'model/database.php';

class usuario {
	private //$id,
	$nome,
	$perfil,
	$cref,
	$dataAdmissao,
	$dataDemissao,
	$login,
	$senha,
	$dataNascimento,
	$cpf,
	$rg,
	$sexo,
	$cep,
	$endereco,
	$bairro,
	$cidade,
	$uf,
	$numero,
	$telefone,
	$celular,
	$email,
	$observacao,
	$dataCadastro,
	$status,
	$dataModificacao,
	$idUnidade;

	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getperfil(){
		return $this->perfil;
	}
	public function getidUnidade(){
		return $this->idUnidade;
	}
	public function getcref(){
		return $this->cref;
	}
	public function getnome(){
		return $this->nome;
	}
	public function getdataNascimento(){
		return $this->dataNascimento;
	}
	public function getcpf(){
		return $this->cpf;
	}
	public function getrg(){
		return $this->rg;
	}
	public function getsexo(){
		return $this->sexo;
	}
	public function getcep(){
		return $this->cep;
	}
	public function getendereco(){
		return $this->endereco;
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
	public function getnumero(){
		return $this->numero;
	}
	public function gettelefone(){
		return $this->telefone;
	}
	public function getcelular(){
		return $this->celular;
	}
	public function getemail(){
		return $this->email;
	}
	public function getdataAdmissao(){
		return $this->dataAdmissao;
	}
	public function getdataDemissao(){
		return $this->dataDemissao;
	}
	public function getobservacao(){
		return $this->observacao;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getstatus(){
		return $this->status;
	}
	public function getlogin(){
		return $this->login;
	}
	public function getsenha(){
		return $this->senha;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}

	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setid($id){
		$this->id = $id;
	}
	public function setperfil($perfil){
		$this->perfil = $perfil;
	}
	public function setidUnidade($idUnidade){
		$this->idUnidade = $idUnidade;
	}
	public function setcref($cref){
		$this->cref = $cref;
	}
	public function setnome($nome){
		$this->nome = $nome;
	}
	public function setdataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function setrg($rg){
		$this->rg = $rg;
	}
	public function setsexo($sexo){
		$this->sexo = $sexo;
	}
	public function setcep($cep){
		$this->cep = $cep;
	}
	public function setendereco($endereco){
		$this->endereco = $endereco;
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
	public function setnumero($numero){
		$this->numero = $numero;
	}
	public function settelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setcelular($celular){
		$this->celular = $celular;
	}
	public function setemail($email){
		$this->email = $email;
	}
	public function setdataAdmissao($dataAdmissao){
		$this->dataAdmissao = $dataAdmissao;
	}
	public function setdataDemissao($dataDemissao){
		$this->dataDemissao = $dataDemissao;
	}
	public function setobservacao($observacao){
		$this->observacao = $observacao;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setstatus($status){
		$this->status = $status;
	}
	public function setlogin($login){
		$this->login = $login;
	}
	public function setsenha($senha){
		$this->senha = $senha;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
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


}