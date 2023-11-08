<?php

//criar a classe 
class Music {
    //Atributo da classe (Static)
    private static $num = 0;
    //Atributos dos objetos
    private $id;
    private $name;
    private $singer;
    private $album;
    private $time;

    //__construct: Método invocado a cada
    //criação de objeto, que permite ja 
    //inserir dados na sua criação.
    public function __construct(
        $n = null,
        $s = null,
        $a = null,
        $t = null
    ) {
        //Acessar atributo static
        self::$num++;
        //jogar o valor da variavel $num para o atributo id
        $this ->id = self::$num;
        $this ->name = $n;
        $this ->singer = $s;
        $this ->album = $a;
        $this ->time = $t;
        echo "Novo objeto criado!<br>";
    }

    //set: função para setar, salvar
    //Ajustar o valor de um atribido
    public function setName ($n){
        // $this: para acessar um atributo  
        // do objeto
        $this ->name = $n;
    }
    public function setSinger($s){
        $this ->singer = $s;
    }
    public function setAlbum($a){
        $this ->album = $a;
    }
    public function setTime($t){
        $this ->time = $t;
    }

public function getName(){
    return $this ->name; 
}
public function getSinger(){
    return $this ->singer;
}
public function getAlbum(){
    return $this ->album;
}
public function getTime(){
    return $this ->time;
}

//toString: serve para criar uma
//Representação em formato string,
//De um objeto

public function toString() {
    return "<hr>Musica: ".$this->name.
    "<br>Artista: ".$this->singer.
    "<br>Album: ".$this->album.
    "<br>Tempo: ".$this->time.
    "<br>Id: ".$this->id;

}

}
