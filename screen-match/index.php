<?php

require __DIR__ . "/src/Modelos/Genero.php";
require __DIR__ . "/src/Modelos/Filme.php";

echo "Bem vindo ao Screen Match";

$filme = new Filme(
    'Thor: Ragnarok',
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento;