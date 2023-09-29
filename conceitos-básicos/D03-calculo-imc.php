<?php

//Desafio #03 - Cálculo do IMC

//Fórmula: IMC = peso(kg)/altura(m)^2

echo "<< Cálculo do IMC >>" . PHP_EOL;

$peso = 98;
$altura = 1.77;

$IMC = $peso/($altura)**2;
echo "Seu IMC é de " . number_format($IMC, 1) . "." . PHP_EOL;

switch($IMC) {
    case $IMC < 18.5:
        echo "Você está Abaixo do Peso!" . PHP_EOL;
        break;
    case ($IMC >= 18.5 && $IMC < 24.9):
        echo "Você está com o Peso Ideal!" . PHP_EOL;
        break;
    case ($IMC >= 24.9 && $IMC <= 29.9):
        echo "Você está com Sobrepeso!" . PHP_EOL;
        break;
    case ($IMC >= 30 && $IMC <= 34.9):
        echo "Você está com Obesidade Grau I!" . PHP_EOL;
        break;
    case ($IMC >= 35 && $IMC <= 39.9):
        echo "Você está com Obesidade Grau II!" . PHP_EOL;
        break;
    case ($IMC >= 40):
        echo "Você está com Obesidade Grau III (Mórbida)!" . PHP_EOL;
        break;
}

?>
