<?php
require_once 'config.php';

$nome = $_POST['parm01'];

$descricao = $_POST['parm02'];

$cardapio->Insere($nome, $descricao);

