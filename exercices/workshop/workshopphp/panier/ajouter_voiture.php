<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header('location: login.php');
    exit;
}


if($_SESSION['role'] !== 'admin'){
    header('location: acces_denied.php');
    exit;
}
/*if (!isset($_SESSION['user_id'])) {: Cette ligne vérifie si la variable de session 'user_id' n'est pas définie. Les variables de session sont utilisées pour stocker des informations entre les différentes pages d'un site web, et 'user_id' semble probablement contenir l'identifiant de l'utilisateur connecté. Si 'user_id' n'est pas défini, cela signifie que l'utilisateur n'est pas connecté.

Si l'utilisateur n'est pas connecté (c'est-à-dire que 'user_id' n'est pas défini), alors le script redirige l'utilisateur vers une page de connexion en utilisant la fonction header("location: login.php");. Cela signifie que l'utilisateur sera redirigé vers la page 'login.php', où il pourra saisir ses informations de connexion.

Après avoir effectué la redirection, le script utilise exit; pour s'assurer que le code s'arrête ici et que les instructions suivantes ne sont pas exécutées. Cela garantit que l'utilisateur n'accédera pas au reste du contenu de la page si il n'est pas connecté.

Si 'user_id' est défini (c'est-à-dire que l'utilisateur est connecté), le script vérifie ensuite le rôle de l'utilisateur en utilisant $_SESSION['role']. Il suppose que le rôle de l'utilisateur est stocké dans une variable de session nommée 'role'.

Si le rôle de l'utilisateur n'est pas 'admin' (c'est-à-dire s'il n'a pas les droits d'administrateur), le script redirige l'utilisateur vers une page d'accès refusé en utilisant header("location: access_denied.php");. Cela signifie que l'utilisateur n'a pas les autorisations nécessaires pour accéder à la page actuelle.

Encore une fois, le script utilise exit; pour s'assurer que l'exécution s'arrête ici, empêchant ainsi l'utilisateur d'accéder au contenu de la page s'il n'a pas les autorisations appropriées. */

require_once("db_connexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérez les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];

    // Gestion de l'image (téléchargement)
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = "images/" . $image_name; // Laissez le chemin de l'image tel quel
        move_uploaded_file($image_tmp_name, "images/" . $image_name);
    } else {
        // Vous pouvez gérer les erreurs de téléchargement ici si nécessaire
    }

    // Exécutez la requête SQL d'ajout de la voiture
    $query = "INSERT INTO voitures (marque, modele, annee, couleur, prix, image) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $image_path]);

    // Redirigez après l'ajout
    header("location: dashboard.php");
    exit;
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <?php include 'navbar.php';?>

    <h1>Ajouter une Voiture</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="marque" placeholder="Marque" required>
        <input type="text" name="modele" placeholder="Modèle" required>
        <input type="text" name="annee" placeholder="Année" required>
        <input type="text" name="couleur" placeholder="Couleur" required>
        <input type="text" name="prix" placeholder="Prix" required>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" required>
        <!-- Ajoutez d'autres champs pour les informations de la voiture ici -->
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>

