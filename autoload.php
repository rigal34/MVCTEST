<?php
//autoload.php
spl_autoload_register(function($className){
    if(file_exists($className.".php")){
        include_once($className.".php");
    return;
    }
    if(file_exists("Model/".$className. ".php")){
        include_once("Model/".$className.".php");
    return;
 
    if (file_exists("views/".$className.".php")){
        include_once("views/".$className.".php");
    return;
    }
    }
});

?>