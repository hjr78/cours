<?php
session_start();

if (isset($_POST['voiture_id'])) {
    $voiture_id = $_POST['voiture_id'];

    // Vérifiez si le panier existe dans la session, sinon, créez-le
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Vérifiez si la voiture est déjà dans le panier
    if (isset($_SESSION['panier'][$voiture_id])) {
        // La voiture est déjà dans le panier, augmentez la quantité
        $_SESSION['panier'][$voiture_id]['quantite']++;
    } else {
        // La voiture n'est pas encore dans le panier, ajoutez-la avec une quantité de 1
        $_SESSION['panier'][$voiture_id] = array(
            'quantite' => 1
            // Vous pouvez stocker plus d'informations sur la voiture ici si nécessaire
        );
    }

    // Redirigez l'utilisateur vers la page du panier
    header("location: panier.php");
    exit;
} else {
    // Redirigez l'utilisateur vers la page d'accueil ou une autre page d'erreur si aucune voiture n'est spécifiée
    header("location: index.php");
    exit;
}
?>