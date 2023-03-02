<?php
/*
#Atividade Avaliada 1

As organizações CSM resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa que calculará os reajustes.  

a. Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual;
b. Salários até R$ 280,00 (incluindo): aumento de 20%;
c. Salários entre R$ 280,00 e R$700,00: aumento de 15%;
d. Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%;
e. Salários de R$ 1500,00 em diante: aumento de 5%

Após o aumento ser realizado; informe na tela;

a. O salário antes do reajuste;
b. O percentual de aumento aplicado;
c. O valor do aumento;
d. O novo salário, após o aumento.
*/
/*** Etapa 01 ***/
#Valores inciais para variaveis
$perc_reajuste  = 0; 
$salario_novo   = 0;
$valor_reajuste = 0;

#Define Salario Atual
$salario_atual = 700;


/*** Etapa 02 ***/

#Validar condicoes do reajuste
if($salario_atual <= 280){
    $perc_reajuste = 0.20;
    $valor_reajuste = ($salario_atual * $perc_reajuste);
    $salario_reajustado = $salario_atual + $valor_reajuste;
}

if($salario_atual > 280 and $salario_atual <= 700){
    $perc_reajuste = 0.15;
    $valor_reajuste = ($salario_atual * $perc_reajuste);
    $salario_reajustado = $salario_atual + $valor_reajuste;
}

if($salario_atual > 700 and $salario_atual <= 1500){
    $perc_reajuste = 0.10;
    $valor_reajuste = ($salario_atual * $perc_reajuste);
    $salario_reajustado = $salario_atual + $valor_reajuste;
}

if($salario_atual > 1500){
    $perc_reajuste = 0.05;
    $valor_reajuste = ($salario_atual * $perc_reajuste);
    $salario_reajustado = $salario_atual + $valor_reajuste;
}

/*** Etapa 03 ***/

#Informar em tela 
print 'Salario Antes do reajuste: R$ '.$salario_atual.'<br>';
print 'Percentual de aumento aplicado: % '.$perc_reajuste.'<br>';
print 'Valor do aumento: R$ '.$valor_reajuste.'<br>';
print 'Novo salário: R$ '.$salario_reajustado.'<br>';



?>