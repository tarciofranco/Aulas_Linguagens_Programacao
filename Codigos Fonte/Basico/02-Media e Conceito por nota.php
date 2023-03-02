<?php

/*
Faça um programa que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. 
A atribuição de conceitos obedece à tabela abaixo:  

Média de aproveitamento   |       Conceito 

Entre 9.0 e 10.0          |  A
Entre 7.5 e 9.0           |  B
Entre 6.0 e 7.5           |  C
Entre 4.0 e 6.0           |  D                   
Entre 4.0 e 0             |  E  

*/

/** Etapa 01  - Atribuição das notas */
$n1 = 0;
$n2 = 8;

/** Etapa 02 - Calculo da média */
$media = ($n1 + $n2 )/2;

/** Etapa 03 - Verifica conceito a partir da media */
if($media < 0){

}
elseif($media >= 9 and $media <= 10){
    $conceito = "A";
}
elseif($media >= 7.5 and $media < 9){
    $conceito = "B";
}
elseif($media >= 6 and $media < 7.5){
    $conceito = "C";
}
elseif($media >= 4 and $media < 6){
    $conceito = "D";
}else{
    $conceito = "E";
}

/** Etapa 04 - Imprime em tela resultado */
print "Média do aluno: $media <br>";
print "Conceito do aluno: $conceito <br>";

