<?php 
require_once 'model/alerta.php';

function readAllNoLida(){
	$alerta = new alerta();
	global $alertasNaoLidoBD;
	$alertasNaoLidoBD = $alerta->readAllNoLida();
}

function readAll(){
	$alerta = new alerta();
	global $alertasBD;
	$alertasBD = $alerta->readAll();
}

function edit(){
	$alerta = new alerta();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$alertaLido = 1;
		$alerta->edit($id,$dataModificacao);
		header('Location: alertas.php');

	}else{
		$alerta = new alerta();
			global $alertasBD;
			$alertasBD = $alerta->readAll();
		}
	}
