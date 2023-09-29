<?php

//Desafio #01 - Números Ímpares

echo "<< Todos os Números Ímpares de 0 a 100 >>" . PHP_EOL;
echo PHP_EOL;

for ($cont = 0; $cont <= 100; $cont++) {
    if ($cont%2 != 0) {
        echo "#$cont" . PHP_EOL;
    }
}

?>
