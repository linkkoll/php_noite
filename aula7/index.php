<?php

//importar arquivo 
include "./model/music.php";

//Criando novo objeto, ou 
//Instanciando classe
$music1 = new Music();
$music1 ->setSinger("Roberto Carlos");
$music1 ->setName("Esse cara sou eu");
$music1 ->setAlbum("Esse cara... ");
$music1 ->setTime(224);

//Verificando dados do objeto
//var_dump($music1);

//fazendo o uso dos getters
echo "<hr>";
echo "agora com voces, o super artista ".
    $music1 ->getSinger().
    " cantando seu clássico ".
    $music1 ->getName().
    "!";

echo "<hr>";

//fazendo uso do construtor
$music2 = new Music(
    "Na moral",
    "Jota Quest",
    "Planeta dos mamacos",
    263
);

//var_dump($music2);

//fazendo uso do toString
echo $music1->toString();
echo $music2->toString();
