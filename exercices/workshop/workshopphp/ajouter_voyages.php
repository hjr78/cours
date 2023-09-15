<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un voyage</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <header>
        <h1>Ajouter un voyage</h1>
    </header>
      <section id="ajout-voyage-form">
        <form action="traitement-ajout-voyage.php" method="post" enctype="multipart/form-data">
<!-- enctype="multipart/from-data" cela signifie que le formulaire est conçu pour envoyer des fichiers binaires (comme des images, des vidéos, etc.) au serveur. -->
            <label for="nom">Nom du Voyage:</label>
            <input type="text" name="nom" required>

            <label for="description">Description:</label>
            <textarea name="description" rows="4" required></textarea>

            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*"  required>
<!-- L'attribut accept dans un élément <input type="file"> d'un formulaire HTML permet de spécifier les types de fichiers que l'utilisateur est autorisé à sélectionner lorsqu'il choisit un fichier à télécharger. Lorsque vous utilisez accept="image/*", vous indiquez que seuls les fichiers de type image sont autorisés à être sélectionnés. -->
            <label for="prix">Prix:</label>
            <input type="number" name="prix"  required>

            <button type="submit">Ajouter le Voyage</button>
        </form>
    </section>
    <section id="footer">
        <?php include 'footer.php';?>
    </section>
</body>
</html>









