<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

$conn = mysqli_connect("mysql:host=mysql.firetecnologia.com.br;dbname=firetecnologia01", "firetecnologia01", "teste1010");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){

    //echo $resultado->deslogin . "<br>";

    var_dump($resultado);

}

?>

//PAREI COM 7:00