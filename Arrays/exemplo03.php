<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' =>20
));

array_push($pessoas, array(
    'nome' => 'Vitor',
    'idade' =>25
));

print_r($pessoas[0]['nome']);

?>