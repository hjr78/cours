<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmétiques</title>
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

// .. les opérateurs arithmetiques sont + - * /

$premierNombre = 4;
$secondNombre = 2;

// il perment donc donc d'additionner, soustraire, multiplier et diviser

echo $premierNombre + $secondNombre . "<br>";
echo $premierNombre - $secondNombre . "<br>";
echo $premierNombre * $secondNombre . "<br>";
echo $premierNombre / $secondNombre . "<br>";

// deux autres opérateur arithmetique, le modulo et l'exponentiatin
// le modulo donne le reste de la division
// L'exponentiation permet d'affecter au premier nombre la puissance du second nombre
echo $premierNombre % $secondNombre . "<br>";
// ici, c'est 4 puissance 2 (ou 4²)
echo $premierNombre ** $secondNombre . "<br>";


?>
</body>
</html>