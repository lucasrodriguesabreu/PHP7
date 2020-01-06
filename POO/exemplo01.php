<?php

class Pessoa{

    public $nome;//Isso é um atributo

    public function falar(){//É um método
        return "O meu nome é " .$this->nome; 
    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Lucas Rodrigues";
echo $glaucio->falar();

?>