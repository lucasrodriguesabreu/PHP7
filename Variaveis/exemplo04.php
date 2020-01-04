<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

$arquivo = $_SERVER["SCRIPT_NAME"];

echo $ip;

echo "<br/>";

echo $arquivo;

?>