<?php

if (isset($_POST['Envoyer'])) {
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];

    if (empty($nombre1) || empty($nombre2)){
        echo"Veuillez-remplir tout les champs";
    }else{
        $somme = $nombre1 + $nombre2;
        echo" La somme de $nombre1 et de $nombre2 est de : $somme !";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo</title>
</head>
<body>

    <form action="" method="POST">
        <label for="nom">Nombre 1</label>
        <input type="text" id="nombre1" name="nombre1">
        <br>
        <label for="prenom">Nombre 2</label>
        <input type="text" id="nombre2" name="nombre2">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer">
    </form>

</body>
</html>