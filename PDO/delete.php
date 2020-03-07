<?php

$conn = new PDO("mysql:host=mysql.firetecnologia.com.br;dbname=firetecnologia01", "firetecnologia01", "teste1010");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluídos com sucesso!";

?>