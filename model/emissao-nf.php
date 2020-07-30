<?php

require_once 'model/database.php';

class emissaoNF{
	private /*$id,*/
	$cnpj,
	$valor,
	$dataVencimento,
	$servico,
	$obs,
	$dataCadastro,
	$dataModificacao;

	public function getCNPJ(){
		return $this-> cnpj;
	}
	public function getValor(){
		return $this-> valor;
	}
	public function getDataVencimento(){
		return $this-> dataVencimento;
	}
	public function getServico(){
		return $this-> servico;
	}
	public function getObs(){
		return $this-> obs;
	}
	public function getDataCadastro(){
		return $this-> dataCadastro;
	}
	public function getDataModificacao(){
		return $this-> dataModificacao;
	}

	public function setCNPJ($cnpj){
		$this-> cnpj = $cnpj;
	}
	public function setValor($valor){
		$this-> valor = $valor;
	}
	public function setDataVencimento($dataVencimento){
		$this-> dataVencimento = $dataVencimento;
	}
	public function setServico($servico){
		$this-> servico = $servico;
	}
	public function setObs($obs){
		$this-> obs = $obs;
	}
	public function setDataCadastro($dataCadastro){
		$this-> dataCadastro = $dataCadastro;
	}
	public function setDataModificacao($dataModificacao){
		$this-> dataModificacao = $dataModificacao;
	}

	public function add(emissaoNF $emissao){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($emissao as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO emissao_nf " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		header("Location: seleciona-emissao-nf.php?r=1");
		//echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT u.* 
		FROM cliente u";
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

	public function readServicos(){
		$db = new database();

		$sql = "SELECT * 
		FROM servico";
		$result = $db->readAll($sql);
		return $result;
	}
}