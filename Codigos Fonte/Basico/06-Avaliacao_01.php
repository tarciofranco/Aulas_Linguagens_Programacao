<?php
/* Avaliacao 01 
 *
 * Etapa 01
 * Desenvolva um algoritmo que gera um numero aleatorio
 * entre 0 e 100. Após classifique este número nos seguintes 
 * critérios: 
 * a) Entre 0-25 : Classificado como '1/4'
 * a) Entre 26-50 : Classificado como '2/4'
 * a) Entre 51-75 : Classificado como '3/4'
 * a) Entre 76-100 : Classificado como '4/4'
 * 
 * Etapa 02
 * Agora gere outro numero aleatório e vefifique entre 101-200
 * que enquanto este numero for menor que 150, você deverá gera 
 * novamente um numero aleatorio, e na etapa de verificação
 * imprima a o novo numero gerado;
*/
print "Etapa 01 <br>";
//Gera numero aleatorio
$rand = rand(0,100);
print "Numero sorteado: $rand <br>";


//Vefirica classificacao
if($rand >=0 and $rand <= 25){
    $classificacao = '1/4';    
    //$novo = rand(0,25);
}
if($rand >=26 and $rand <= 50){
    $classificacao = '2/4';
}
if($rand >=51 and $rand <= 75){
    $classificacao = '3/4';
}
if($rand >=76 and $rand <= 100){
    $classificacao = '4/4';
}
print "$classificacao <br>";

//Etapa 02
print "Etapa 02 <br>";

//Gera numero aleatorio
$rand2 = rand(101,200);
print "Numero sorteado: $rand2 <br>";
//Valida numero enquanto menor que 150
while($rand2 < 150){
    //Gera novo numero
    $rand2 = rand(101,200);
    print "Sorteou novamente: $rand2<br>";
}

?>