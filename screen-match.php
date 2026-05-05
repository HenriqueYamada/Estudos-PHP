<?php
echo "Bem-vindo(a) ao Screen Match! \n";

// Aprendendo a usar variáveis do tipo int, float e boolean

$nomeFilme = "Top Gun: Maverick";
$anoLancamento = $argv[1] ?? 2022; // Usando o operador de coalescência nula para definir um valor padrão
$somaAvaliacoes = 9 + 6 + 8 + 7.5 + 5;
$notaFilme = $somaAvaliacoes / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//echo $notaFilme;
//echo $incluidoNoPlano;
//echo $incluidoNoPlano ? 'True' : 'False';

// Aprendendo a usar variáveis do tipo string: Concatenação e Interpolação

//echo "Nome do filme: " . $nomeFilme . "\n";
//echo "Nota do filme: $notaFilme \n";

//echo 'Nome do filme: ' . $nomeFilme . '\n';
//echo 'Nota do filme: $notaFilme \n';

echo "Nome do filme: $nomeFilme \n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento \n";