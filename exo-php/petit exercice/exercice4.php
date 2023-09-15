<!-- Exercice 4:
Écrivez un programme PHP pour afficher la table de multiplication jusqu’à 5 * 5.
Exemple:
 1   2   3   4   5
 2   4   6   8  10
 3   6   9  12  15
 4   8  12  16  20
 5  10  15  20  25 -->


 <?php

for ($ligne=1; $ligne < 6; $ligne++){
    for($cellule = 1; $cellule <6; $cellule++){
        echo $ligne * $cellule . " ";
    }

    echo "<br>";
}

?>