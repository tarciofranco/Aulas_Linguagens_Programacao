<?php
/**
 * 
 */

$nome_arquivo = '18122.txt';
$dir = 'arquivos/';

if(is_dir($dir)){
    
$abre_dir = fopen($dir.$nome_arquivo, 'r+');
var_dump($dir);

if($abre_dir){
    $i = 1;
    while($i <= 10){
        $data = date("d-m-y h:i:s");
        $texto = "$data - meu conteudo é: $i \n";
        fwrite($abre_dir, $texto);
        $i++;
    }
}else{
    print 'Erro abrindo diretorio';
}
}else{
    print 'Diretorio invalido';
}