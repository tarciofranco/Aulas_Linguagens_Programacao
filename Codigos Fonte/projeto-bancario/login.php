<?php require_once 'config.php' ?>
<html>
    <head>
        <title>EECP Bancario - Login</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senha" id="senha"></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" id="acessar" name="acessar" value="Acessar"></td>
                </tr>
            </table>
        </form>

        <?php
        //Valida login
        if(isset($_POST['acessar'])){
            /** Abre pasta_db */
            if(opendir(PASTA_DB)){
                if(file_exists(PASTA_DB.TABLE_LOGIN)){ /** Abre pasta e arquivo de banco de dados */
                    //Capturando dados do formulario
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    //valida login
                    $autorizado = false; 

                    //Objeto xml 
                    $db = simplexml_load_file(PASTA_DB.TABLE_LOGIN);                           
                    
                    //Percorre objeto com dados do usuario
                    foreach ($db as $usuario) {
                        //Verifica se existe o email enviado pelo formulario no arquivo de login
                        if($usuario->email == $email){
                            //Verifica se a senha
                            if($senha == $usuario->senha){
                                $autorizado = true; //Ativa variavel de controle
                                break; //pausa verificacao 
                            }
                        }
                    }
                    //Verifica se a variavel de controle foi ativida
                    if($autorizado == true){
                        //Concede acesso ao sistema
                        print 'Acesso concedido.';
                    }else{
                        //Retorna msg para o usuario de dados incorretos
                        print 'Usuario e/ou senha incorretos';
                    }                    
                }else{
                    print 'Arquivo de banco de dados invalido';
                }
            }else{
                print 'Diretorio do banco de dados invalido';
            }
        }
        ?>
    </body>
</html>