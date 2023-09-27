<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    
    <h1>Tout les produits</h1>

    <?php include 'nav.php'; ?>


    <?php
    include 'connexion.php';

    $sql = "SELECT * FROM produit ORDER BY id_produit DESC LIMIT 15";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src='" . $row["image"] . "' alt='Image du produit'>";
            echo "<h2>" . strtoupper($row["title"]) . "</h2>";
            echo "<p>Description : " . $row["description"] . "</p>";
            echo "<p>Prix : $" . number_format($row["price"], 2) . "</p>";
            echo "<p>Ville : " . $row["city"] . "</p>";
            echo "<p>Code Postal : " . $row["postal_code"] . "</p>";
            echo "<p><a href='consulter_produit.php?id=" . $row["id_produit"] . "'>Voir plus</a></p>";

            
            echo "<hr>";
        }
    } else {
        echo "Aucun produit trouvé.";
    }

    $conn->close();
    ?>



</body>
</html>