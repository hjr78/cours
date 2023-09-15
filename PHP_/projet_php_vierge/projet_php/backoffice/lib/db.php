<?php


    $loginDB ="root";
    $passwordDB="";
    $dbName ="afs";
    $serverName ="localhost";

    // mysqli_connect cest un laisser passer pour acceder plus tard à la  BDD

    $db_connect = mysqli_connect($serverName, $loginDB, $passwordDB, $dbName);

    // function mysqli_connect($parametre1, $parametre2, $parametre3, $parametre4){
    //     $test = $parametre1.$parametre2;
        // le nom du serveur -> une connexion sur http://$parametre1;
    

           

?>