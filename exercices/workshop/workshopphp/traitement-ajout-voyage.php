<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];

    // Traitement de l'image
    $image = $_FILES["image"];
    $image_nom = $image["name"];
    $image_tmp = $image["tmp_name"];
    $dossier_images = "images/";

    // Vérifiez si le dossier d'images existe, sinon, créez-le
    if (!is_dir($dossier_images)) {
        mkdir($dossier_images);
    }

    // Déplacez l'image dans le dossier d'images
    move_uploaded_file($image_tmp, $dossier_images . $image_nom);

    // Connexion à la base de données
    $mysqli = new mysqli('localhost', 'root', '', 'voyage');

    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }

    // Préparez et exécutez la requête SQL pour insérer le nouveau voyage
    $sql = "INSERT INTO produits (nom, description, image, prix) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssd", $nom, $description, $image_nom, $prix);

    if ($stmt->execute()) {
        // Redirigez l'utilisateur vers la page de confirmation ou une autre page
        header("Location: confirmation-ajout-voyage.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout du voyage.";
    }

    $stmt->close();
    $mysqli->close();
}
?>