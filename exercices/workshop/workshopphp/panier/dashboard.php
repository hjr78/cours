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

// Récupérer toutes les informations des voitures depuis la base de données
$query = "SELECT * FROM voitures";
$stmt = $conn->query($query);
$voitures = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once("db_connexion.php");

// Traitement des actions CRUD des voitures
if (isset($_POST['ajouter'])) {
    // Opération d'ajout (Create) d'une voiture
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    
    // Exécutez la requête SQL d'ajout
    $query = "INSERT INTO voitures (marque, modele, annee, couleur, prix, description) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $description]);

    // Redirigez après l'ajout
    header("location: dashboard.php");
    exit;
}

if (isset($_POST['modifier'])) {
    // Opération de mise à jour (Update) d'une voiture
    $id = $_POST['id'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    
    // Exécutez la requête SQL de mise à jour
    $query = "UPDATE voitures SET marque = ?, modele = ?, annee = ?, couleur = ?, prix = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $description, $id]);

    // Redirigez après la mise à jour
    header("location: dashboard.php");
    exit;
}

if (isset($_GET['supprimer'])) {
    // Opération de suppression (Delete) d'une voiture
    $id = $_GET['supprimer'];
    
    // Exécutez la requête SQL de suppression
    $query = "DELETE FROM voitures WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);

    // Redirigez après la suppression
    header("location: dashboard.php");
    exit;
}

// Sélectionnez et affichez les données existantes (Read)
$query = "SELECT * FROM voitures";
$stmt = $conn->query($query);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <?php include 'navbar.php';?>

    <h1>Tableau de Bord</h1>
<!-- Ajout des voitures -->
<a href="ajouter_voiture.php" id="ajouter-voiture-link">Ajouter une Voiture</a>

    <!-- Liste des voitures -->
    <table>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Couleur</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($voitures as $voiture) : ?>
            <tr>
    <td><?php echo $voiture['marque']; ?></td>
                <td><?php echo $voiture['modele']; ?></td>
                <td><?php echo $voiture['annee']; ?></td>
                <td><?php echo $voiture['couleur']; ?></td>
                <td><?php echo number_format($voiture['prix'], 2); ?></td>
                <td><img src="<?php echo $voiture['image']; ?>" alt="<?php echo $voiture['marque'] . ' ' . $voiture['modele']; ?>" width="100"></td>
                <td>
                    <a href="modifier_voiture.php?id=<?php echo $voiture['id']; ?>">Modifier</a>
                    <a href="supprimer_voiture.php?id=<?php echo $voiture['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>