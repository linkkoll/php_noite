<?php

include "./const.php";

if(isset($_GET["player"])) {
    //Inicia sessao
    session_start();
    //Cria variaveis de sessao
    $_SESSION["player"] = $_GET["player"];
    $_SESSION["points"] = 0;
    $_SESSION["q"]      = 0;
    //Direcionamente automatico
    header("Location: game.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Joguinho de perguntas e respostas">
    <meta name="keywords" content="php, qi, informatica">
    <meta name="author" content="Patricio poéto">
    <link rel="shortcut icon" href="vaca-cow.gif" type="gif/x-icon">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Qual o seu nome?</h1>
    <form action="#" method="get">
        <input type="search" name="player">
        <input type="submit" value="Iniciar!">
    </form> 
</body>
</html>
