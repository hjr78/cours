<!-- une session sert à conserver des informations temporaire . On peut ouvrir une session pour l'utilisateur qui a mit un produit dans son panier mais on n'envoie pas cette information en BDD, car elle n'est pas définitive. Peut-être va t-il supprimer ce produit de son panier, ou en ajouter  un deuxième etc -->

<?php

// pour qu'une session puisse être débutée et que l'on puisse récupérer ses informations, il faut déclarer en haut du fichier, avant toute chose (doctype etc) un session_start

session_start();

$_SESSION['prenom'] = "Hajare";
$_SESSION['statut'] = "admin";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="session_arrivee.php">Aller vers le profil</a></button>
</body>
</html>
