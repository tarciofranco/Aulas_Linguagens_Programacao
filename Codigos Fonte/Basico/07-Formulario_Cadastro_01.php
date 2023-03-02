<?php
/**
 * Desenvolver um formulario simples de cadastro de alunos
 * Campos do formulario: Nome, Matricula, Data Nascimento
 * Criar um botao "Cadastrar", para que o formulario 
 * possa ser validado nos seguintes criterios:
 * a) Validar se todos os campos foram preenhidos 
 * b) Validar a idade do aluno:
 *    - Se idade +18: Imprimir texto "Cadastro realizado com sucesso!"
 *    - Se idade -18: Imprimir texto "Idade não permite finalizar cadastro."
 * Funcoes: substr(), empty(), isset(), date()
 */

 ?>
<html>
    <head>
        <title>Cadastro de alunos</title>
    </head>
    <body>
        <form method="post">
            <label>Nome: </label>
            <input type="text" name="nome">
            <label>Matricula:</label>
            <input type="number" name="matricula">
            <label>Data de Nascimento:</label>
            <input type="date" name="data_nasc">
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
        <?php
            /*Validacao do form */
            if(isset($_POST['cadastrar'])){//Disparo do botao                 
                //Valida campos vazios
                if( empty($_POST['matricula']) OR empty($_POST['data_nasc']) OR empty($_POST['nome']) ){
                    print "Todos os campos são obrigatórios";
                }else{
                    //Posiciona ano atual
                    $ano_atual = date("Y");
                    //Posiciona Data de nascimento informada pelo usuario
                    $data_nasc = $_POST['data_nasc'];
                    //Calcula idade 
                    $idade = $ano_atual - substr($data_nasc, 0,4);
                    
                    if($idade > 18){//Valida se usuario tem +18
                        print 'Cadastro realizado com sucesso!';
                    }else{
                        print 'Idade não permite finalizar cadastro.';
                    }
                }
            }
            
        ?>
    </body>
</html>

