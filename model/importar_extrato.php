<?php
require_once 'model/database.php';

class ImportarExtrato {

	/*Métodos*/
	public function add($sql){
		$db = new database();

		/*
		$columns = null;
		$values = null;

		foreach ($lancamento as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO lancamento " . "($columns)" . " VALUES " . "($values);";
		*/

		$db->add($sql);		
		//echo "Dados Cadastrados Com Sucesso!";

	}

	public function read($sql){
		//echo $sql;
		//exit();
		$db = new database();
		$result = $db->read($sql);
		return $result;
	}

	public function readAll($anoMes){
		$db = new database();

		$sql = "SELECT numBanco
				,numAgencia
				,numConta
				,case when tipo = 1 then 'Entrada' else 'Saída' end as tipo  
				,descricao
				,valor
				,data
				,dataCadastro
				FROM extrato_bancario
				WHERE DATE_FORMAT(data, '%Y-%m') = '".$anoMes."' order by data asc";
		//echo $sql;
		//exit();
		$result = $db->readAll($sql);
		return $result;
	}

	public function readAnoMesExtrato(){
		$db = new database();
		$sql = "SELECT DISTINCT DATE_FORMAT(data, '%Y-%m') as ano_mes FROM extrato_bancario";
		$result = $db->readAll($sql);
		return $result;
	}
}


?>