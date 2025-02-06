<?php
include_once("config.php");
include_once("model.php");
include_once("views.php");
include_once("controller.php"); 
//ob_start();   
// main();             
// $out = ob_get_clean();              
$action = $_REQUEST['action'] ?? 'listeArticle';//on recupere l'action dans l'url

try {
    //code...
    $controller = new Controller();//on instancie le controller pour appeler les fonctions  
        switch ($action){
        case 'listeArticle':
            $controller->showListeArticle();
        
            break;
        case 'detailArticle':
            $controller->showDetailArticle();
            
            break;    
        default:
        echo ("<h1>404</h1>");
        echo ("La page $action n'existe pas");
            break;
        }
} catch (\Throwable $th) {
    echo("Il y a une erreur.Veuillez contacter l'administrateur,c'est vous même !");
}



?>




 
