<?php
/***
 * Aplicação do comando Switch
 * Desenvolver uma estrutura de verificação através do comando switch 
 * para que possa ler o mês atual e informar em formato texto ao usuario
 * Funcoes: substr(), switch()
 */

$mes = 3;

switch($mes){
    case 1:
    case 4:
        print "Abril";
    break;
            print "Janeiro";
    break;
    case 2:
        print "Fevereiro";
    break;
    case 3:
        print ("Março");
    break;
    case 4:
        print "Abril";
    break;
    case 5:
        print "Maio";
    break;
    case 6:
        print "Junho";
    break;
    case 7:
        print "Julho";
    break;
    case 8:
        print "Agosto";
    break;
    case 9:
        print "Setembro";
    break;
    case 10:
        print "Outubro";
    break;
    case 11:
        print "Novembro";
    break;
    case 4:
        print "Dezembro";
    break;                       
    default:
        print "Mês informado é invalido";
}