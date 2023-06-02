<?php

include 'src/curtidas.php';
$c = new Curtidas;

$curtidas = $c->Curtida(22,0,1);
var_dump($curtidas);
