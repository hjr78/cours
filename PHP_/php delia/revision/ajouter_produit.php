<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            margin: 0;
            padding: 0;
            align-items: center; /* Centre le contenu verticalement */
            height: 100vh; /* Utilise toute la hauteur de la fenêtre */
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
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centrer le contenu du formulaire */
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left; /* Aligner les libellés à gauche */
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: center; /* Centrer le texte dans les champs */
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
       
        /* Style du bouton "Retour à la liste des produits" */
        .btn-retour {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
        }
        .btn-retour:hover {
            background-color: #555;
        }
        form{
            width: 50%;
            justify-content: space-evenly;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .champ-invalide {
    border: 1px solid red; /* Appliquer une bordure rouge aux champs invalides */
}


</style>
</head>

<body>

<h1>Ajouter un produit</h1>

<?php include 'nav.php'; ?>


<?php
    include 'connexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titre = $_POST["titre"];
        $description = $_POST["description"];
        $prix = $_POST["prix"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];


        //Gestion de l'upload de l'image

        $target_dir = "upload/"; //Chemin du répertoire cible pour les fichiers téléchargés
        $target_file = $target_dir. basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $sql = "INSERT INTO produit (title,description,price,city,postal_code,image) VALUES ('$titre','$description','$prix', '$ville', '$code_postal', '$target_file')";

        if($conn->query($sql) === TRUE){
            echo "Produit ajouté avec succès.";
        }else{
            echo "erreur lors de l'ajout du produit : " .$conn->error ;
        }
    }

    $conn->close()
?>


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

</body>
</html>
