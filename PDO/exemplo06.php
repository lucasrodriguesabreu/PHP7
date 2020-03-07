<?php

$conn = new PDO("mysql:host=mysql.firetecnologia.com.br;dbname=firetecnologia01", "firetecnologia01", "teste1010");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 6;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Dados excluídos com sucesso!";

?>