<?php

// 1 - Números impares

$cont = 0;

while ($cont <= 100) {
    if ($cont % 2 != 0) {
        echo $cont . "\n";
    }

    $cont++;
}

// 2 - Tabuada

/*$cont = 1;
echo "Digite um número para a tabuada: \n> ";
$num = (int) fgets(STDIN);

while ($cont <= 10) {
    $resultado = $num * $cont;
    echo $num . " x " . $cont . " = " . $resultado . "\n";
    $cont++;
}*/