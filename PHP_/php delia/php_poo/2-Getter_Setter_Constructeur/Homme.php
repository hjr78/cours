<?php
class Homme
{
	private $prenom;
	private $nom;
	public function setPrenom($p){ //Par convention, on appel la fonction avec le mot-clé 'set'. On va setter un prenom, c'est à dire lui attribuer/affecter une propriété.

		//$prenom = $p; // Cette variable est locale, il ne s'agira donc pas de lavariable $prenom de l'objet
		if( is_string($p) ){
			$this->prenom = $p;
		}
	}
	public function getPrenom(){//Par convention, on appel la fonction avec le mot-clé 'get'. On va getter un prenom, c'est à dire pour afficher une propriété.
		return $this->prenom;
	}
	public function setNom($n){
		$this->nom = $n;
	}
	public function getNom(){
		return $this->nom;
	}
}
//------------------------------------------------------------------------------------
$homme1 = new Homme(); 
$homme1->setPrenom('Jeremie'); // Je modifie l'élément (dans l'objet dans lequel on se trouve) car ma methode public
echo $homme1->getPrenom() .'<br>'; // Accéder à l'élément dans l'objet car la méthode est public

$homme1->setNom('Messey');
echo $homme1->getNom() . '<br>';

var_dump($homme1);
//----------------------------------------
$homme2 = new Homme();
echo $homme2->getPrenom() . '<br>'; // Cette ligne n'affiche rien car j'ai réinstancié la classe Homme pour créer un objet $homme2.
echo $homme2->getNom() . '<br>'; // Cette ligne n'affiche rien car j'ai réinstancié la classe Homme pour créer un objet $homme2.
var_dump($homme2);

//------------------------------------------------------------------------------------------
/* Pourquoi des getters et setteurs:
	PHP est un langage objet qui ne type pas ses varaibles, il faut donc prévoir autant de setteur et de getter que de propriété afin de controler l'intégrité des données.
	Pour 10 propriétés, il y aura donc 2 méthodes (10setteurs et 10getteurs)

	$this : représente l'objet en cours, ici, à l'intérieur de la clase
		objet en-cours = objet qui exécute la méthode

	les getteurs : voir / afficher
	Les setteurs : attribuer / affecter
		=> les 2 réunis permettent de controler l'intégrité des données.

	Mettre les propriétés en 'private' permet d'éviter qu'elles ne soient modifiées de l'extérieur de la classe sans controle.
*/