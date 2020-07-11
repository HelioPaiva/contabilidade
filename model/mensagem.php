<?php 
include_once 'model/database.php';

class mensagem {

	private //$id,
	$de,
	$para,
	$assunto,
	$descricao,
	$dataCadastro,
	$dataModificacao;



	public function getde(){
		return $this->de;
	}
	public function getpara(){
		return $this->para;
	}
	public function getassunto(){
		return $this->assunto;
	}
	public function getdescricao(){
		return $this->descricao;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}

	public function setde($de){
		$this->de = $de;
	}
	public function setpara($para){
		$this->para = $para;
	}
	public function setassunto($assunto){
		$this->assunto = $assunto;
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

	public function readAllMensagem(){
		$db = new database();

		$sql = "SELECT id
		,de
		,para
		,assunto
		,descricao
		,dataCadastro
		,dataModificacao
        ,date_format(dataCadastro, '%M %d, %Y') as dataCadastroFormatada
        ,case when mensagemLido = '' or mensagemLido is null then 'Não lido' else 'Lida' end as mensagemLido
		FROM mensagem";
		$result = $db->readAll($sql);
		return $result;
	}

	public function readAllNoLidaMensagem(){
		$db = new database();

		$sql = "SELECT m.id
		,m.de
        ,u.sexo
		,m.para
		,m.assunto
		,m.descricao
		,m.dataCadastro
		,m.dataModificacao
        ,date_format(m.dataCadastro, '%M %d, %Y') as dataCadastroFormatada
        ,case when m.mensagemLido = '' or m.mensagemLido is null then 'Não lido' else 'Lida' end as mensagemLido
		FROM mensagem m
        LEFT JOIN usuario u
        ON m.de = u.nome
		WHERE m.mensagemLido <> 1";
		$result = $db->readAll($sql);
		return $result;
	}

	public function editMensagem($id, $dataModicacao){
		$db = new database();
    	$sql = "UPDATE mensagem set dataModificacao = '".$dataModicacao."', mensagemLido = 1 where id = ".$id;
		$db->edit($sql);
	}
}