<?php

require_once 'model/usuario.php';

function add(){
	$usuario = new usuario();
	if (!empty($_POST['nome'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUnidade = 1;
		$status = 'Ativo';
		$senha = "123";
		$idUsuario =  "23";//$_SESSION['usuario'];
		
		//$usuario->setid($_POST['id']);
		$usuario->setperfil($_POST['perfil']);
		$usuario->setidUnidade($idUnidade);
		$usuario->setcref($_POST['cref']);
		$usuario->setnome($_POST['nome']);
		$usuario->setdataNascimento($_POST['dataNascimento']);
		$usuario->setcpf($_POST['cpf']);
		$usuario->setrg($_POST['rg']);
		$usuario->setsexo($_POST['sexo']);
		$usuario->setcep($_POST['cep']);
		$usuario->setendereco($_POST['endereco']);
		$usuario->setbairro($_POST['bairro']);
		$usuario->setcidade($_POST['cidade']);
		$usuario->setuf($_POST['uf']);
		$usuario->setnumero($_POST['numero']);
		$usuario->settelefone($_POST['telefone']);
		$usuario->setcelular($_POST['celular']);
		$usuario->setemail($_POST['email']);
		$usuario->setdataAdmissao($_POST['dataAdmissao']);
		$usuario->setdataDemissao($_POST['dataDemissao']);
		$usuario->setobservacao($_POST['observacao']);
		$usuario->setdataCadastro($dataCadastro);
		$usuario->setstatus($status);
		$usuario->setlogin($_POST['email']);
		$usuario->setsenha($senha);
		$usuario->setdataModificacao($dataModificacao);
		$usuario->add($usuario);
	}
}

function readAll(){
	$usuario = new usuario();
	global $usuariosBD;
	$usuariosBD = $usuario->readAll();
}

function edit(){
	$usuario = new usuario();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['nome'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUnidade = 1;
			$status = 'Ativo';
			$senha = "123";
			$idUsuario =  "23";//$_SESSION['usuario'];
			
			//$usuario->setid($_POST['id']);
			$usuario->setperfil($_POST['perfil']);
			$usuario->setidUnidade($idUnidade);
			$usuario->setcref($_POST['cref']);
			$usuario->setnome($_POST['nome']);
			$usuario->setdataNascimento($_POST['dataNascimento']);
			$usuario->setcpf($_POST['cpf']);
			$usuario->setrg($_POST['rg']);
			$usuario->setsexo($_POST['sexo']);
			$usuario->setcep($_POST['cep']);
			$usuario->setendereco($_POST['endereco']);
			$usuario->setbairro($_POST['bairro']);
			$usuario->setcidade($_POST['cidade']);
			$usuario->setuf($_POST['uf']);
			$usuario->setnumero($_POST['numero']);
			$usuario->settelefone($_POST['telefone']);
			$usuario->setcelular($_POST['celular']);
			$usuario->setemail($_POST['email']);
			$usuario->setdataAdmissao($_POST['dataAdmissao']);
			$usuario->setdataDemissao($_POST['dataDemissao']);
			$usuario->setobservacao($_POST['observacao']);
			$usuario->setdataCadastro($dataCadastro);
			$usuario->setstatus($status);
			$usuario->setlogin($_POST['email']);
			$usuario->setsenha($senha);
			$usuario->setdataModificacao($dataModificacao);
			$usuario->edit($usuario,$id);
		}else{
			$usuario = new usuario();
			global $usuarioBD;
			$usuarioBD = $usuario->read($id);
		}
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


