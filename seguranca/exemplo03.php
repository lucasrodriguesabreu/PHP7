<?php

$pasta = "arquivos";
$permissao = "0775";

if(!is_dir($pasta)) mkdir($pasta);

echo "Diretório criado com sucesso!";

?>