<?php 
require_once 'model/database.php';

class alerta {

	private //$id,
	$descricao,
	$dataCadastro,
	$dataModificacao;

	public function getdescricao(){
		return $this->descricao;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}

	public function setdescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT id
		,descricao
		,dataCadastro
		,dataModificacao
        ,date_format(dataCadastro, '%M %d, %Y') as dataCadastroFormatada
        ,case when alertaLido = '' or alertaLido is null then 'Não lido' else 'Lida' end as alertaLido
		FROM alerta";
		$result = $db->readAll($sql);
		return $result;
	}

	public function readAllNoLida(){
		$db = new database();

		$sql = "SELECT id
		,descricao
		,dataCadastro
		,dataModificacao
        ,date_format(dataCadastro, '%M %d, %Y') as dataCadastroFormatada
        ,case when alertaLido = '' or alertaLido is null then 'Não lido' else 'Lida' end as alertaLido
		FROM alerta
		WHERE alertaLido <> 1";
		$result = $db->readAll($sql);
		return $result;
	}

	public function edit($id, $dataModicacao){
		$db = new database();
    	$sql = "UPDATE alerta set dataModificacao = '".$dataModicacao."', alertaLido = 1 where id = ".$id;
		$db->edit($sql);
	}
}