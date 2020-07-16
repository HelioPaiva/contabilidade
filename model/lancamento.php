<?php

require_once 'model/database.php';

class lancamento {
	private /*$id,*/
	$descricao,
	$tipo,
	$valor,
	$dataCadastro,
	$dataModificacao,
	$dataVencimento,
	$pago;

	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getdescricao(){
		return $this->descricao;
	}
	public function gettipo(){
		return $this->tipo;
	}
	public function getvalor(){
		return $this->valor;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}
	public function getdataVencimento(){
		return $this->dataVencimento;
	}
	public function getpago(){
		return $this->pago;
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
	public function setdescricao($descricao){
		$this->descricao = $descricao;
	}
	public function settipo($tipo){
		$this->tipo = $tipo;
	}
	public function setvalor($valor){
		$this->valor = $valor;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
	}
	public function setdataVencimento($dataVencimento){
		$this->dataVencimento = $dataVencimento;
	}
	public function setpago($pago){
		$this->pago = $pago;
	}


	/*Métodos*/
	public function add(lancamento $lancamento){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($lancamento as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO lancamento " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		echo "Dados Cadastrados Com Sucesso!";

	}

	public function edit(lancamento $lancamento, $id){
		$db = new database();
		$itens = null;

		foreach ($lancamento as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE lancamento";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id;
		
		$db->edit($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT id
		,descricao
		,case when tipo = 1 then 'Entrada' else 'Saída' end as tipo
		,valor
		,dataCadastro
		,dataModificacao
		,dataVencimento
		,case when pago = 1 then 'Sim' else 'Não' end as pago 
		FROM lancamento";

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idLancamento){
		$db = new database();

		$sql = "SELECT *
		FROM lancamento
		Where id = ".$idLancamento."
		";

		$result = $db->read($sql);
		return $result;
	}

	public function totalEntrada(){
		$db = new database();

		$sql = "SELECT sum(valor) as totalEntrada 
		FROM erp.lancamento
		WHERE tipo = 1
		AND pago = 1";

		$result = $db->read($sql);
		return $result;
	}

	public function totalSaida(){
		$db = new database();

		$sql = "SELECT sum(valor) as totalSaida 
		FROM erp.lancamento
		WHERE tipo = 2
		AND pago = 1";
		
		$result = $db->read($sql);
		return $result;
	}

	public function totalSaidaFuturo(){
		$db = new database();

		$sql = "SELECT (sum(valor) * - 1) as totalSaidaFuturo 
		FROM erp.lancamento
		WHERE tipo = 2
		AND pago = 0";
		
		$result = $db->read($sql);
		return $result;
	}

	

	

}