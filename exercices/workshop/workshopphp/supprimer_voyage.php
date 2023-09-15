<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'voyage');

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
}

// Vérifiez si un voyage a été sélectionné
if (isset($_POST['voyage_id']) && is_numeric($_POST['voyage_id'])) {
    $id_voyage = $_POST['voyage_id'];

    // Supprimez le voyage de la base de données
    $sql = "DELETE FROM produits WHERE id = $id_voyage";

    if ($mysqli->query($sql)) {
        echo 'Voyage supprimé avec succès.<br>';

        echo '<a href="index.php">Retour à la liste des produits</a>';

    } else {
        echo 'Erreur lors de la suppression du voyage : ' . $mysqli->error;
    }
} else {
    echo 'Aucun voyage sélectionné.';
}

$mysqli->close();
?>