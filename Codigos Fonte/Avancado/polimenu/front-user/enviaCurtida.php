<?php
require 'config.php';

$codCardapio    = $_POST['cardapio'];
$gostei         = $_POST['gostei'];
$naogostei      = $_POST['naogostei'];

$curtidas->Curtida($codCardapio, $gostei, $naogostei);

?>