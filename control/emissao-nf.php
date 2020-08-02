<?php

require_once 'model/emissao-nf.php';

function readAllEmissaoNF(){
	$emissaonf = new emissaoNF();
	global $emissoesBD;
	$emissoesBD = $emissaonf->readAll();
}

function readDadosParaEmitirNF(){
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_POST['cnpj'])) {
			$emissaonf = new emissaoNF();
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$dataCadastro = $today->format("Y-m-d H:i:s");
			$idUsuario = $_SESSION['idUsuario'];
			$idLicenca = $_SESSION['licenca'];
			
			$emissaonf->setCNPJ($_POST['cnpj']);
			$emissaonf->setValor($_POST['valor']);
			$emissaonf->setDataVencimento($_POST['dataVencimento']);
			$emissaonf->setServico($_POST['servico']);
			$emissaonf->setObs($_POST['obs']);
			$emissaonf->setDataCadastro($dataCadastro);
			$emissaonf->setDataModificacao($dataCadastro);
			$emissaonf->setidUsuario($idUsuario);
			$emissaonf->setidLicenca($idLicenca);
			$emissaonf->add($emissaonf);

		}else{
			$emissaonf = new emissaoNF();
			global $dadosEmissaoBD;
			$dadosEmissaoBD = $emissaonf->read($id);
		}
	}
}

function preencheComboServico(){
	$emissaonf = new emissaoNF();
	global $servicosClienteBD;
	$servicosClienteBD = $emissaonf->readServicos();


  //$cnpjCliente = $_SESSION['cnpjCliente'];
  //$sql = "select * from servico where cnpjClienteCadastro = '".$cnpjCliente."' order by 1 desc";
  //$servicos = read($sql); 
}

