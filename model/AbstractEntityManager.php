<?php
// SONT LES BOUT DE CODE QUI SONT COMMUNS A TOUTES LES CLASSES
//gestion des données
include_once("Model/DBManager.php");
abstract class AbstractEntityManager {
public $db;
public function __construct() {

    $this->db = DBManager::getInstance()->db;

}

    
    
}

?>