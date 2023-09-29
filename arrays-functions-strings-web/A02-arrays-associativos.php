<?php

//Aula 02 - Arrays Associativos

$acervo =[
    '15674' => [
        'titulo' => "O Hobbit",
        'autor' => "J.R.R. Tolkien",
        'genero' => "Fantasia Medieval"
    ], 
    '15675' => [
        'titulo' => "Duna",
        'autor' => "Frank Herbert",
        'genero' => "Ficção Científica"
    ],
    '15676' => [
        'titulo' => "Drácula",
        'autor' => "Bram Stoker",
        'genero' => "Terror"
    ]
];

//Adicionar Itens
$acervo[] = [
    'titulo' => "A Odisséia",
    'autor' => "Homero",
    'genero' => "Épico"
];

$acervo[] = [
    'titulo' => "Hamlet",
    'autor' => "William Shakespeare",
    'genero' => "Tragédia"
];



foreach ($acervo as $cod => $livro) {
    echo $cod . " - " . $livro['titulo'] . " de " . $livro['autor'] . PHP_EOL;
}

?>
