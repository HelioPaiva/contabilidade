<?php

require_once 'model/database.php';

class servico {
	private
	//$id,
	$servico,
	$tipo,
	$descricao,
	$cnpjClienteCadastro,
	$dataCadastro,
	$dataModificacao,
	$idUsuario;


	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getservico(){
		return $this->servico;
	}
	public function gettipo(){
		return $this->tipo;
	}
	public function getdescricao(){
		return $this->descricao;
	}
	public function getcnpjClienteCadastro(){
		return $this->cnpjClienteCadastro;
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


	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setservico($servico){
		$this->servico = $servico;
	}
	public function settipo($tipo){
		$this->tipo = $tipo;
	}
	public function setdescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setcnpjClienteCadastro($cnpjClienteCadastro){
		$this->cnpjClienteCadastro = $cnpjClienteCadastro;
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

	

	/*Métodos*/
	public function add(servico $servico){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($servico as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO servico " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		header("Location: seleciona-servico.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";

	}

	public function edit(servico $servico, $id){
		$db = new database();
		$itens = null;

		foreach ($servico as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE servico";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id;
		
		$db->edit($sql);
		header("Location: seleciona-servico.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT * 
		FROM servico";

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idServico){
		$db = new database();

		$sql = "SELECT s.*,ts.tipoServico
		FROM servico s
		LEFT JOIN tipo_servico ts
		ON s.tipo = ts.id
		Where s.id = ".$idServico."
		";

		$result = $db->read($sql);
		return $result;
	}

	public function preencheTipoServico(){
		$db = new database();

		$sql = "SELECT distinct s.tipo as idServico
		,ts.tipoServico
        ,ts.id as idTipo
		FROM tipo_servico ts
		LEFT JOIN servico s 
		ON ts.id = s.tipo 
		";

		$result = $db->readAll($sql);
		return $result;
	}

}