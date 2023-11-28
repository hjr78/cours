<?php
require_once 'connexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $message = $_POST["message"];

    $idProduit = $_GET['id'];
    $sql = "UPDATE `produit` SET `reservation_text` = '$message' WHERE id_produit = $idProduit";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Réservation effectuée avec succès !";
    } else {
        echo "Erreur lors de la réservation du produit : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>