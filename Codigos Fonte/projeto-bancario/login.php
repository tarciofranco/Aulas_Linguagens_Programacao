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
                    <td colspan="2"> <input type="submit" id="acessar" name="acessar"></td>
                </tr>
            </table>
        </form>

        <?php
        //Valida login
        if(isset($_POST['acessar'])){
            //diretorio do db
            $dir = './db/';
            $file_name = 'login.xml';
            if(opendir($dir)){
                if(file_exists($dir.$file_name)){                    
                    $db = simplexml_load_file($dir.$file_name);                    
                    //var_dump($db);                    

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    if($email == $db->email AND $senha == $db->senha){
                        print 'Passou';
                    }else{
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