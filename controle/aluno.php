<?php

require_once 'model/aluno.php';

function add(){
	$aluno = new aluno();
	if (!empty($_POST['nome'])) {
		
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");
		$dataModificacao = $today->format("Y-m-d H:i:s");
		$idUnidade = 1;
		$status = 'Ativo';
		$experimental = 0;
		$idExperimental = 0;
		$fase = 'PP - Fase 1';
		$dataFase = $today->format("Y-m-d");
		$dataPrimeiraMatricula = $today->format("Y-m-d");


		$idUsuario =  "23";//$_SESSION['usuario'];

		$aluno->setnome($_POST['nome']);
		$aluno->setdataNascimento($_POST['dataNascimento']);
		$aluno->setcpf($_POST['cpf']);
		$aluno->setrg($_POST['rg']);
		$aluno->setsexo($_POST['sexo']);
		$aluno->setcep($_POST['cep']);
		$aluno->setendereco($_POST['endereco']);
		$aluno->setbairro($_POST['bairro']);
		$aluno->setcidade($_POST['cidade']);
		$aluno->setuf($_POST['uf']);
		$aluno->setnumero($_POST['numero']);
		$aluno->settelefone($_POST['telefone']);
		$aluno->setcelular($_POST['celular']);
		$aluno->setemail($_POST['email']);
		$aluno->setprofissao($_POST['profissao']);
		$aluno->setempresa($_POST['empresa']);
		$aluno->settelefoneEmpresa($_POST['telefoneEmpresa']);
		$aluno->setparentesco($_POST['parentesco']);
		$aluno->setresponsavel($_POST['responsavel']);
		$aluno->setcpfResponsavel($_POST['cpfResponsavel']);
		$aluno->setdataValidadeExame($_POST['dataValidadeExame']);
		$aluno->setobservacao($_POST['observacao']);
		$aluno->setconheceuEscola($_POST['conheceuEscola']);
		$aluno->setdataCadastro($dataCadastro);
		$aluno->setstatus($status);
		$aluno->setdataModificacao($dataModificacao);
		$aluno->setidUnidade($idUnidade);
		$aluno->setexperimental($experimental);
		$aluno->setidExperimental($idExperimental);
		$aluno->setfase($fase);
		$aluno->setdataFase($dataFase);
		$aluno->setdataPrimeiraMatricula($dataPrimeiraMatricula);
		$aluno->setidUsuario($idUsuario);
		$aluno->setalunoIndicou($_POST['alunoIndicou']);
		$aluno->setprofessorIndicou($_POST['professorIndicou']);
		$aluno->add($aluno);
		header('Location: cadastro-aluno.php?r=1');
	}
}

function readAll(){
	$aluno = new aluno();
	global $alunosBD;
	$alunosBD = $aluno->readAll();
}

function edit(){
	$aluno = new aluno();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['nome'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$dataModificacao = $today->format("Y-m-d H:i:s");
			$idUnidade = 1;
			$status = 'Ativo';
			$experimental = 0;
			$idExperimental = 0;
			$fase = 'PP - Fase 1';
			$dataFase = $today->format("Y-m-d");
			$dataPrimeiraMatricula = $today->format("Y-m-d");
		$idUsuario =  "23";//$_SESSION['usuario'];
		$aluno->setnome($_POST['nome']);
		$aluno->setdataNascimento($_POST['dataNascimento']);
		$aluno->setcpf($_POST['cpf']);
		$aluno->setrg($_POST['rg']);
		$aluno->setsexo($_POST['sexo']);
		$aluno->setcep($_POST['cep']);
		$aluno->setendereco($_POST['endereco']);
		$aluno->setbairro($_POST['bairro']);
		$aluno->setcidade($_POST['cidade']);
		$aluno->setuf($_POST['uf']);
		$aluno->setnumero($_POST['numero']);
		$aluno->settelefone($_POST['telefone']);
		$aluno->setcelular($_POST['celular']);
		$aluno->setemail($_POST['email']);
		$aluno->setprofissao($_POST['profissao']);
		$aluno->setempresa($_POST['empresa']);
		$aluno->settelefoneEmpresa($_POST['telefoneEmpresa']);
		$aluno->setparentesco($_POST['parentesco']);
		$aluno->setresponsavel($_POST['responsavel']);
		$aluno->setcpfResponsavel($_POST['cpfResponsavel']);
		$aluno->setdataValidadeExame($_POST['dataValidadeExame']);
		$aluno->setobservacao($_POST['observacao']);
		$aluno->setconheceuEscola($_POST['conheceuEscola']);
		$aluno->setdataCadastro($dataCadastro);
		$aluno->setstatus($status);
		$aluno->setdataModificacao($dataModificacao);
		$aluno->setidUnidade($idUnidade);
		$aluno->setexperimental($experimental);
		$aluno->setidExperimental($idExperimental);
		$aluno->setfase($fase);
		$aluno->setdataFase($dataFase);
		$aluno->setdataPrimeiraMatricula($dataPrimeiraMatricula);
		$aluno->setidUsuario($idUsuario);
		$aluno->setalunoIndicou($_POST['alunoIndicou']);
		$aluno->setprofessorIndicou($_POST['professorIndicou']);
		$aluno->edit($aluno,$id);
		header('Location: cadastro-aluno.php?r=1');

	}else{
		$aluno = new aluno();
		global $alunoBD;
		$alunoBD = $aluno->read($id);
	}
	}
}

function historicoAluno(){
	$id = $_GET['id'];
	$aluno = new aluno();
	global $historicos;
	$historicos = $aluno->historicoAluno($id);
}
