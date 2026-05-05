<?php
echo "Bem-vindo(a) ao Screen Match! \n";

// Aprendendo a usar variáveis do tipo int, float e boolean

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

// Aprendendo a tomar decisões - condicionais (if - elseif - else, match())

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento \n";  
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo \n";  
} else {
    echo "Esse filme não é um lançamento \n";  
}

$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Top Gun - Maverick";

$genero = match ($nomeFilme) {
    "Top Gun: Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é: $genero \n";