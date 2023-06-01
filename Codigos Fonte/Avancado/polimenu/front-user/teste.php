<?php
include 'config.php';

var_dump($cardapio->Listar());
 $dados = $cardapio->Listar();
 foreach ($dados as $key => $value) {
     # code...
    
     print $value['nome'].'<br>';

 }

for($i = 1; $i <= 10; $i++){
    print $i;

}