<?php
   
include_once("Model/AbstractEntity.php");


class Article extends AbstractEntity
{
    private int $id; //INTEGER de ma base de données
    private string $titre; //VARCHAR de ma base de données string est un alias de string
    private string $texte; //TEXT de ma base de données  string est un alias de string
  
   


    public function setId(int $id): void
    { // en attente de modifier la variable id
        $this->id = $id;
    }


    public function getId(): int
    { // en attente de recuperer et lire la variable id
        return $this->id;
    }


    public function setTitre(string $titre): void
    {// en attente de modifier la variable titre
        $this->titre = $titre;
    }


    public function getTitre(): string
    {// en attente de recuperer et lire la variable titre
        return $this->titre;
    }

    public function setTexte(string $texte): void
    {// en attente de modifier la variable texte
        $this->texte = $texte;
    }

    public function getTexte(): string
    {// en attente de recuperer et lire la variable texte
        return $this->texte;
    }


  


   

}



//je vais creer des setters et des getters .
//ils sont des moyens de modifier  mes variables privées.
