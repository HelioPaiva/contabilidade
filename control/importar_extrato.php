<?php

require_once 'model/importar_extrato.php';
require_once 'PHPExcel/Classes/PHPExcel.php';

function add(){
	if (isset($_FILES['file'])) {
		//Captura nome do arquivo e caminho;
		$arquivo = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$error = $_FILES['file']['error'];
		$location = 'upload/';
		if ($error !== UPLOAD_ERR_OK) {
			echo 'Erro ao fazer o upload:', $error;
		}elseif (move_uploaded_file($tmp_name, $location . $arquivo)) {
                //echo 'Uploaded';    
		}

		$importacaoExtrato = new ImportarExtrato();
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$dataCadastro = $today->format("Y-m-d H:i:s");

		$objReader = new PHPExcel_Reader_Excel5();
		$objReader->setReadDataOnly(true);
		try {
			$objPHPExcel = $objReader->load("upload/".$arquivo);	
		} catch (Exception $e) {
			echo "erro na importação";
			exit();
		}
		


		$colunas = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();
		$total_colunas = PHPExcel_Cell::columnIndexFromString($colunas);

		$total_linhas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

		for ($linha=1; $linha <= $total_linhas; $linha++) {
			for ($coluna=0; $coluna<=$total_colunas - 1; $coluna++) {
				$dadosBanco = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna,$linha)->getValue();
				//Captura numero agência Template Itaú
				if ($dadosBanco == 'Agência:') {
					$agencia = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna + 1,$linha)->getValue();
				}
				//Captura numero da conta corrente template Itaú
				if ($dadosBanco == 'Conta:') {
					$conta = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna + 1,$linha)->getValue();
				}
				//Captura linha para inicio de importação de lançamentos
				if ($dadosBanco == 'data') {
					$mesExtrato = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna,$linha + 1)->getValue();
					$linhaInicialImportacao = $linha + 1;
					break;
				}		 
			}
		}

		//Formata data do extrato para mes e ano;
		$mesAnoExtrato = substr($mesExtrato,-4).'-'.substr($mesExtrato,3,-5);

		//Valida se mes e ano do extrato já foi importado;
		$sql = "SELECT count(1) as qtd FROM extrato_bancario
		where DATE_FORMAT(data, '%Y-%m') = '".$mesAnoExtrato."';";
		$mesAnoBD = $importacaoExtrato->read($sql);

		if ($mesAnoBD['qtd'] > 0) {
			header("Location: importar-extrato.php?r=1");
			//echo 'Este período de extrato já foi importado';		
		}else{
			//Cria o array de linha para importação
			for ($linha=$linhaInicialImportacao; $linha <= $total_linhas; $linha++) {
				for ($coluna=0; $coluna<=$total_colunas - 1; $coluna++) {
					$valor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($coluna,$linha)->getValue();
					$array[] = $valor;
				}

				//Formata data do extrato
				$dataExtrato =  substr($array[0],-4).'-'.substr($array[0],3,-5).'-'.substr($array[0],0,2);

				//Validar se é débito ou crédito
				if ($array[3] > 0) {
					$tipo = 1;
				}else{
					$tipo = 2;
				}
				//Cria query
				$sql = "insert into extrato_bancario(numBanco,numAgencia,numConta,tipo,descricao,valor,data,dataCadastro,idUsuario,idLicenca) values('341','".$agencia."','".$conta."','".$tipo."','". $array[1] ."','".number_format($array[3], 2, '.', '')."','".$dataExtrato."','".$dataCadastro."','".$_SESSION['idUsuario']."','".$_SESSION['licenca']."')";

				//Grava no banco de dados
				$importacaoExtrato->add($sql);

				//Limpa variavel
				unset($array);
			}
			header("Location: importar-extrato.php?r=2");
		}	
	}

}

function readAllExtrato(){
	if (isset($_POST['anoMesExtrato'])) {
		$importacaoExtrato = new ImportarExtrato();
		global $extratosBD;
		$extratosBD = $importacaoExtrato->readAll($_POST['anoMesExtrato']);
	}
}

function mesAnoExtrato(){
	$importacaoExtrato = new ImportarExtrato();
	global $anoMesExtratosBD;
	$anoMesExtratosBD = $importacaoExtrato->readAnoMesExtrato();
}


?>