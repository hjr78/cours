<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo TVA</title>
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

  // ercecice avec un effction qui va calculer le TVA pour un prix HT.

// fonction qui n'attend pas de paramètre
function calculTVA(){
  // 
  return 80*1.2 . '€ TTC';
}

// j'éxecute en affichant le résultat
echo calculTVA() .'<br>';



/*ETAPE 1
elle devra recevoir le prix en argument, puis elle calculera le prix TTC
  OBJECTIF: La fonction est capabme de calculer le prix TTC de n'importe quel chiffre et pas juste 100
  */

  function calculTVA2($prix){
    return $prix * 1.2 . ' € TTC';
  }

  echo calculTVA2(500) . '<br>';

  /* ETAPE 2
  La fonction doit a present calculer un prix TTC en Fonction de deux arguments qu'on doit lui donner. Le prix HT mais aussi quel taux de TVA appliquer au prix HT
  */

  function calculTVA3($prix,$tva){
    return $prix * $tva . ' € TTC';
  }

  echo calculTVA3(500,1.055) . '<br>';

  echo calculTVA3(300,1.2) . '<br>';

  // cette fonction prend toujours deux arguments, sauf que celui concernant le taux TVA va recevoir une valeur par défaut ($taux= 1.2)

  function calculTVA4($prix, $taux =1.2){
    // elle multiplie le prix par le taux 
    return $prix * $taux .'€ TTC';
  }

  // au moment de l'éxecution si je ne donne qu'un argument (100) alors ma fonction va lui appliquer le taux par défaut (1.2)
  echo calculTVA4(100) . '<br>';

  // si par contre je précise le prix mais aussi le taux (différent de celui par défaut ) alors ce dernier va écraser la valeur du taux par défaut pour la remplacer (1.055 va remplacer 1.2)
  echo calculTVA4(100,1.055) . '<br>';