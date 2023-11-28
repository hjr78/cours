<?php
session_start();

// Vérifiez si l'ID de la voiture et l'action sont définis dans l'URL
if (isset($_GET['id']) && isset($_GET['action'])) {
    $voiture_id = $_GET['id'];
    $action = $_GET['action'];

    // Vérifiez si le panier existe dans la session
    if (isset($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];

        // Vérifiez si la voiture existe dans le panier
        if (array_key_exists($voiture_id, $panier)) {
            // Si l'action est "increment", augmentez la quantité de la voiture dans le panier
            if ($action === 'increment') {
                $panier[$voiture_id]['quantite']++;
            }
            // Si l'action est "decrement", diminuez la quantité de la voiture dans le panier
            elseif ($action === 'decrement') {
                if ($panier[$voiture_id]['quantite'] > 1) {
                    $panier[$voiture_id]['quantite']--;
                }
            }
            // Si l'action est "supprimer", retirez complètement la voiture du panier
            elseif ($action === 'supprimer') {
                unset($panier[$voiture_id]);
            }

            // Mettez à jour le panier dans la session
            $_SESSION['panier'] = $panier;
        }
    }
}

// Redirigez l'utilisateur vers la page du panier
header('Location: panier.php');
?>