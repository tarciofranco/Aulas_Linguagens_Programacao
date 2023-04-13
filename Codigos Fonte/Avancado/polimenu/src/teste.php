<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nome Cardapio: <input name="nome" >
        Descrição Cardapio: <input name="descricao" >
        <input type="submit" name="enviar" value="Enviar Dados">
    </form>
    <hr>
</body>
</html>

<?php
include 'cardapio.php'; //Chamada da classe

$c = new Cardapio; //Instancia classe cardapio

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    //Chamando a funcao insere e gravando os dados no cardapio
    $c->Insere($nome, $descricao);    
}



//Listagem dos dados cadastrados;
$dados = $c->Listar();

print '<br>';
foreach ($dados as $key => $value) {
    # code...
    print '<strong> Codigo: </strong> '.$value['id']. ' - <strong> Nome: </strong>'.$value['nome']. ' - <strong>Descrição: </strong> '.$value['descricao'].'<br>';
}


?>