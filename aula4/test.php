<?php

//Importar dados de outro arquivo
require_once "./data.php";


//Capturar chaves e valores
function listAllMovies() {
    global $movies;
    foreach($movies as $key => $value) {
        echo "-----------------------------".PHP_EOL;
        echo "COD: "    .$key               .PHP_EOL;
        echo "FILME: "  .$value["filme"]    .PHP_EOL;
        echo "ANO: "    .$value["ano"]      .PHP_EOL;
        echo "GÊNERO: " .$value["genero"]   .PHP_EOL;
    }
}

//Cadastrar novos elementos
$newMovie1   = [
    "filme"  => "Corra que policia vem ai",
    "ano"    => 1992,
    "genero" => "Comédia"
];
$newMovie2   = [
    "filme"  => "sete vidas",
    "ano"    => 2011,
    "genero" => "drama"
];

//inserindo no inicio da lista 
array_unshift($movies, $newMovie1);

//Inserindo no final da lista
array_push($movies, $newMovie2);

//Chamando a função que lista os filmes
listAllMovies();

//Editar elementos 
$movies[0]["filme"]     = "Bethoven";
$movies[1]["ano"]       = 2012;
$movies[2]["genero"]    = "Terror";

listAllMovies();

//Excluir registro
array_splice($movies, 4, 1);

listAllMovies();

