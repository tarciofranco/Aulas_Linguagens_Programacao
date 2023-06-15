<?php
/**
 * Arquivo de configuracao para chamada das classes
 */

/** Chamada das classes */
require_once __DIR__. '../../front-admin/src/cardapio.php';
require_once __DIR__. '../../front-admin/src/curtidas.php';

/** Instancia das classes */
$cardapio = new Cardapio;
$curtidas = new Curtidas;

?>


