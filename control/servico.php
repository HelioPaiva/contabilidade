<?php

require_once 'model/servico.php';

function add(){
	$servico = new servico();
	if (!empty($_POST['servico'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = $_SESSION['idUsuario'];
		$idLicenca = $_SESSION['licenca'];

		//$servico->setid($_POST['id']);
		$servico->setservico($_POST['servico']);
		$servico->settipo($_POST['tipo']);
		$servico->setdescricao($_POST['descricao']);
		$servico->setdataCadastro($dataCadastro);
		$servico->setdataModificacao($dataModificacao);
		$servico->setidUsuario($idUsuario);
		$servico->setidLicenca($idLicenca);	
		$servico->add($servico);
	}
}

function readAllServico(){

	$servico = new servico();
	global $servicosBD;
	$servicosBD = $servico->readAll();
}

function editServico(){
	$servico = new servico();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['servico'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];
			
			//$servico->setid($_POST['id']);
			$servico->setservico($_POST['servico']);
			$servico->settipo($_POST['tipo']);
			$servico->setdescricao($_POST['descricao']);
			$servico->setdataCadastro($dataCadastro);
			$servico->setdataModificacao($dataModificacao);
			$servico->setidUsuario($idUsuario);
			$servico->setidLicenca($idLicenca);	
			$servico->edit($servico,$id);
		}else{
			$servico = new servico();
			global $servicoBD;
			$servicoBD = $servico->read($id);
		}
	}
}

function preencheTipoServico(){
	$servico = new servico();
	global $tipoServicosBD;
	$tipoServicosBD = $servico->preencheTipoServico();
	//var_dump($tipoServicosBD);
	//exit();
}


