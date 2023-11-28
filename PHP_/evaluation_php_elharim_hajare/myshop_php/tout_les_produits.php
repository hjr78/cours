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

<h3 style="text-align: center;">Tout les produits</h3>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

$sql = "SELECT * FROM produit ORDER BY id_produit DESC LIMIT 15";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<img src='" . $row["image"] . "' alt='Image du produit'>";
        echo "<h2>" . strtoupper($row["title"]) . "</h2>";
        echo "<p>Description : " . $row["description"] . "</p>";
        echo "<p>Prix : $" . number_format($row["price"], 2) . "</p>";
        echo "<p>Ville : " . $row["city"] . "</p>";
        echo "<p>Code Postal : " . $row["postal_code"] . "</p>";

        if (!empty($row["reservation_text"])) {
            echo "<p><strong>Statut : Réservé</strong></p>";
        } else {
            echo "<p><a href='consulter_produit.php?id=" . $row["id_produit"] . "'>Consulter ce produit</a></p>";
        }

        echo "<hr>";
    }
} else {
    echo "Aucun produit trouvé.";
}

mysqli_close($conn);
?>