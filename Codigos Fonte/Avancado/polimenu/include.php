<?php
/**
 * Arquivo de configuracao para chamada das classes
 */

/** Chamada das classes */
require_once __DIR__.'/src/cardapio.php';



/** Instancia das classes */
$cardapio = new Cardapio;

?>


<!--Chamada DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.4/b-2.3.6/sl-1.6.2/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="Editor-2.1.2/css/editor.dataTables.css">
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.4/b-2.3.6/sl-1.6.2/datatables.min.js"></script>
<script type="text/javascript" src="Editor-2.1.2/js/dataTables.editor.js"></script>
