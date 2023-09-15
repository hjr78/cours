<?php

if (isset($_POST['Envoyer'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if (empty($nom) || empty($prenom)){
        echo"Veuillez-remplir tout les champs";
    }else{
        echo"Bienvenue, $prenom $nom !";
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
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer">
    </form>

</body>
</html>