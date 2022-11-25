<?php require_once 'config.php'; ?>
<html>
    <head>
        <title>EECP Bancario - Cadastro de Usuario</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome" id="nome"></td>
                </tr>                
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senha" id="senha"></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar"></td>
                </tr>
            </table>
        </form>

        <table border="1">
            <thead>
                <tr>
                    <td>Codigo</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>#</td>
                </tr>
            </thead>
            <tbody>
            <?php                
                if(opendir(PASTA_DB)){
                    if(file_exists(PASTA_DB.TABLE_LOGIN)){
                       $db = simplexml_load_file(PASTA_DB.TABLE_LOGIN);                                              
                       foreach ($db->usuario as $value) {
                        # code...
                        
                       }
                       
                       
                     ?>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                     <?php  
                    }else{
                        'sem dados';
                    }
                }else{
                    print 'Diretorio invalido';
                }
                ?>      
            </tbody>

        </table>
   
<?php
