<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(", ", $headers) . "\r\n");
//foreach nas linhas
foreach ($usuarios as $row) {
    $data = array();
    //foreach nos campos
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }//finalizando foreach de coluna
    fwrite($file, implode(", ", $data) . "\r\n");
}//finalizando foreach de linhas
fclose($file);

?>