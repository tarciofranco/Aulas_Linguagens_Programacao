<html>
    <head>
        <title>Calculadora Simples com Form</title>
    </head>
    <body>
        <form id="form_calculadora" method="post">
            <?php 
                if(isset($_POST['n1'])){
                    $val_n1 = $_POST['n1'];
                }
                if(isset($_POST['n2'])){
                    $val_n2 = $_POST['n2'];
                }                
            ?>
            <!-- Campos -->
            <label> Numero 1: </label> <input type="number" name="n1" value="<?php print $val_n1; ?>"> <br>
            <label> Numero 2: </label> <input type="number" name="n2" value="<?php print $val_n2; ?>"> <br>
            <!-- Botoes -->
            <input type="submit" name="somar" title="Somar Numeros" value="+" >
            <input type="submit" name="subtrair" title="Subtrair Numeros" value="-" >
            <input type="submit" name="dividir" title="Dividir Numeros" value="/" >
            <input type="submit" name="multiplicar" title="Multiplicar Numeros" value="*" >
        </form>
    
        <?php
            $operador = ''; //default
            $resultado = null; //defautl
            
            if(isset($_POST['somar'])){
                $operador = '+';
            }
            if(isset($_POST['subtrair'])){
                $operador = '+';
            }
            if(isset($_POST['multiplicar'])){
                $operador = '*';
            }
            if(isset($_POST['dividir'])){
                $operador = '/';
            }
            
            if($operador <> ''){
                if(empty($_POST['n1']) or empty($_POST['n2']) ){
                    print "Campos vazios";
                }else{
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    
                    switch ($operador ) {
                        case '+':
                            # code...
                            $resultado = $n1 + $n2;
                            break;
                        case '-':
                            # code...
                            $resultado = $n1 - $n2;
                            break;
                        case '/':
                            # code...
                            $resultado = $n1 / $n2;
                            break;
                        case '*':
                            # code...
                            $resultado = $n1 * $n2;
                            break;                                                                                
                        default:
                            # code...
                            break;
                    }
                    print "Resultado do calculo : $resultado";
                }
            }
        
        ?>
    </body>
</html>