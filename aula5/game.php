<?php

include "./const.php";
include "./qaa.php";

session_start();

if(isset($_GET["question".$_SESSION["q"]] )) {
    $myAnswer = $_GET["question".$_SESSION["q"]];
    if (array_search($myAnswer, $answerList[$_SESSION["q"]]) == "correct") {
        echo "<script> alert('Resposta correta!') </script>";
        $_SESSION["points"] += 10;
    }else {
        echo "<script> alert('Resposta Errada!') </script>";
    }
    $_SESSION["q"] ++;
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
    <h2>
        Jogador: >>> <?= $_SESSION["player"] ?>
        <br>
        Pontuacão>>> <?= $_SESSION["points"] ?>
    </h2>
    <h3>Pergunta #<?= $_SESSION["q"] +1 ?></h3>
    <h4><?= $questionList[$_SESSION["q"]] ?></h4>
    <form action="#" method="get">
        <?php foreach($answerList[$_SESSION["q"]] as $a) : ?>
            <input type="radio"
                name    =   "question<?= $_SESSION["q"] ?>"
                id      =   "<?= $a ?>"
                value   =   "<?= $a ?>">

            <label for="<?= $a ?>"><?= $a ?></label>
            <br><br>
            <?php endforeach ?>

            <input type="submit" value="Responder">
            <input type="reset" value="Limpar Resposta">
    </form>
</body>
</html>
