<?php

function soma(int ...$valores):string{

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25,33);
echo "<br>";
//Nesse caso abaixo vai ignorar o que vem após o ponto
echo soma(1.5, 3.2);
echo "<br>";

?>