<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __descruct(){
        var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua João Neves da Fontoura", "1010", "Guaíba");
/*
var_dump($meuEndereco);

unset($meuEndereco);
*/
//Usando toString()

echo $meuEndereco;

?>