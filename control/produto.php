<?php

require_once 'model/produto.php';

function add(){
	$produto = new produto();
	if (!empty($_POST['produto'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = $_SESSION['idUsuario'];
		$idLicenca = $_SESSION['licenca'];

		//$produto->setid($_POST['id']);
		$produto->setproduto($_POST['produto']);
		$produto->setvalor($_POST['valor']);
		$produto->setdataCadastro($dataCadastro);
		$produto->setdataModificacao($dataModificacao);
		$produto->setidUsuario($idUsuario);
		$produto->setidLicenca($idLicenca);	
		$produto->add($produto);
	}
}

function readAllProduto(){

	$produto = new produto();
	global $produtosBD;
	$produtosBD = $produto->readAll();
}

function editProduto(){
	$produto = new produto();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['produto'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];
			
			//$servico->setid($_POST['id']);
			$produto->setproduto($_POST['produto']);
			$produto->setvalor($_POST['valor']);
			$produto->setdataCadastro($dataCadastro);
			$produto->setdataModificacao($dataModificacao);
			$produto->setidUsuario($idUsuario);
			$produto->setidLicenca($idLicenca);	
			$produto->edit($produto,$id);
		}else{
			$produto = new produto();
			global $produtoBD;
			$produtoBD = $produto->read($id);
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
