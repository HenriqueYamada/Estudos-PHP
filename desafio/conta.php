<?php

$saldo = 1000;
echo "********************** \n";
echo "Titular: Vinicius Dias \n";
echo "Saldo atual: R$ $saldo \n";
echo "********************** \n";

echo "1. Consultar saldo atual \n";
echo "2. Sacar valor \n";
echo "3. Depositar valor \n";
echo "4. Simular investimento \n";
echo "5. Sair \n> ";
$resp = (int) fgets(STDIN);

while ($resp != 5) {
    // menu

    switch ($resp) {
        case 1:
            echo "********************** \n";
            echo "Titular: Vinicius Dias \n";
            echo "Saldo atual: R$ $saldo \n";
            break;

        case 2:
            echo "Qual valor deseja sacar? \n> R$";
            $valor = (float) fgets(STDIN);

            if ($saldo < $valor) {
                echo "Saldo insuficiente. \n";
            } else {
                $saldo -= $valor;
            }

            break;

        case 3:
            echo "Qual valor deseja depositar? \n> R$";
            $valor = (float) fgets(STDIN);

            $saldo += $valor;
            break;

        case 4:
            echo "Qual o valor deseja investir? \n> R$";
            $valor = (float) fgets(STDIN);
            echo "Qual o rendimento por ano? \n> ";
            $rendimento = (float) fgets(STDIN);
            echo "Quantos anos deseja investir? \n> ";
            $anos = (int) fgets(STDIN);

            $montante = $valor * (1 + $rendimento / 100) ** $anos;

            echo "Montante do investimento: R$" . number_format($montante, 2, ',', '.') . "\n";
            break;

        case 5:
            echo "Obrigado pela atenção!";
            break;

        default: 
            echo "Valor desconhecido. Tente novamente \n";
            break;
    }

    echo "********************** \n";

    echo "1. Consultar saldo atual \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Simular investimento \n";
    echo "5. Sair \n";
    echo "> ";
    $resp = (int) fgets(STDIN);
}