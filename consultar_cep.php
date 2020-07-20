<?php
 
$cep = $_POST['cep'];
 
//$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);

//$cep = '09840345';

$dados = file_get_contents("https://viacep.com.br/ws/".$cep."/json/");


/*
$dados['sucesso'] = (string) $reg->cep;
$dados['rua']     = (string) $reg->logradouro;
$dados['bairro']  = (string) $reg->bairro;
$dados['cidade']  = (string) $reg->localidade;
$dados['estado']  = (string) $reg->uf;

/*
$dados['sucesso'] = (string) $reg->resultado;
$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['bairro']  = (string) $reg->bairro;
$dados['cidade']  = (string) $reg->cidade;
$dados['estado']  = (string) $reg->uf;
*/

//print_r($dados);

echo $dados;

//echo json_encode($dados);
 
?>
