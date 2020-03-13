<<<<<<< HEAD
<?php

spl_autoload_register(function($class_name){
    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

    if(file_exists(($filename))){
        require_once($filename);
    }
});

=======
<?php

spl_autoload_register(function($class_name){
    $filename = $class_name.".php";

    if(file_exists(($filename))){
        require_once($filename);
    }
});

>>>>>>> 038d27e9869e5fe0cb50e5b15f8f5a363d2e5eff
?>