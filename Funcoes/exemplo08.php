<?php

function soma(float ...$valores):float {

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25,33);
echo "<br>";
/*Nesse caso abaixo não vai ignorar o que vem após o ponto, 
pois declarei como float*/
echo soma(1.5, 3.2);
echo "<br>";

?>