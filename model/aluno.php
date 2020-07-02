<?php

require_once 'model/database.php';

class aluno {
	private //$id,
	$nome,
	$dataNascimento,
	$cpf,
	$rg,
	$sexo,
	$cep,
	$endereco,
	$bairro,
	$cidade,
	$uf,
	$numero,
	$telefone,
	$celular,
	$email,
	$profissao,
	$empresa,
	$telefoneEmpresa,
	$parentesco,
	$responsavel,
	$cpfResponsavel,
	$dataValidadeExame,
	$observacao,
	$conheceuEscola,
	$dataCadastro,
	$status,
	$dataModificacao,
	$idUnidade,
	$experimental,
	$idExperimental,
	$fase,
	$dataFase,
	$dataPrimeiraMatricula,
	$idUsuario,
	$alunoIndicou,
	$professorIndicou;

	/*Gets*/
	/*
	public function getid(){
		return $this->id;
	}
	*/
	public function getnome(){
		return $this->nome;
	}
	public function getdataNascimento(){
		return $this->dataNascimento;
	}
	public function getcpf(){
		return $this->cpf;
	}
	public function getrg(){
		return $this->rg;
	}
	public function getsexo(){
		return $this->sexo;
	}
	public function getcep(){
		return $this->cep;
	}
	public function getendereco(){
		return $this->endereco;
	}
	public function getbairro(){
		return $this->bairro;
	}
	public function getcidade(){
		return $this->cidade;
	}
	public function getuf(){
		return $this->uf;
	}
	public function getnumero(){
		return $this->numero;
	}
	public function gettelefone(){
		return $this->telefone;
	}
	public function getcelular(){
		return $this->celular;
	}
	public function getemail(){
		return $this->email;
	}
	public function getprofissao(){
		return $this->profissao;
	}
	public function getempresa(){
		return $this->empresa;
	}
	public function gettelefoneEmpresa(){
		return $this->telefoneEmpresa;
	}
	public function getparentesco(){
		return $this->parentesco;
	}
	public function getresponsavel(){
		return $this->responsavel;
	}
	public function getcpfResponsavel(){
		return $this->cpfResponsavel;
	}
	public function getdataValidadeExame(){
		return $this->dataValidadeExame;
	}
	public function getobservacao(){
		return $this->observacao;
	}
	public function getconheceuEscola(){
		return $this->conheceuEscola;
	}
	public function getdataCadastro(){
		return $this->dataCadastro;
	}
	public function getstatus(){
		return $this->status;
	}
	public function getdataModificacao(){
		return $this->dataModificacao;
	}
	public function getidUnidade(){
		return $this->idUnidade;
	}
	public function getexperimental(){
		return $this->experimental;
	}
	public function getidExperimental(){
		return $this->idExperimental;
	}
	public function getfase(){
		return $this->fase;
	}
	public function getdataFase(){
		return $this->dataFase;
	}
	public function getdataPrimeiraMatricula(){
		return $this->dataPrimeiraMatricula;
	}
	public function getidUsuario(){
		return $this->idUsuario;
	}
	public function getalunoIndicou(){
		return $this->alunoIndicou;
	}
	public function getprofessorIndicou(){
		return $this->professorIndicou;
	}

	/*Sets*/
	/*
	public function setid($id){
		$this->id = $id;
	}
	*/
	public function setnome($nome){
		$this->nome = $nome;
	}
	public function setdataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function setrg($rg){
		$this->rg = $rg;
	}
	public function setsexo($sexo){
		$this->sexo = $sexo;
	}
	public function setcep($cep){
		$this->cep = $cep;
	}
	public function setendereco($endereco){
		$this->endereco = $endereco;
	}
	public function setbairro($bairro){
		$this->bairro = $bairro;
	}
	public function setcidade($cidade){
		$this->cidade = $cidade;
	}
	public function setuf($uf){
		$this->uf = $uf;
	}
	public function setnumero($numero){
		$this->numero = $numero;
	}
	public function settelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setcelular($celular){
		$this->celular = $celular;
	}
	public function setemail($email){
		$this->email = $email;
	}
	public function setprofissao($profissao){
		$this->profissao = $profissao;
	}
	public function setempresa($empresa){
		$this->empresa = $empresa;
	}
	public function settelefoneEmpresa($telefoneEmpresa){
		$this->telefoneEmpresa = $telefoneEmpresa;
	}
	public function setparentesco($parentesco){
		$this->parentesco = $parentesco;
	}
	public function setresponsavel($responsavel){
		$this->responsavel = $responsavel;
	}
	public function setcpfResponsavel($cpfResponsavel){
		$this->cpfResponsavel = $cpfResponsavel;
	}
	public function setdataValidadeExame($dataValidadeExame){
		$this->dataValidadeExame = $dataValidadeExame;
	}
	public function setobservacao($observacao){
		$this->observacao = $observacao;
	}
	public function setconheceuEscola($conheceuEscola){
		$this->conheceuEscola = $conheceuEscola;
	}
	public function setdataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function setstatus($status){
		$this->status = $status;
	}
	public function setdataModificacao($dataModificacao){
		$this->dataModificacao = $dataModificacao;
	}
	public function setidUnidade($idUnidade){
		$this->idUnidade = $idUnidade;
	}
	public function setexperimental($experimental){
		$this->experimental = $experimental;
	}
	public function setidExperimental($idExperimental){
		$this->idExperimental = $idExperimental;
	}
	public function setfase($fase){
		$this->fase = $fase;
	}
	public function setdataFase($dataFase){
		$this->dataFase = $dataFase;
	}
	public function setdataPrimeiraMatricula($dataPrimeiraMatricula){
		$this->dataPrimeiraMatricula = $dataPrimeiraMatricula;
	}
	public function setidUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
	public function setalunoIndicou($alunoIndicou){
		$this->alunoIndicou = $alunoIndicou;
	}
	public function setprofessorIndicou($professorIndicou){
		$this->professorIndicou = $professorIndicou;
	}

	/*Métodos*/
	public function add(aluno $aluno){
		$db = new database();

		$columns = null;
		$values = null;

		foreach ($aluno as $key => $value) {
			$columns .= trim($key, "'") . ",";
			$values .= "'$value',";
		}

		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		$sql = "INSERT INTO aluno " . "($columns)" . " VALUES " . "($values);";

		$db->add($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function edit(aluno $aluno, $id){
		$db = new database();
		$itens = null;

		foreach ($aluno as $key => $value) {
			$itens .= trim($key, "'") . "='$value',";
		}

    	// remove a ultima virgula
		$itens = rtrim($itens, ',');
		$sql  = "UPDATE aluno";
		$sql .= " SET $itens";
		$sql .= " WHERE id=" . $id . " AND idUnidade=1;";
		
		$db->edit($sql);
		echo "Dados Cadastrados Com Sucesso!";
	}

	public function readAll(){
		$db = new database();

		$sql = "SELECT id
		,nome
		,celular
		,responsavel
		,dataNascimento
		,dataValidadeExame 
		FROM aluno
		WHERE idUnidade = 1"
		;

		$result = $db->readAll($sql);
		return $result;
	}

	public function read($idAluno){
		$db = new database();

		$sql = "SELECT *
		FROM aluno
		Where id = ".$idAluno."
		";

		$result = $db->read($sql);
		return $result;
	}

	public function historicoAluno($idAluno){
		$db = new database();

		$sql = "SELECT h.*
		/*,u.nome*/ 
		FROM historicoAluno h 
			 	/*LEFT JOIN usuario u 
			 	ON h.idUsuario = u.id*/ 
			 	WHERE h.idAluno = '". $idAluno ."' 
			 	and h.idUnidade = 1  
			 	and h.descricao <> '' 
			 	order by 1 desc";

			 	$result = $db->readAll($sql);
			 	return $result;
	}

}