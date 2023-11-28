<?php
session_start();
require_once("db_connexion.php");


// Vérifiez si le panier existe dans la session
if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
    $panier = $_SESSION['panier'];
} else {
    $panier = array();
}



// Vous pouvez maintenant afficher le contenu du panier et permettre à l'utilisateur de le gérer
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panier</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
      <style>

        /* Style pour le tableau */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Style pour les images des voitures */
.voiture-image {
    max-width: 100px;
    max-height: 100px;
}

/* Style pour le bouton "Passer à la caisse" */
a[href="checkout.php"] {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 20px;
}

a[href="checkout.php"]:hover {
    background-color: #0056b3;
}
/* Style pour les liens +, - et Supprimer dans le panier */
a[href*="modifier_panier.php"] {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-right: 5px;
}

a[href*="modifier_panier.php"]:hover {
    background-color: #0056b3;
}

a[href*="supprimer_du_panier.php"] {
    display: inline-block;
    padding: 5px 10px;
    background-color: #cc0000;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-right: 5px;
}

a[href*="supprimer_du_panier.php"]:hover {
    background-color: #aa0000;
}
    </style>
</head>
<body>
  <?php include 'navbar.php';?>


    <h1>Votre Panier</h1>

<?php  if (count($panier) > 0) : ?>
        <table>
            <tr>
                <th>Voiture</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php foreach ($panier as $voiture_id => $item) :
                // Récupérez toutes les informations de la voiture depuis la base de données
                $query_info = "SELECT * FROM voitures WHERE id = ?";
                $stmt_info = $conn->prepare($query_info);
                $stmt_info->execute([$voiture_id]);
                $voiture_info = $stmt_info->fetch(PDO::FETCH_ASSOC);
                $prix_unitaire = $voiture_info['prix'];
                ?>
                <tr>
                    <td>
                        <img src="<?php echo $voiture_info['image']; ?>" alt="<?php echo $voiture_info['marque'] . ' ' . $voiture_info['modele']; ?>" class="voiture-image">
                        <?php echo $voiture_info['marque'] . ' ' . $voiture_info['modele']; ?>
                    </td>
                    <td><?php echo $item['quantite']; ?></td>
                    <td>$<?php echo number_format($prix_unitaire, 2); ?></td>
                    <td>$<?php echo number_format($item['quantite'] * $prix_unitaire, 2); ?></td>
                    <td>
                        <a href="modifier_panier.php?id=<?php echo $voiture_id; ?>&action=increment">+</a>
                        <a href="modifier_panier.php?id=<?php echo $voiture_id; ?>&action=decrement">-</a>
                        <a href="supprimer_du_panier.php?id=<?php echo $voiture_id; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>Votre panier est vide.</p>
    <?php endif; ?>

    <a href="checkout.php">Passer à la caisse</a>
</body>
</html>