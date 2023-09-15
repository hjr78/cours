<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global_local</title>
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

    <div class="dropdown">
  <button class="dropbtn">portés des variables
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../07-porté_des_variables/global_local.php">global_local</a>
  </div>
  </div>

  
    <div class="dropdown">
  <button class="dropbtn">portés des variables
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../07-porté_des_variables/global_local.php">global_local</a>
  </div>
  </div>

   <div class="dropdown">
  <button class="dropbtn">Boucles
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="../08-boucles/boucles.php">Boucles</a>
  </div>
  </div>

</div>
    </div>


<?php

// 01-boucle while

// j'initialise ma variable $i en lui affectant la valeur 0
// souvent on initialise à 0 car le premier indice d'un tableau est l'indice 0 (les boucles servent beaucoup à travailler sur les tableaux)
$i=0;


/*Dans les parenthèse on donnne la condition pour que la boucle puisse fonctionner (tant que la valeur de $i ne depasse pas 10)
    // while ($i <= 10){
        tant que la condition est respectée, on exécute ce qui est dans ce bloc d'instructions (on affiche ce qui est après echo)
            echo "Tour de boucle" . $i . "---" . '<br>';
            incrémentation de $i
            $i++
    }
*/
while($i <= 10){
    if($i == 10){
        echo "Tour de boucle " . $i . '<br>';
    }else{
        echo "Tour de boucle" . $i . "---" . '<br>';
    }
    $i++;
}

// 02 - Do while() pas très utilisé voir jamais

$i=0;

do{

    echo "Tour de boucle " . $i . "***" . '<br>';
    $i += 2;
}while($i <= 10);



// 03 - Boucle for() 
echo '<br>';

for($i=0;$i <10; $i++){
    echo "ligne" . $i . '<br>';  
}


// 03 bis utilisation d'une for pour créer un sélécteur 
echo '<br>';

echo "form";
    echo "<select>";
        echo "<option selected>Sélectionnez l'année</option>";
        for($annee = date('Y'); $annee >= date('Y')-100; $annee--){
            echo "<option> . $annee . </option>";
        }
    echo"</select>";
echo "</form>";



// 04-Double for imbriquée
echo '<br>';

echo "<table border= '1' style='border-collapse:collapse'>";
        echo "<tr>";
            for($i = 1; $i <=10; $i++){
                echo "<td> $i </td>";
            }
        echo "</tr>";
echo "</table>";

echo "</br>";

echo"<table border='1' style='border-collapse:collapse'>";
            for($ligne = 0;$ligne <=9; $ligne++){
                echo "<tr>";
                for($cellule = 0; $cellule <=9; $cellule++){
                    echo "<td>" .(10*$ligne+$cellule) +1 . "</td>";
                }
                echo"</tr>";
            }
echo "</table>"


?>

</body>
</html>