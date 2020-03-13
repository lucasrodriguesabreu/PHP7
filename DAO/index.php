<<<<<<< HEAD
<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

=======
<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

>>>>>>> 038d27e9869e5fe0cb50e5b15f8f5a363d2e5eff
?>