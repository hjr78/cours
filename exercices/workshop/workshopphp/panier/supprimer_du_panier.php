<?php
session_start();

// Vérifiez si l'ID de la voiture est défini dans l'URL
if (isset($_GET['id'])) {
    $voiture_id = $_GET['id'];

    // Vérifiez si le panier existe dans la session
    if (isset($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];

        // Vérifiez si la voiture existe dans le panier
        if (array_key_exists($voiture_id, $panier)) {
            // Retirez complètement la voiture du panier
            unset($panier[$voiture_id]);

            // Mettez à jour le panier dans la session
            $_SESSION['panier'] = $panier;
        }
    }
}

// Redirigez l'utilisateur vers la page du panier
header('Location: panier.php');
?>