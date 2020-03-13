<?php

require_once("config.php");

$jose = new Usuario();

$jose->loadByID(3);

echo $jose;

//var_dump($jose)

?>