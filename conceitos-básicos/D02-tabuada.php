<?php

//Desafio #02 - Tabuada

$multiplicador = 9;

echo "<< Tabuada do $multiplicador >>" . PHP_EOL;
echo PHP_EOL;

for ($i = 0; $i <= 10; $i++) {
    $produto = $multiplicador*$i;
    echo "$multiplicador x $i = $produto" . PHP_EOL;
}
?>