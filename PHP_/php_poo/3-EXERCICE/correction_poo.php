<?php

class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($litre)
    {
        // Vérifie si $litre est un entier (nombre entier).
        if (is_int($litre)) {
            // Si oui, affecte la valeur à la propriété privée $litresEssence de l'objet.
            $this->litresEssence = $litre;
        }
    }

    public function getLitresEssence()
    {
        // Renvoie la valeur de la propriété privée $litresEssence.
        return $this->litresEssence;
    }
}

//-------------------------------------------------
class Pompe
{
    private $litresEssence;

    public function setLitresEssence($litre)
    {
        // Vérifie si $litre est un entier (nombre entier).
        if (is_int($litre)) {
            // Si oui, affecte la valeur à la propriété privée $litresEssence de l'objet.
            $this->litresEssence = $litre;
        }
    }

    public function getLitresEssence()
    {
        // Renvoie la valeur de la propriété privée $litresEssence.
        return $this->litresEssence;
    }

    public function donnerEssence(Vehicule $v)
         // On exige un argument de type Vehicule.
        
/*
Lorsque vous voyez la ligne de code suivante dans la méthode donnerEssence de la classe Pompe :

	public function donnerEssence(Vehicule $v)

Cela signifie que la méthode donnerEssence s'attend à recevoir un argument de type Vehicule. En d'autres termes, elle attend que vous lui passiez un objet de la classe Vehicule en tant qu'argument lorsque vous appelez cette méthode.

En PHP, cette déclaration est appelée "type hinting" (ou "hint de type"). Elle permet de spécifier le type d'objet attendu en argument pour une méthode. Dans ce cas, la méthode donnerEssence ne fonctionnera correctement que si vous lui fournissez un objet de la classe Vehicule en tant qu'argument. Si vous essayez de passer autre chose, comme une chaîne de caractères ou un nombre, PHP générera une erreur.

Cela permet de renforcer la sécurité et de s'assurer que la méthode donnerEssence est utilisée correctement avec des objets de la classe Vehicule, car cette méthode interagit spécifiquement avec des objets de ce type pour effectuer le ravitaillement en essence.
	*/ 
	
    {
   
        // Calcule la quantité d'essence à transférer de la pompe au véhicule.
        $quantiteEssenceTransferee = 50 - $v->getLitresEssence();

        // Réduit la quantité d'essence dans la pompe.
        $this->setLitresEssence($this->getLitresEssence() - $quantiteEssenceTransferee);

        // Augmente la quantité d'essence dans le véhicule.
        $v->setLitresEssence($v->getLitresEssence() + $quantiteEssenceTransferee);

        /*
        $this->setLitresEssence($this->getLitresEssence() - $quantiteEssenceTransferee);

$this fait référence à l'objet actuel de la classe Pompe, c'est-à-dire à l'instance de la pompe à partir de laquelle la méthode donnerEssence est appelée.
$this->getLitresEssence() appelle la méthode getLitresEssence() de la pompe pour obtenir la quantité d'essence actuelle dans la pompe.
$quantiteEssenceTransferee est la quantité d'essence que nous voulons transférer du réservoir de la pompe au véhicule.
La soustraction $this->getLitresEssence() - $quantiteEssenceTransferee calcule la nouvelle quantité d'essence restante dans la pompe après le transfert.
En résumé, cette ligne réduit la quantité d'essence dans la pompe en soustrayant la quantité transférée ($quantiteEssenceTransferee) de la quantité actuelle dans la pompe, puis utilise la méthode setLitresEssence() pour mettre à jour cette nouvelle quantité dans la pompe.

$v->setLitresEssence($v->getLitresEssence() + $quantiteEssenceTransferee);

$v représente l'objet de la classe Vehicule passé en argument à la méthode donnerEssence. C'est le véhicule auquel nous transférons de l'essence depuis la pompe.
$v->getLitresEssence() appelle la méthode getLitresEssence() du véhicule pour obtenir la quantité d'essence actuelle dans le véhicule.
$quantiteEssenceTransferee est la même quantité d'essence que celle transférée de la pompe.
En résumé, cette ligne augmente la quantité d'essence dans le véhicule en ajoutant la quantité transférée ($quantiteEssenceTransferee) à la quantité actuelle d'essence dans le véhicule, puis utilise la méthode setLitresEssence() pour mettre à jour cette nouvelle quantité dans le véhicule.

En combinant ces deux lignes, vous effectuez un transfert d'essence de la pompe au véhicule de manière cohérente. Vous déduisez la quantité d'essence transférée de la pompe et l'ajoutez à la quantité d'essence dans le véhicule, garantissant ainsi que la quantité totale d'essence reste cohérente après le ravitaillement.

        */
    }
}

//-------------------------------------------------------------------------
// -1- Crée une nouvelle instance de la classe Vehicule.
$vehicule1 = new Vehicule;
// -2- Définit la quantité d'essence du véhicule1 à 5 litres.
$vehicule1->setLitresEssence(5);
// -3- Affiche la quantité d'essence du véhicule1.
echo "Le véhicule1 possède : " . $vehicule1->getLitresEssence() . " Litres d'essence <br>";

// -4- Crée une nouvelle instance de la classe Pompe.
$pompe1 = new Pompe;
// -5- Définit la quantité d'essence dans la pompe1 à 800 litres.
$pompe1->setLitresEssence(800);
// -6- Affiche la quantité d'essence dans la pompe1.
echo "La pompe possède : " . $pompe1->getLitresEssence() . " Litres d'essence <br>";

// -7- Transfère de l'essence de la pompe1 au véhicule1.
$pompe1->donnerEssence($vehicule1);
// -8- Affiche la quantité d'essence du véhicule1 après le ravitaillement.
echo 'Après ravitaillement, le véhicule1 possède : ' . $vehicule1->getLitresEssence() . ' litres d\'essence<br>';
// -9- Affiche la quantité d'essence restante dans la pompe1 après le ravitaillement.
echo 'Après ravitaillement, la pompe possède : ' . $pompe1->getLitresEssence() . ' litres d\'essence<br>';

//---------------------------------------
// -1- Crée une nouvelle instance de la classe Vehicule.
$vehicule2 = new Vehicule;
// -2- Définit la quantité d'essence du véhicule2 à 30 litres.
$vehicule2->setLitresEssence(30);
// -3- Affiche la quantité d'essence du véhicule2.
echo 'Le véhicule2 possède : ' . $vehicule2->getLitresEssence() . ' litres d\'essence<br>';

// -4- Transfère de l'essence de la pompe1 au véhicule2.
$pompe1->donnerEssence($vehicule2);
// -8- Affiche la quantité d'essence du véhicule2 après le ravitaillement.
echo 'Après ravitaillement, le véhicule2 possède : ' . $vehicule2->getLitresEssence() . ' litres d\'essence<br>';
// -9- Affiche la quantité d'essence restante dans la pompe1 après le ravitaillement.
echo 'Après ravitaillement, la pompe possède : ' . $pompe1->getLitresEssence() . ' litres d\'essence<br>';