<?php 
require_once 'traitement_reservation.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->

        <?php include 'nav.php';?>
       
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Amazon From Scratch</h1>
                </div>
            </div>
        </header>

<h3 style="text-align: center;">Votre produit sélectionné</h3>

<?php
include 'connexion.php';

if (isset($_GET["id"])) {
    $product_id = $_GET["id"];

    $sql = "SELECT * FROM produit WHERE id_produit = $product_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<img src='" . $row["image"] . "' alt='Image du produit'>";
            echo "<h2>" . strtoupper($row["title"]) . "</h2>";
            echo "<p>Description : " . $row["description"] . "</p>";
            echo "<p>Prix : $" . number_format($row["price"], 2) . "</p>";
            echo "<p>Ville : " . $row["city"] . "</p>";
            echo "<p>Code Postal : " . $row["postal_code"] . "</p>";

            echo "<hr>";
        } else {
            echo "Produit non trouvé.";
        }
    } else {
        echo "Erreur lors de la requête : " . mysqli_error($conn);
    }
} else {
    echo "ID du produit non spécifié.";
}

mysqli_close($conn);

include 'reservation_produit.php';
?>

