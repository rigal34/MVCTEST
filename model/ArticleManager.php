<?php

include_once("Model/AbstractEntityManager.php");

class ArticleManager extends AbstractEntityManager{//on herite de la classe AbstractManager//qui est dans le fichier AbstractManager.php
    public function getlisteArticle(){  //est appelée par le controller
       
        $sql = "SELECT * FROM article";
        $statement = $this->db->query($sql);
       
        
        
        $listeArticle = [];
        while($article = $statement->fetch()) {
        $listeArticle[] = new Article($article);
        
     }
     
     
      
         return $listeArticle;
     }
     
     
     public function getArticle($id) {
         $sql = "SELECT * FROM article WHERE id= :id";
         $statement = $this->db->prepare($sql);
         $statement->execute(['id' => $id]);
         $result = $statement;
         $article = $result->fetch();
         if($article) {
             return new Article($article);
         }
         

         return null;
        
     }
public function addArticle($article) {
//on recupere les valeurs de l'objet article
   // $titre = $article->getTitre();
   // $contenu = $article->getContenu();
   // $auteur = $article->getAuteur();
   // $date = $article->getDate();
   // $sql = "INSERT INTO article (titre, contenu, auteur, date) VALUES (:titre, :contenu, :auteur, :date)";
   // $statement = $this->db->prepare($sql);
   // $result = $statement->execute(['titre' => $titre, 'contenu' => $contenu, 'auteur' => $auteur, 'date' => $date]);
   // return $result;

}
}

