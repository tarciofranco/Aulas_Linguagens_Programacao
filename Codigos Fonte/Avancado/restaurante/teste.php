<html>
    <head>
        <title>Projeto - Restaurante Facil</title>
        <link href="css/main.css" rel="stylesheet" >
    </head>
    <body>        

        <form action="" id="frm" method="post">
            <input type="radio" name="opc" id="" value="1"> Sim
            <input type="radio" name="opc" id="" Value="2"> Não
            <input type="submit" value="Validar" name="btn" >
        </form>
       

        <?php
            if(isset($_POST['btn'])){
                //var_dump($_POST['opc']);

                $opc = $_POST['opc'];

                if($opc == '1'){
                    print 'Escolheu SIM';
                }
                elseif($opc == '2'){
                    print 'Escolheu NAO';
                }else{
                    print 'Opc invalida';
                }
            }
        ?>
    </body>

</html>