<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Affichage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../01-affichage/instructions.php">instructions</a>
    </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Variables et constantes
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../02-variables et constante/variables.php">Variables</a>
    <a href="../02-variables et constante/constantes.php">Constantes</a>
  </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Concaténation et syntaxe
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../03-concatenation_et_syntaxe/concatenation.php">Concaténation</a>
    <a href="../03-concatenation_et_syntaxe/syntaxes_quotes.php">Syntaxe quotes</a>
  </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Opérateurs arithmétique
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../04-operateur_arithmétiques/arithmétiques.php">Arithmétique</a>
    <a href="../04-operateur_arithmétiques/operateur_affectation.php">Opérateurs par affectation</a>
  </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Conditions
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../05-conditions/if_else.php">IF ELSE</a>
    <a href="../05-conditions/switch.php">SWITCH</a>
  </div>
  </div>

  <div class="dropdown">
  <button class="dropbtn">Fonctions
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../06-fonctions/predefinies.php">Prédefinies</a>
    <a href="../06-fonctions/utilisateur.php">utilisateur</a>
    <a href="../06-fonctions/exo_tva.php">Exercice TVA</a>
  </div>
  </div>

</div>
    </div>

    <?php

// syntaxe au dessus pour ouvirir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facile pour debug
// on peut aussi le fermer mais plus difficile à corriger en cas de problème


// instruction d'affichage très souvent utilisée

echo "Bonjour, Je suis Delia. <br>";

// le ; est un fin d'instruction, il est obligatoire pour signifier cet ordre au navigateur, sinon erreur php
// une secobde instruction est possibme en PHP avec le mot print, mais il n'est que très peu utilisé, dans pratiquement aucun script ou tutoriel

?>

<!-- Passage contracaté en PHP -->
<!--  il necessite pas d'echo, il est implicite, il ne sert que pour afficher -->

<?= "Nous sommes lundi <br>" ?>

<?php 
// Affichage non conventionnel (print_r et var_dump)
// l'affichage non conventionnel ne sert que durant la période de développement du site.Il est utile pour le développeur, pas pour le visiteur du site.
// !!!!!!!! le jour où le site est mis en ligne, il faut mettre tous les print_r et var_dump en commentaire ou les supprimer !!!!!!!!!

// je déclare un variable pour ensuite la tester
$prenom='Delia';

//la balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer 
echo "<pre>";
    print_r(gettype($prenom));
echo "</pre>";

// les commentaire en php

// 1er type de commentaire

/*
2éme type de commentaire sur plusiseurs lignes
*/

# 3éme type de commentaire

// mix PHP et HTML

echo '<h1> Salut </h1>';
echo 'Nous somme <strong>lundi</strong><br>';
echo '<div class="heure">L\'ecole commence a 9h00<br></div>';

?>

<!-- les syntaxes en dessus ne sont pas tolérées, même si elles fonctionnents. Elles alternant trop les passages d'une langage à l'autre.C'est dit code "sale" -->

<h1><?php echo "Bonjour"; ?></h1>
<?php echo "Nous sommes " ?> <strong>lundi</strong> <?php echo " et il est 15h"; ?>

<!-- Le code PHP n'est pas visible dans le code source de la page. C'est la preuve que le navigateur ne peut pas gérér ce langage, seulement les langages du front -->
</body>
</html>

<?php

// syntaxe au dessus pour ouvirir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facile pour debug
// on peut aussi le fermer mais plus difficile à corriger en cas de problème


// instruction d'affichage très souvent utilisée

echo "Bonjour, Je suis Delia. <br>";

// le ; est un fin d'instruction, il est obligatoire pour signifier cet ordre au navigateur, sinon erreur php
// une secobde instruction est possibme en PHP avec le mot print, mais il n'est que très peu utilisé, dans pratiquement aucun script ou tutoriel

?>

<!-- Passage contracaté en PHP -->
<!--  il necessite pas d'echo, il est implicite, il ne sert que pour afficher -->

<?= "Nous sommes lundi <br>" ?>

<?php 
// Affichage non conventionnel (print_r et var_dump)
// l'affichage non conventionnel ne sert que durant la période de développement du site.Il est utile pour le développeur, pas pour le visiteur du site.
// !!!!!!!! le jour où le site est mis en ligne, il faut mettre tous les print_r et var_dump en commentaire ou les supprimer !!!!!!!!!

// je déclare un variable pour ensuite la tester
$prenom='Delia';

//la balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer 
echo "<pre>";
    print_r(gettype($prenom));
echo "</pre>";

// les commentaire en php

// 1er type de commentaire

/*
2éme type de commentaire sur plusiseurs lignes
*/

# 3éme type de commentaire

// mix PHP et HTML

echo '<h1> Salut </h1>';
echo 'Nous somme <strong>lundi</strong><br>';
echo '<div class="heure">L\'ecole commence a 9h00<br></div>';

?>

<!-- les syntaxes en dessus ne sont pas tolérées, même si elles fonctionnents. Elles alternant trop les passages d'une langage à l'autre.C'est dit code "sale" -->

<h1><?php echo "Bonjour"; ?></h1>
<?php echo "Nous sommes " ?> <strong>lundi</strong> <?php echo " et il est 15h"; ?>

<!-- Le code PHP n'est pas visible dans le code source de la page. C'est la preuve que le navigateur ne peut pas gérér ce langage, seulement les langages du front -->