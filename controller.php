<?php
class Controller
{

    function showListeArticle()
    { //fonction qui affiche la liste des articles et appeler par le routeur

        $articleManager = new ArticleManager(); //on instancie la classe ArticleManager//qui est dans le fichier ArticleManager.php
        
        $listeArticle = $articleManager->getlisteArticle(); //on appelle la fonction getlisteArticle de la classe ArticleManager et on stocke le resultat dans la variable listeArticle

        $View = new View(); //on instancie la classe Views   
        $View->render("listeArticle", [ //on appelle la fonction render dans views.php//avec le nom de la page listeArticle

            'listeArticle' => $listeArticle, //on passe la liste des articles en parametre qui sont les infos de la page listeArticle
            'title' => "Mon super titre" //on passe le titre en parametre et qui sont aussi les infos de la page listeArticle
        ]);
    }



    function showDetailArticle()
    { //fonction qui affiche qui recupere et affiche un article et appeler par le routeur
        $articleManager = new ArticleManager(); //on instancie la classe ArticleManager//qui est dans le fichier ArticleManager.php
        $id = $_REQUEST['id'] ?? -1;
        $article= $articleManager->getArticle($id); //on appelle la fonction getArticle de la classe ArticleManager et on stocke le resultat dans la variable article
        $View = new View(); //on instancie la classe Views   
        $View->render("detailArticle", [ //on appelle la fonction render dans views.php et on passe en parametre le nom de la vue et les parametres

            'article' => $article //on passe l'article en parametre//qui vient de LA views/detailArticle.php
        ]);
    }
     
   function addArticle(){//
   

    if(empty($_POST)){
      
        $View = new View();
        $View->render("ajouterArticle");

    }else{
        
        
        $article = new Article($_POST);//on instancie la classe Article et on passe en parametre les données du formulaire
       
        $articleManager = new ArticleManager();//on instancie la classe ArticleManager
        $articleManager->sauvegarderArticle($article);//on appelle la fonction sauvegarderArticle de la classe ArticleManager et on passe en parametre l'objet article
        $this->showListeArticle();//on appelle la fonction showListeArticle
   
    }


   }

}
