<?php

// 1 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [7, 8.9, 2, 3.9, 10, 6];
rsort($notas);
echo "$notas[0] \n $notas[1] \n $notas[2]";

/*sort ($notas);
$qntdNotas = count($notas);

for ($i = $qntdNotas; $i > $qntdNotas - 3; $i--) {
    echo $notas[$i - 1] . "\n";
}*/

