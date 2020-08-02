<?php

require_once 'model/categoria.php';

function add(){
	$categoria = new categoria();
	if (!empty($_POST['categoria'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = $_SESSION['idUsuario'];
		$idLicenca = $_SESSION['licenca'];

		//$produto->setid($_POST['id']);
		$categoria->setcategoria($_POST['categoria']);
		$categoria->setdataCadastro($dataCadastro);
		$categoria->setdataModificacao($dataModificacao);
		$categoria->setidUsuario($idUsuario);
		$categoria->setidLicenca($idLicenca);	
		$categoria->add($categoria);
	}
}

function readAllCategoria(){

	$categoria = new categoria();
	global $categoriasBD;
	$categoriasBD = $categoria->readAll();
}

function editCategoria(){
	$categoria = new categoria();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['categoria'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];
			
			//$servico->setid($_POST['id']);
			$categoria->setcategoria($_POST['categoria']);
			$categoria->setdataCadastro($dataCadastro);
			$categoria->setdataModificacao($dataModificacao);
			$categoria->setidUsuario($idUsuario);
			$categoria->setidLicenca($idLicenca);	
			$categoria->edit($categoria,$id);
		}else{
			$categoria = new categoria();
			global $categoriaBD;
			$categoriaBD = $categoria->read($id);
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
