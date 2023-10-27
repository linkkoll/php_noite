<?php

include "./data.php";

if( isset( $_GET["search"] )  && $_GET["search"] != "") {
    $search = $_GET["search"];
} else {
    $search = null;
}

//var_dump($search);

//Função para pesquisar na lista
function searchAllMovies($find) {
    global $movies;
    //passando para maiuscula
    $findUpper = strtoupper($find);
    //Criar um contador de registros
    $count = 0;
    foreach($movies as $k => $v) {
        $movieUpper = strtoupper ($v["filme"]);
        if(strpos($movieUpper, $findUpper) !== false){
        echo "<br>----------------------";
        echo "<br>COD: "    .$k;
        echo "<br>FILME: "  .$v["filme"];
        echo "<br>ANO: "    .$v["ano"];
        echo "<br>GÊNERO: " .$v["genero"];
        $count++;         
        }
    }
    echo "<br>//////////////////////////////<br>";
    echo ($count > 0)
        ? $count. " filme(s) encontrado(s)"
        : "Nenhum filme encontrado";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa filmes</title>
</head>
<body>
    <form action="#" method="get">
        <input type="search" name="search" placeholder="Digite um filme">
        <input type="submit" value="🔎Pesquisar">
    </form>
    <br>
    <?php
       echo ($search != null) ? searchAllMovies($search) : "Digite um termo para pesquisa.";
    ?>
</body>
</html>
