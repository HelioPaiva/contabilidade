<?php 
include_once 'model/mensagem.php';


function readAllNoLidaMensagem(){
	$mensagem = new mensagem();
	global $mensagensNaoLidoBD;
	$mensagensNaoLidoBD = $mensagem->readAllNoLidaMensagem();
}

function readAllMensagem(){
	$mensagem = new mensagem();
	global $mensagensBD;
	$mensagensBD = $mensagem->readAll();
}

function editMensagem(){
	$mensagem = new mensagem();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$mensagemLido = 1;
		$mensagem->editMensagem($id,$dataModificacao);
		header('Location: mensagens.php');

	}else{
		$mensagem = new mensagem();
			global $mensagensBD;
			$mensagensBD = $mensagem->readAllMensagem();
		}
	}
