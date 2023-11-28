<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    header("location: access_denied.php");
    exit;
}

require_once("db_connexion.php");

if (isset($_GET['id'])) {
    $voiture_id = $_GET['id'];

    // Effectuez l'opération de suppression
    $query = "DELETE FROM voitures WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$voiture_id]);

    // Redirigez après la suppression
    header("location: dashboard.php");
    exit;
} else {
    // Si l'ID de la voiture n'est pas défini, redirigez vers une page d'erreur ou de gestion des erreurs
    header("location: erreur.php");
    exit;
}
?>