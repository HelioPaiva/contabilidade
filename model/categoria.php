<?php

require_once 'model/database.php';

class categoria {
	private
	//$id,
	$categoria,
	$dataCadastro,
	$dataModificacao,
	$idLicenca,
	$idUsuario;


	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getcategoria(){
		return $this->categoria;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}
	public function getidLicenca(){
		return $this->idLicenca;
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
	public function setcategoria($categoria){
		$this->categoria = $categoria;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
	}
	public function setidLicenca($idLicenca){
		$this->idLicenca = $idLicenca;
	}
	public function setidUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}


	/*Métodos*/
	public function add(categoria $categoria){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($categoria as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO categoria " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		header("Location: seleciona-categoria.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";

	}

	public function edit(categoria $categoria, $id){
		$db = new database();
		$itens = null;

		foreach ($categoria as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE categoria";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id;
		
		$db->edit($sql);
		header("Location: seleciona-categoria.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT *
		FROM categoria";

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idCategoria){
		$db = new database();

		$sql = "SELECT *
		FROM categoria
		Where id = ".$idCategoria."
		";

		$result = $db->read($sql);
		return $result;
	}

	public function preencheTipoServico(){
		$db = new database();

		/*$sql = "SELECT distinct s.tipo as idServico
		,ts.tipoServico
        ,ts.id as idTipo
		FROM tipo_servico ts
		LEFT JOIN servico s 
		ON ts.id = s.tipo 
		";
		*/
		$sql = "SELECT * FROM erp.tipo_servico";

		$result = $db->readAll($sql);
		return $result;
	}

}