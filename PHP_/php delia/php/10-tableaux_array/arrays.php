<?php
// Une variable permet de stocker une valeur
$listePrenom = "Asuna, Naruto, Kazuto, Hinata";

echo $listePrenom . "<br>";

$tableauPrenom = array("Asuna", "Naruto", "Kazuto", "Hinata", 15);

echo "<pre>";
print_r($tableauPrenom);
"</pre>";

echo "<br>";

echo "<pre>";
var_dump($tableauPrenom);
// var_sump() va afficher le lenght de chaque mot (strlen au lien de iconv_strlen, affiche la longueur en fonction du nobre d'octet utililsé par la variable).
"</pre>";

echo "<br>";

echo $tableauPrenom[1];

// Autre syntaxe pour déclarer un tableau. Elle est plus pratique que la première pour ajouter des élémentts tavleau au fur et à mesure de notre code si on ne les connait pas tous au départ.

$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Espagne";
$listePays[] = "Italie";
$listePays[] = "Maroc";
$listePays[] = "Roumanie";

// Boucle forEach adapté au tableau

foreach ($listePays as $key => $value) {
    echo "<p> $value a pour indice $key </p>";
}

// forEach Version ul/li
echo "<ul>";
foreach ($listePays as $key => $value) {
    echo "<li>$value a pour undice $key</li>";
}
echo "</ul>";

// Permet d'afficher le tableau sous forme de chaine de caractère espacé par le premier argument de la fonction, ici " - ".
echo "<p>" . implode(' - ', $tableauPrenom) . "</p>";

// Count et sizeof

echo count($tableauPrenom) . "<br>";

echo sizeof($tableauPrenom) . "<br>";

// sizeof() et count() sont essentiellement les mêmes en PHP, et vous pouvez utiliser l'une ou l'autre pour compter les éléments d'un tableau ou d'un objet. Cependant, count() est plus couramment utilisée dans la communauté PHP.