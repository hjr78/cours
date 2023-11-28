<?php

/*

Exercice:
    Créez une classe Membre, avec les propriétés pseudos et mdp 
    le pseudo doit être inférieur à 15 caractères et supérieur à 0 ET QUE CE SOIT UN STRING !! 

    =>OBJECTIF : afficher le pseudo et le mdp

*/


// class Membre
// {
//     private $pseudo;

//     private $mdp;

//     public function __construct($pseudo, $mdp)
//     {
//         $this->setPseudo($pseudo);
//         $this->setmdp($mdp);
//     }
//     public function setPseudo($pseudo)
//     {
//         if (strlen($pseudo) < 15 && strlen($pseudo) > 0 && is_string($pseudo)) {

//             $this->pseudo = $pseudo;
//         } else {
//             echo "Erreur le pseudo est supérieur à 15 caractères";
//         }
//     }
//     public function setMdp($mdp)
//     {
//         $this->mdp = $mdp;
//     }
//     public function getPseudo()
//     {
//         return $this->pseudo;
//     }
//     public function getMdp()
//     {
//         return $this->mdp;
//     }
// }

// $membre1 = new Membre("Leynazertyuioplokjhgfdfghjklkjhgfdscfghjk", "azertyuiop");

// echo "<br>Pseudo : " . $membre1->getPseudo(); //s
// echo "<br>Mdp : " . $membre1->getMdp(); //s



// CORRECTION

class Membre{
    private $pseudo;
    private $mdp;

    public function setPseudo($arg){
        if(is_string($arg) && (strlen($arg) > 0 && strlen($arg) < 15)){
            $this->pseudo = $arg;
        }
        // if(is_string($arg)){
        //     if(strlen($arg) > 0 && strlen($arg) < 15){
        //         $this->pseudo =$arg
        //     }
        // }
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setMdp($arg){
        $this->mdp = $arg;
    }

    public function getMdp(){
        return $this->mdp;
    }
}

// ------------------------------------------------------------

$membre1 = new Membre;

$membre1->setPseudo('Marco');
$membre1->setMdp('Polo');

echo 'Pseudo : ' . $membre1->getPseudo() . '<br>';
echo 'Mdp : ' . $membre1->getMdp() . '<br>';