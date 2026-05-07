<?php

//1 - Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação. 

function calculadora($operacao, $num1, $num2) {
    switch ($operacao) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        default:
            echo "Operação inválida";
    }
}

$operacao = "+";
$num1 = 5;
$num2 = 7;

calculadora($operacao, $num1, $num2);
echo "\n";

