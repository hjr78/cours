<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
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

// une variable est un espace mémoire ( ou plus simplement une boîte) dans lequel on stokxe une information (une donnée). Cette information étant récupérable ensuite à tout  moment dans notre code
// les information stokées dedans peuvent être des chaines de caractère (string, nombre entier (integer) float (nombre decimaal), des requetes sql, des tableaux (un array est ube sorte de variable) ou encore un booléen (on stocke ou TRUE ou FALSE dans la variable)

// 01- utilité de la variable 

echo "<p>Bonjour Fred</p>";
echo "<p>Comment vas-tu Fred</p>";
echo "<h2>Affichage de profil de Fred</h2>";

$prenom = "Fred";

echo "<p>Bonjour $prenom</p>";
echo "<p>Comment vas-tu $prenom</p>";
echo "<h2>Affichage de profil de $prenom</h2>";

// 02 regles concernant les variables
// pour les déclarer, je dois écrire la lettre $
// si je mets un chiffre après le signe $, je génère une erreur php (je ne peux pas nommer $9prénom)
// Par convention, on demande à ne pas débuter leur nom par un - ou tout autre caractère Spécial @ # etc ...
// toujour par convention, on ne met pas d'accent pour le nom de la variable. On n'écrit pas $prénom

// par convention, si le nom de la variable est composé, on doit l'écrire ou en cemelCase ($monPrenom) ou en snakecase ($mon_prenom). On n'écrit pas $monprenom ou $mon prenom
// par convention, on donne un nom logique, pertinent, qui parle à une variable.
$couleur = "rouge";
// attention, le  nom d'une variable est sensible à la casse
echo $couleur . "<br>";


// la valeur affectée à une variable peut être modifiée. C'est la même variable mais avec une valeur différente
$couleur = "bleu";
  echo $couleur . "<br>";

  // 03 type de variables
  $prenom = "Fred";
  echo gettype( $prenom) . "<br>";

  $nombreEntier = 32;
  echo gettype($nombreEntier) . "<br>";

  $nombreDecimal = 5.4;
  echo gettype($nombreDecimal) . "<br>";//pour des raisons historiques, "double" est retournée lorsqu'une valeur de type float est fournie, et non "float""

  $booleen = TRUE;
  echo gettype( $booleen) . "<br>";


?>

</body>
</html>