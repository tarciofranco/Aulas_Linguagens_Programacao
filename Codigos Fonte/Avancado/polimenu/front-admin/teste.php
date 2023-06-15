<?php

include 'src/curtidas.php';
$c = new Curtidas;

$curtidas = $c->Curtida(6,1,0);
var_dump($curtidas);
