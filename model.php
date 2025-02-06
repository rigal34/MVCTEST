<?php
//gestion des données

class Model{
private $db;
public function __construct() {
$this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


}

    
    function getlisteArticle(){  //est appelée par le controller
       
       $request = "SELECT * FROM article";
       $statement = $this->db->query($request);
      
       
       
       $listeArticle = [];
       while($article = $statement->fetch()) {
       $listeArticle[] = $article;
       
    }
    
    
     
        return $listeArticle;
    }
    
    
    function getArticle($id) {//est appelée par le controller//recupere un article//et retourne un article//vers le controller//qui est appelé par le routeur//qui est appelé par le controller//
        $request = "SELECT * FROM article WHERE id=:id";//
        $statement = $this->db->prepare($request);//on prepare la requete
        $statement->bindParam("id",$id);
        $statement->execute();
        
        $article = $statement->fetch();
        
        return($article);//retourne un article vers le controller
        //de la chaines de caracteres maintenant j ai un tableau
    }
    
}

?>