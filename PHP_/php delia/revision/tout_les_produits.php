<!DOCTYPE html>
<html>
<head>

    <title>Tous les produits</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>Tous les produits</h1>

    <!-- Barre de navigation -->
    <?php include 'nav.php'; ?>  

    <?php
    // Connexion à la base de données (remplacez les valeurs par vos propres informations de connexion)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Sélectionner tous les produits de la base de données
    $sql = "SELECT * FROM produit";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src='" . $row["image"] . "' alt='Image du produit'>";
            echo "<h2>" . strtoupper($row["title"]) . "</h2>";
            echo "<p>Description : " . $row["description"] . "</p>";
            echo "<p>Prix : $" . number_format($row["price"], 2) . "</p>";
            echo "<p>Ville : " . $row["city"] . "</p>";
            echo "<p>Code Postal : " . $row["postal_code"] . "</p>";

            // Vérifier si le produit est réservé
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

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</body>
</html>