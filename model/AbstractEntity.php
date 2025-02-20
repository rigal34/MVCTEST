<?php
// SONT LES BOUT DE CODE QUI SONT COMMUNS A TOUTES LES CLASSES
class AbstractEntity {

    public function __construct(array $data = [])
    {

        if (!empty($data)) {
            $this->hydrate($data);
        }
    
    }



    public function hydrate(array $data=[]){//hydrate est une methode qui permet de remplir les attributs de la classe avec les données de la base de données
        foreach($data as $key => $value){
            $method = "set". str_replace("_", "", ucwords($key, "_"));
            if(method_exists($this, $method)){
                $this->$method($value);//on appelle la methode setTitre($value) ou setTexte($value) ou setId($value)
            }
        }

    }






}