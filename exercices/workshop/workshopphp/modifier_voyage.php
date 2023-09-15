<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style de base pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Style de l'en-tête */
        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Style du titre */
        h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Style du formulaire */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        /* Style des libellés et des champs de formulaire */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Style du bouton */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style du lien de retour */
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Modifier un Voyage</title>
</head>

<body>
    <header>
        <h1>Modifier un Voyage</h1>
    </header>

    <?php

    // Connexion à la base de données

    $mysqli = new mysqli('localhost', 'root', '', 'voyage');

    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['voyage_id_modifier'])) {
            $voyage_id = $_POST['voyage_id_modifier'];


            // Récupérez les détails du voyage depuis la base de données en fonction de l'ID
            $sql = "SELECT * FROM produits WHERE id = $voyage_id";
            $result = $mysqli->query($sql);

            // Affichez un formulaire pré-rempli avec les détails du voyage
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo '<form method="post" action="traitement_modification.php">';
                echo '<input type="hidden" name="voyage_id" value="' . $voyage_id . '">';
                echo '<label for="nom">Nom du voyage :</label>';
                echo '<input type="text" name="nom" value="' . $row['nom'] . '">';
                echo '<label for="description">Description :</label>';
                echo '<textarea name="description">' . $row['description'] . '</textarea><br>';
                echo '<label for="prix">Prix :</label>';
                echo '<input type="number" name="prix" value="' . $row['prix'] . '">';
                echo '<button type="submit">Enregistrer les modifications</button>';
                echo '</form>';
            } else {
                echo 'Voyage non trouvé.';
            }
        }
    }else{
        echo 'Requête invalide';
    }
    $mysqli->close();


    ?>
    <a href="index.php">Retour à la liste des voyages</a>
</body>

</html>