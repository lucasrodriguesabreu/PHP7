<?php

if(!is_dir ("images")) mkdir ("images");

//função para excluir os arquivos dentro da pasta, no caso /images
foreach (scandir("images") as $item) {
    if(!in_array($item, array(".", ".."))){
        unlink("images/" . $item);
    }
}

echo "Ok!";

?>