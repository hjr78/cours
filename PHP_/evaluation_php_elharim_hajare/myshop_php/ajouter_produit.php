
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

<h3 style="text-align: center;">Ajouter un produit</h3>



<form id="monFormulaire" action="ajouter_produit.php" method="POST" enctype="multipart/form-data" onsubmit="return validerFormulaire();">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Prix :</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="city">Ville :</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="postal_code">Code Postal :</label>
        <input type="text" id="postal_code" name="postal_code" required><br><br>

        <label for="image">Image :</label>
        <input type="file" id="image" name="image"><br><br>

        <input type="submit" value="Ajouter le produit">
</form>

<?php
 include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $city = $_POST["city"];
    $postal_code = $_POST["postal_code"];

    // Gestion de l'upload de l'image
    $target_dir = "assets/image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("La connexion a échoué : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO produit (title, description, price, city, postal_code, image) VALUES ('$title', '$description', '$price', '$city', '$postal_code', '$target_file')";

        if (mysqli_query($conn, $sql)) {
            echo "Produit ajouté avec succès !";
        } else {
            echo "Erreur lors de l'ajout du produit :( Veuillez réessayer " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Erreur lors du téléchargement de l'image.";
    }
}

?>
</body>
</html>
