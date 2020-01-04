<?php

$qualASuaIdade = 25;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

    echo "Você é uma criança!";
}else if ($qualASuaIdade < $idadeMaior){
    echo "Adolescente";
}elseif ($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>