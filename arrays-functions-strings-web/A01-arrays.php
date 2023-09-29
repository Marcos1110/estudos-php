<?php

//Aula 01 - Arrays

$listaAlunos =  ["Marcos Vinícius", "Guilherme Santos", "Hiago Henrique", 
				 "Pedro Lucas", "Pedro Paulo", "Gustavo silva"];

echo "<< ALUNOS >>" . PHP_EOL;

for ($indice = 0; $indice < count($listaAlunos); $indice++) {
    echo $listaAlunos[$indice] . PHP_EOL;
}

?>
