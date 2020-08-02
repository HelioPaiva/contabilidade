<?php

require_once 'model/cliente.php';

function add(){
	$cliente = new cliente();
	if (!empty($_POST['cnpj'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUsuario = $_SESSION['idUsuario'];
		$idLicenca = $_SESSION['licenca'];

		
		//$cliente->setidCliente($_POST['id']);
		$cliente->setcnpj($_POST['cnpj']);
		$cliente->setnomeFantasia($_POST['nomeFantasia']);
		$cliente->setrazaoSocial($_POST['razaoSocial']);
		$cliente->setcep($_POST['cep']);
		$cliente->setendereco($_POST['endereco']);
		$cliente->setnumero($_POST['numero']);
		$cliente->setbairro($_POST['bairro']);
		$cliente->setcidade($_POST['cidade']);
		$cliente->setuf($_POST['uf']);
		$cliente->setemail($_POST['email']);
		$cliente->settelefone($_POST['telefone']);
		$cliente->setcelular($_POST['celular']);
		$cliente->setcontato($_POST['contato']);
		$cliente->setobs($_POST['obs']);
		$cliente->setdataCadastro($dataCadastro);
		$cliente->setdataModificacao($dataModificacao);
		$cliente->setidUsuario($idUsuario);
		$cliente->setidLicenca($idLicenca);
		$cliente->add($cliente);
	}
}

function readAllCliente(){

	$cliente = new cliente();
	global $clientesBD;
	$clientesBD = $cliente->readAll();
}

function editCliente(){
	$cliente = new cliente();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['cnpj'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];

			//$cliente->setid($_POST['id']);
			//$cliente->setidCliente($_POST['id']);
			$cliente->setcnpj($_POST['cnpj']);
			$cliente->setnomeFantasia($_POST['nomeFantasia']);
			$cliente->setrazaoSocial($_POST['razaoSocial']);
			$cliente->setcep($_POST['cep']);
			$cliente->setendereco($_POST['endereco']);
			$cliente->setnumero($_POST['numero']);
			$cliente->setbairro($_POST['bairro']);
			$cliente->setcidade($_POST['cidade']);
			$cliente->setuf($_POST['uf']);
			$cliente->setemail($_POST['email']);
			$cliente->settelefone($_POST['telefone']);
			$cliente->setcelular($_POST['celular']);
			$cliente->setcontato($_POST['contato']);
			$cliente->setobs($_POST['obs']);
			$cliente->setdataModificacao($dataModificacao);
			$cliente->setidUsuario($idUsuario);
			$cliente->setidLicenca($idLicenca);
			$cliente->edit($cliente,$id);
		}else{
			$cliente = new cliente();
			global $clienteBD;
			$clienteBD = $cliente->read($id);
		}
	}
}

function atualizacaoDeSenha(){
	if (isset($_POST['novaPassword'])) {
		$cliente = new usuario();
		$password = $_POST['novaPassword'];
		$id = $_SESSION['idUsuario'];
		$cliente->atualizacaoDeSenha($id,$password);
	}
	
}

function login (){
	session_start();
	if (isset($_POST['btn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cliente = new usuario();
		$clienteBD = $cliente->login($email,$password);
		if ($clienteBD['email'] == $email && $clienteBD['password'] == $password && $clienteBD['idStatus'] == 1) {
			$_SESSION['idUsuario'] = $clienteBD['id'];
			$_SESSION['idEmail'] = $email;
			$_SESSION['nome'] = $clienteBD['nome'];
			$_SESSION['perfil'] = $clienteBD['perfil'];
			$_SESSION['sexo'] = $clienteBD['sexo'];
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


