<?php 
    $cnpj = str_replace('-','',str_replace('/','',str_replace('.','',$_POST['cnpj'])));
    $dados = file_get_contents("https://www.receitaws.com.br/v1/cnpj/".$cnpj);
echo $dados;
?>
