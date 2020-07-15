<?php

require_once 'model/servico.php';

function add(){
	$servico = new servico();
	if (!empty($_POST['servico'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = '0000';
		$cnpjClienteCadastro = '9999';

		//$servico->setid($_POST['id']);
		$servico->setservico($_POST['servico']);
		$servico->settipo($_POST['tipo']);
		$servico->setdescricao($_POST['descricao']);
		$servico->setcnpjClienteCadastro($cnpjClienteCadastro);
		$servico->setdataCadastro($dataCadastro);
		$servico->setdataModificacao($dataModificacao);
		$servico->setidUsuario($idUsuario);	
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
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = '0000';
			$cnpjClienteCadastro = '9999';
			
			//$servico->setid($_POST['id']);
			$servico->setservico($_POST['servico']);
			$servico->settipo($_POST['tipo']);
			$servico->setdescricao($_POST['descricao']);
			$servico->setcnpjClienteCadastro($cnpjClienteCadastro);
			$servico->setdataModificacao($dataModificacao);
			$servico->setidUsuario($idUsuario);	
			$servico->edit($servico,$id);
		}else{
			$servico = new servico();
			global $servicoBD;
			$servicoBD = $servico->read($id);
		}
	}
}

function logout (){
	session_destroy();
	header('Location: index.php'); 
}


