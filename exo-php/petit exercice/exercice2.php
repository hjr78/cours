<!-- Exercice 2:
Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.
Exemple:
10
9
8
7
6
5
4
3
2
1 -->



<!-- <php  //ne pas oubliez de remettre le ? au php 

for($i = 10 ; $i >= 1 ; $i-- ){

    echo $i . "<br>";
}

?> -->


<!-- correction: -->
<?php

function decrement($n){
    if($n > 0){
        print($n . "<br>");
        decrement($n-1);
    }
}

decrement(10);
echo"<br><br>";

?>