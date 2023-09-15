<!-- Exercice 3:
Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.
Exemple:
*
**
***
****
*****
******
*******
********
*********
********** -->

<?php 

for($i = 1; $i <=10 ; $i++){

    for($j = 1 ; $j <= $i ; $j++){
        
        echo "*";
    }

    echo "<br>";
}

?>