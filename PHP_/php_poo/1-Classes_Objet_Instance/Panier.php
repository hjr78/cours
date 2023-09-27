<?php
// POO = programation orientée objet

// Une classe permet de produire plusieures objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE

class Panier{

    //Propriété publique
    public $nbProduit;// Cette propriété sstockera le nombre de produits dans le panier

    // Méthode publique
    public function ajouterArticle(){
        //traitements
        return "L'article à bien été ajouté !";// Cette méthode renvoie un message de confirmation
    }

    // Méthode protégée (accessible uniquement dans la classe et ses classes dérivées)
    protected function retirerArticle(){
        //traitements
        return "L'article à bien été retiré !";// Cette méthode renvoie un message de confirmation
    }

    // Methode privée (accessible uniquement dans la classe)
    private function affichageArticle(){
        // traitements
        return "Voici les articles !"; //Cette méthode renvoie un message de confirmation
    }
}

// ---------------------------------------------------------------------------------------

$panier1 = new Panier; // new Panier <=> Instanciation(Permet de déployer l'objet issue de la classe (ici, Panier) permet de passer d'une classe à l'objet)
// $panier1 représente l'objet issue de la classe 
var_dump($panier1); //var_dump  affiche des informations sur l'objet y compris sont types sont noms de classe et sa référence

$panier1->nbProduit = 5; //On assigne la valeur 5 à la propiété publique $nbProduit de l'objet$panier1


echo '<br>Panier 1 : ' . $panier1->nbProduit . ' produits <br>'; //On affiche la propriété publique $nbProduit de l'objet $panier2


echo '<br>Panier 1 : ' . $panier1->ajouterArticle() . ' <br>'; //On appelle la methode publique ajouterArticle() de l'objet $panier1 et affiche son résultat

// echo '<br>Panier1 :' . $panier1->retirerArticle() . '<br>'; //On tente d'appeler la méthode protégée retirerArticle(), ce qui génère une erreur

// echo '<br>Panier 1 :' . $panier1->affichageArticle() . '<br>'; //On tente d'appeler la méthode privée affichageArticle(), ce qui génère une erreur



$panier2 = new Panier;//Création d'un nouvel objet $panier2 à partir de la clase Panier 
var_dump($panier2);

$panier2->nbProduit = 10;//On assigne la valeur 10 à la propriété publique $nbProduit de l'objet$panier2

