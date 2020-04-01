<?php

$conn = new PDO("mysql:dbname=firetecnologia01;host=mysql.firetecnologia.com.br", "firetecnologia01", "teste1010");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>".$key.":</strong>".$value."<br/>;
    }

    echo <br/>;
}
var_dump($results);

?>