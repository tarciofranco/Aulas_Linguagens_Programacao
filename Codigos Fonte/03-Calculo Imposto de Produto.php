<?php
/*
    * Calculo do valor final do produto
    * Regras: 
    * maior que 1 e menor ou igual a 100   { Imposto de 2% }
    * maior que 100 e menor ou igual a 200 { Imposto de 5% }
    * maior que 200 e menor ou igual a 500 { Desconto de 2 % e Imposto de 7% } 
    * Acima de 500 {Desconto de 4% e Imposto de 10% }
*/

/**Etapa 01 - Valores default para variaveis */
$vOriginal  = 855;
$vImposto   = 0;
$vDesconto  = 0;
$vFinal     = 0;
$vBase      = 0;

/**Etapa 02 - Validar regras */
if($vOriginal <= 0){
    print "Valor inválido. Utilize valores acima de Zero. <br>";
}
elseif($vOriginal >=1 and  $vOriginal <=100){
   $vImposto = ($vOriginal * 0.02) ;
   $vFinal = $vOriginal + $vImposto;
}
elseif($vOriginal > 100 and $vOriginal <= 200){
    $vImposto = ($vOriginal * 0.05) ;
    $vFinal = $vOriginal + $vImposto;
}
elseif($vOriginal > 200 and $vOriginal <= 500){
    $vDesconto  = ($vOriginal * 0.02);
    $vBase      = $vOriginal - $vDesconto;    
    $vImposto   = $vBase * 0.07;
    $vFinal     = $vBase + $vImposto;
}
else{
    $vDesconto  = ($vOriginal * 0.04);
    $vBase      = $vOriginal - $vDesconto;    
    $vImposto   = $vBase * 0.10;
    $vFinal     = $vBase + $vImposto;
}

/**Etapa 03 - Impressao em tela do resultado */
print "( + ) Valor Original R$ $vOriginal <br>";
print "( - ) Valor Desconto R$ $vDesconto <br>";
print "( = ) Valor Base R$ $vBase <br>";
print "( - ) Valor Imposto R$ $vImposto <br>";
print "( = ) Valor Final R$ $vFinal <br>";
