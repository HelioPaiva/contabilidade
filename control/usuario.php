<?php

require_once 'model/usuario.php';

function add(){
	$usuario = new usuario();
	if (!empty($_POST['nome'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$status = 1;
		$password = "123";
		
		$usuario->setnome($_POST['nome']);
		$usuario->setsexo($_POST['sexo']);
		$usuario->setemail($_POST['email']);
		$usuario->setpassword($password);
		$usuario->setidstatus($status);
		$usuario->setidPerfil($_POST['perfil']);
		$usuario->setdataCadastro($dataCadastro);
		$usuario->setdataModificacao($dataModificacao);
		$usuario->setobs($_POST['obs']);
		$usuario->add($usuario);
	}
}

function readAllUsuario(){
	$usuario = new usuario();
	global $usuariosBD;
	$usuariosBD = $usuario->readAll();
}

function editUsuario(){
	$usuario = new usuario();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['nome'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$status = 1;
			$password = "123";

			$usuario->setnome($_POST['nome']);
			$usuario->setsexo($_POST['sexo']);
			$usuario->setemail($_POST['email']);
			$usuario->setpassword($password);
			$usuario->setidstatus($status);
			$usuario->setidPerfil($_POST['perfil']);
			$usuario->setdataCadastro($dataCadastro);
			$usuario->setdataModificacao($dataModificacao);
			$usuario->setobs($_POST['obs']);
			$usuario->edit($usuario,$id);
		}else{
			$usuario = new usuario();
			global $usuarioBD;
			$usuarioBD = $usuario->read($id);
		}
	}
}

function atualizacaoDeSenha(){
	if (isset($_POST['novaPassword'])) {
		$usuario = new usuario();
		$password = $_POST['novaPassword'];
		$id = $_SESSION['idUsuario'];
		$usuario->atualizacaoDeSenha($id,$password);
	}
	
}

function login (){
	session_start();
	if (isset($_POST['btn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$usuario = new usuario();
		$usuarioBD = $usuario->login($email,$password);
		if ($usuarioBD['email'] == $email && $usuarioBD['password'] == $password && $usuarioBD['idStatus'] == 1) {
			$_SESSION['idUsuario'] = $usuarioBD['id'];
			$_SESSION['idEmail'] = $email;
			$_SESSION['nome'] = $usuarioBD['nome'];
			$_SESSION['perfil'] = $usuarioBD['perfil'];
			$_SESSION['sexo'] = $usuarioBD['sexo'];
			$_SESSION['login'] = true;
			header('Location: home.php');
		}else{
			$_SESSION['login'] = false;
			header('Location: index.php?login=false'); 
		}
	}
}

function logout (){
	session_destroy();
	header('Location: index.php'); 
}


