<?php

// 1 - Números impares

$cont = 0;

while ($cont <= 100) {
    if ($cont % 2 != 0) {
        echo $cont . "\n";
    }

    $cont++;
}