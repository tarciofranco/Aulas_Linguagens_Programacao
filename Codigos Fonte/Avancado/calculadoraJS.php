<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
button {
    padding: 20px;
    font-size: 25;
}
.display{
    padding: 5%;
    font-size: 25;
}
.btn_numeros{
    padding: 20%;
    font-size: 25;    
}
#calculadora{
    border: 2px solid ;
    width: 25%;
    position: absolute;
    padding: 20px;
    margin-left: 15%;
    background-color: #c1c1c1;

}
#titulo{
    text-align: center;
    background-color: #F6F6F6;
    padding: 20px;
    font-size: 35px;
}
</style>

</head>
<body>
<div id="calculadora">
    <div id="titulo">Calculadora </div>
    <input type="number" id="display" class="display"  value="0" >
    <input type="number" id="result" class="display" value="0">
    <hr>

    <button id="1" value="1" onclick="SelecionaNumeros(this.value)" >1</button>
    <button id="2" value="2" onclick="SelecionaNumeros(this.value)">2</button>
    <button id="3" value="3" onclick="SelecionaNumeros(this.value)">3</button>
    <br>
    <button id="4" value="4" onclick="SelecionaNumeros(this.value)">4</button>
    <button id="5" value="5" onclick="SelecionaNumeros(this.value)">5</button>
    <button id="6" value="6" onclick="SelecionaNumeros(this.value)">6</button>
    <br>
    <button id="7" value="7" onclick="SelecionaNumeros(this.value)">7</button>
    <button id="8" value="8" onclick="SelecionaNumeros(this.value)">8</button>
    <button id="9" value="9" onclick="SelecionaNumeros(this.value)">9</button>
    <br>
    <button id="0" value="0" onclick="SelecionaNumeros(this.value)">0</button>
    <button id="" value="" >Limpar</button>
    <hr>
    
    <!-- Utilizando funcoes variadas para cada calculo 
    <button id="+" onclick="Somar()"> + </button>
    <button id="-" onclick="Subtrair()"> - </button>
    <button id="*" onclick="Multiplicar()"> * </button>
    <button id="/" onclick="Divisao()"> / </button>
    -->

    <!-- Utilizando funcao unica para calcular -->
    <button id="+" value="+" onclick="Calcular(this.value)"> + </button>
    <button id="-" value="-" onclick="Calcular(this.value)"> - </button>
    <button id="*" value="*" onclick="Calcular(this.value)"> * </button>
    <button id="/" value="/" onclick="Calcular(this.value)"> / </button>    
</div>
</body>
<script>

//Esta funcao permite armazenar os numeros a serem calculados 
function SelecionaNumeros(element){     
    let display = document.getElementById('display'); //Cria o elemento display
    let valor = display.value + element; //Concatena o numero digitado + o numero armazenado anteriormente
    display.value = valor; //Display recebe a sequencia de numeros digitados
}

//Funcao unica para calcular
function Calcular(operador){
    
    let valor = document.getElementById('display');
    let result = document.getElementById('result');
    let resultado = parseFloat(valor.value) +operador+ parseFloat(result.value);
    console.log(typeof resultado);
    console.log(resultado);
    

    result.value = parseFloat(resultado);
    valor.value =0;
}

//Funcoes variadas para calcular
function Somar(){

    let valor = document.getElementById('display');
    let result = document.getElementById('result');
    let resultado = parseFloat(valor.value) + parseFloat(result.value);

    result.value = resultado;
    valor.value = 0;    
}

function Subtrair(){

    let valor = document.getElementById('display');
    let result = document.getElementById('result');
    let resultado =  parseFloat(result.value) - parseFloat(valor.value);

    result.value = resultado;
    valor.value = 0;    
}

function Multiplicar(){  

    let ObjDisplay = document.getElementById('display');
    let ObjResult = document.getElementById('result');
    let valor = parseFloat(ObjDisplay.value);
    let result = parseFloat(ObjResult.value);
    console.log('Valor-> '+valor);
    console.log('Result-> '+result);
    
    if(result == 0){        
        resultado = valor;
    }else{        
        resultado =  valor * result;
    }
    ObjResult.value = resultado;
    ObjDisplay.value = 0;
    
}

</script>
</html>