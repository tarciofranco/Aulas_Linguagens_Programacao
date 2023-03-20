<HTML>
<HEAD>
<TITLE>Aula 01 JS</TITLE>
<style>
    body{
        background-color: #CCC;
    }
    #texto1{
        background-color: red;
    }
</style>
</HEAD>
<body>

    <!--Acicionando texto informativo, atraves da funcao ALERT pelo evento ONCLICK -->
    <span id="dispara_alert" onclick="alert('Texto informativo através do evento ONCLICK')"> Primeira Aula de JS - Clique aqui </span>
    <hr>
    <span id="altera_cor_fundo" onclick="document.body.style.backgroundColor = '#FC037B'">Clique aqui para alterar a cor de fundo da tela</span>
    <hr>
    <button onclick="confirm('Deseja realmente confirmar esta mensagem? ')"> Exemplo CONFIRM()</button>

    <?php
        if(isset($_POST['confirm'])){ 
            $h = 'Texto para exibição';
        }else{
            $h = '';
        }
    ?>
    <hr>
    <form action="" method="post">
        <button name='confirm' > Teste PHP</button>
        <input type="text" name='teste' id="teste" value="<?php print $h; ?>"> 
    </form>
    <hr>
    <h4>Calculadora Simples - vrs 1.0</h4>
    <input type="number" name="" id="n1" step="0.01">
    <input type="number" name="" id="n2" step="0.01">
    <button id="somar" onclick="Somar()">+</button>
    <input type="number" name="" id="result" value="0" readonly>
    <hr>

</body>

<!--Utilizando o evento onload -->
<script>
    var el = document.getElementById('teste').value;
     //window.onload = alert(el);
</script>

<script>
    function Somar(){        
        var n1 = document.getElementById('n1').value;
        var n2 = document.getElementById('n2').value;        
        var result = Number(n1) + Number(n2);
        document.getElementById('result').value = result;
    }
</script>



</html>