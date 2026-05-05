<?php
echo "Bem-vindo(a) ao Screen Match!
";

// Aprendendo a usar variáveis do tipo int, float e boolean

$nomeFilme = "Top Gun: Maverick";
$anoLancamento = 2022;
$somaAvaliacoes = 9 + 6 + 8 + 7.5 + 5;
$notaFilme = $somaAvaliacoes / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo $notaFilme;
echo $incluidoNoPlano;
echo $incluidoNoPlano ? 'True' : 'False';

