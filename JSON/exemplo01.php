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

echo json_encode($pessoas);

?>