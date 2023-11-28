<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
}
if ($_SESSION['role'] !== 'admin') {
    header("location: access_denied.php");
    exit;
}
require_once("db_connexion.php");
if (isset($_GET['id'])) {
    $voiture_id = $_GET['id'];
    // Récupérez les informations de la voiture depuis la base de données
    $query = "SELECT * FROM voitures WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$voiture_id]);
    $voiture = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$voiture) {
        // La voiture n'existe pas, redirigez vers une page d'erreur ou de gestion des erreurs
        header("location: erreur.php");
        exit;
    }
} else {
    // Si l'ID de la voiture n'est pas défini, redirigez vers une page d'erreur ou de gestion des erreurs
    header("location: erreur.php");
    exit;
}
if (isset($_POST['modifier'])) {
    // Récupérez les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];
    // Gestion de l'image (téléchargement)
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = "images/" . $image_name;
        move_uploaded_file($image_tmp_name, $image_path);
        // Mettez à jour le chemin de l'image dans la base de données
        $query = "UPDATE voitures SET marque = ?, modele = ?, annee = ?, couleur = ?, prix = ?, image = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $image_path, $voiture_id]);
    } else {
        // Si aucune nouvelle image n'a été téléchargée, mettez à jour les autres informations sans changer le chemin de l'image
        $query = "UPDATE voitures SET marque = ?, modele = ?, annee = ?, couleur = ?, prix = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $voiture_id]);
    }
    // Redirigez après la mise à jour
    header("location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <?php include 'navbar.php';?>
    <!-- Formulaire de modification -->
    <h1>Modifier la Voiture</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="marque" placeholder="Marque" value="<?php echo $voiture['marque']; ?>" required>
        <input type="text" name="modele" placeholder="Modèle" value="<?php echo $voiture['modele']; ?>" required>
        <input type="text" name="annee" placeholder="Année" value="<?php echo $voiture['annee']; ?>" required>
        <input type="text" name="couleur" placeholder="Couleur" value="<?php echo $voiture['couleur']; ?>" required>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image">
        <input type="text" name="prix" placeholder="Prix" value="<?php echo $voiture['prix']; ?>" required>
        <!-- Ajoutez d'autres champs pour les informations de la voiture ici -->
        <input type="submit" name="modifier" value="Modifier">
    </form>
</body>
</html>