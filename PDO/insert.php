<?php

$conn = new PDO("mysql:host=mysql.firetecnologia.com.br;dbname=firetecnologia01", "firetecnologia01", "teste1010");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "carlos";
$password = "1234teste";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso!";

?>