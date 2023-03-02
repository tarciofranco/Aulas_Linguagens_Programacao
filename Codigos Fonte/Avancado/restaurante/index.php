<html>
    <head>
        <title>Projeto - Restaurante Facil</title>
        <link href="css/main.css" rel="stylesheet" >
    </head>
    <body>        
        <h2>Cardápio Facil</h2>
        <form action="" id="frm">
        <ul>
            <li>Arroz -> R$ 1,50
                <input type="number" id="1">
            </li>
            <li>Feijao -> R$ 2,00 
            <input type="number" id="2">
            </li>
            <li>Carne -> R$ 5,00
            <input type="number" id="3">
            </li>
        </ul>
        </form>
        <hr>
        <h3>Total do Pedido = <span id="valor_total"></span></h3>
        <hr>
        <button class="btn1" onclick="FecharPedido()">+ Fechar Pedido</button>
        <button class="btn2" onclick="Limpar()">- Limpar Pedido</button>
        
    </body>

    <script>
        //funcao para limpar formulario
        function Limpar(){
            console.log('Limpando formulario');
        }

        //Verifica campos do formulario
        function CheckForm(){
            var inptus = document.querySelectorAll();            
        }

        function FecharPedido(){
            //Valores dos itens do cardapio
            var vlr_item1 = 1.5;
            var vlr_item2 = 2;
            var vlr_item3 = 5;
           
            //Captura quanitdade por item selecionado
            var item1 = document.getElementById('1').value;
            var item2 = document.getElementById('2').value;
            var item3 = document.getElementById('3').value;

            //calcula total do pedido
            var t_item1 = vlr_item1 * item1;
            var t_item2 = vlr_item2 * item2;
            var t_item3 = vlr_item3 * item3;
            var total = (t_item1 + t_item2 + t_item3);

            //atualiza texto com valor total do pedido
            document.getElementById('valor_total').innerHTML =  total;
            console.log(total);
            console.log('Fechando Pedido');
        }
    </script>
</html>