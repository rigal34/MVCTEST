<?php

class View {
    function render($viewName,$params = []) { //fonction qui permet d'afficher une vue
        ob_start();
    extract($params);//extrait les parametres et les transforme en variables
    include_once("views/" .$viewName.".php");//on inclut la vue//on ajoute le chemin de la vue//on ajoute l'extension
    $content = ob_get_clean();//JE l ajoute dans le content  pour l'afficher dans le mainTemplete 
    include_once("views/mainTemplete.php");
    
    }
}

?>









