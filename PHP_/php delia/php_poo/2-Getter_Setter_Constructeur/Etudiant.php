<?php

class Etudiant{

    // propriété privée
    private $prenom;
    public function __construct($arg){
    // __construct: methode appelle automatiquement lors d'une instanciation de la classe ('new'). On ne peut pas déclarer 2 constructeur en PHP.
    
        echo "Instanciation, nous avons reçu l'information suivante : $arg";
        $this->setPrenom($arg);
    }

    public function setPrenom($arg){
        $this->prenom = $arg;
    }
    public function getPrenom(){
        return $this->prenom;
    }

}

$etudiant1 = new Etudiant('Jeremie');// __construct() est appelée automatiquement, nous avons mis un argument après le nom de la classe qui attérit directement dans le constructeur.

echo '<br>Prenom : ' . $etudiant1->getPrenom();
// __construct sera equivalent du init avec session_start(), connexion à la bdd,autoload,etc
// __construct c'est une méthode magique

?>