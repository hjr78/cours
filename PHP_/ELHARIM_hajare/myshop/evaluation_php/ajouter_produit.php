<?php

require_once('lib/db.php');
// require_once('components/produit.php');
require_once('lib/product.php');


if (!empty($_POST)) {
    if (!empty($_POST['titre']) && !empty($_POST['prix']) && !empty($_POST['ville']) && !empty($_POST['code_postal'])) {
        echo 'produit ajouté';
        $classProduit = new Produit($db);
        $classProduit->insert($_POST, $_FILES);
    }
}

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

    <?php include('components/nav.php'); ?>


    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Amazon From Scratch</h1>
            </div>
        </div>
    </header>


    <form id="monFormulaire" action="ajouter_produit.php" method="POST" enctype="multipart/form-data" onsubmit="return validerFormulaire();">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br><br>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" step="0.01" required><br><br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>
        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>
        <label for="image">Image :</label>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="Ajouter le produit">
    </form>



    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Amazon From Scratch 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>