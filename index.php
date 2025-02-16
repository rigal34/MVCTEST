<?php
include_once("config.php");
include_once("Model/Article.php");
include_once("Model/ArticleManager.php");
include_once("views.php");
include_once("controller.php"); 
//ob_start();   
// main();             
// $out = ob_get_clean();              
$action = $_REQUEST['action'] ?? 'listeArticle';//on recupere l'action dans l'url

try {
    //code...
    $controller = new Controller();//on instancie le controller pour appeler les fonctions//qui sont dans le controller  
        switch ($action){
        case 'listeArticle':
            $controller->showListeArticle();
        
            break;
        case 'detailArticle':
            $controller->showDetailArticle();
            
            break;   
            
        case 'ajouterArticle':
            $controller->addArticle();
            break;    


        default:
        echo ("<h1>404</h1>");
        echo ("La page $action n'existe pas");
            break;
        }
} catch (\Throwable $th) {
    echo ("Erreur détectée "); 
    var_dump($th);
}



?>




 
