<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nos voyages</h1>
    </header>

    <section id="produit">
        <?php include 'produit.php';?>
    </section>


    <!-- ajouter le lien vers la page d'ajout de voyage -->

    <a class="redirection-ajout-voyage" href="ajouter_voyages.php">Ajouter un voyage</a>
    <section id="footer">
        <?php include 'footer.php';?>
    </section>

</body>
</html>