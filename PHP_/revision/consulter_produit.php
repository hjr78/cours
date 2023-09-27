<!DOCTYPE html>
<html>
<head>
    <title>Consulter un produit</title>

  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        nav ul {
            list-style-type: none;
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }

        img {
            max-width: 40%;
            height: auto;
            
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Consulter un produit</h1>

    <nav>
        <ul>
            <li><a href="index.php">Retour à la liste des produits</a></li>
        </ul>
    </nav>

    <?php
    include 'connexion.php';

    if (isset($_GET["id"])) {
        $product_id = $_GET["id"];

        $sql = "SELECT * FROM produit WHERE id_produit = $product_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
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
        echo "ID du produit non spécifié.";
    }

    $conn->close();
    ?>
</body>
</html>