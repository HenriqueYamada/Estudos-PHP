<?php

require __DIR__ . "/src/Modelos/Filme.php";

echo "Bem vindo ao Screen Match";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
/*$filme->nome = 'Thor: Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';*/

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento();