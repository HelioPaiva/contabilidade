<?php

require_once 'model/lancamento.php';

function add(){
	$lancamento = new lancamento();
	if (!empty($_POST['descricao'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = $_SESSION['idUsuario'];
		$idLicenca = $_SESSION['licenca'];


		
		//$lancamento->setid($_POST['id']);
		$lancamento->setdescricao($_POST['descricao']);
		$lancamento->settipo($_POST['tipo']);
		$lancamento->setvalor($_POST['valor']);
		$lancamento->setdataCadastro($dataCadastro);
		$lancamento->setdataModificacao($dataModificacao);
		$lancamento->setdataVencimento($_POST['dataVencimento']);
		$lancamento->setpago($_POST['pago']);
		$lancamento->setidUsuario($idUsuario);
		$lancamento->setidLicenca($idLicenca);	
		$lancamento->add($lancamento);
	}
}

function readAllLancamento(){

	$lancamento = new lancamento();
	global $lancamentosBD;
	$lancamentosBD = $lancamento->readAll();
}

function editLancamento(){
	$lancamento = new lancamento();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['descricao'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];
			
			//$lancamento->setid($_POST['id']);
			$lancamento->setdescricao($_POST['descricao']);
			$lancamento->settipo($_POST['tipo']);
			$lancamento->setvalor($_POST['valor']);
			$lancamento->setdataCadastro($dataCadastro);
			$lancamento->setdataModificacao($dataModificacao);
			$lancamento->setdataVencimento($_POST['dataVencimento']);
			$lancamento->setpago($_POST['pago']);
			$lancamento->setidUsuario($idUsuario);
			$lancamento->setidLicenca($idLicenca);
			$lancamento->edit($lancamento,$id);
		}else{
			$lancamento = new lancamento();
			global $lancamentoBD;
			$lancamentoBD = $lancamento->read($id);
		}
	}
}


function totalEntrada(){
	$lancamento = new lancamento();
	global $lancamentoEntradaBD;
	$lancamentoEntradaBD = $lancamento->totalEntrada();
}

function totalSaida(){
	$lancamento = new lancamento();
	global $lancamentoSaidaBD;
	$lancamentoSaidaBD = $lancamento->totalSaida();
}

function totalSaidaFuturo(){
	$lancamento = new lancamento();
	global $lancamentoSaidaFuturoBD;
	$lancamentoSaidaFuturoBD = $lancamento->totalSaidaFuturo();
}


