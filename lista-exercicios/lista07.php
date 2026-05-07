<?php

// 1 - Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$caminhoArquivoTeste = __DIR__ . '/lista07-arquivos/teste.txt';
$texto = file_get_contents($caminhoArquivoTeste);

echo $texto;