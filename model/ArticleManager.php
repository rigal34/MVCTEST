<?php



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

     
public function sauvegarderArticle($article) {
$sql = "INSERT INTO `article` (`titre`, `texte`) VALUES (:titre, :texte)"; 
$statement = $this->db->prepare($sql);
$statement->execute([
    'titre' => $article->getTitre(),
    'texte' => $article->getTexte()
]);


}


}

