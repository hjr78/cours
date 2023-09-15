<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'voyage');

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
}

// Récupérer les produits depuis la base de données
$result = $mysqli->query('SELECT * FROM produits');

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="produit">';
        echo '<img src="images/' . $row['image'] . '" alt="' . $row['nom'] . '">';
        echo '<h2>' . $row['nom'] . '</h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>Prix:  ' . $row['prix'] . " €" .'</p>';
        // Formulaire pour supprimer le voyage
        echo '<form method="post" action="supprimer_voyage.php">';
        echo '<input type="hidden" name="voyage_id" value="' . $row['id'] . '">';
        echo '<button type="submit">Supprimer</button>';
        echo'</form>';
        echo '<form method="post" action="modifier_voyage.php">';
        echo '<input type="hidden" name="voyage_id_modifier" value="' . $row['id'] . '">';
        echo '<button type="submit">Modiffier</button>';
        echo'</form>';

        echo '</div>';
    }

    $result->free();
}

$mysqli->close();
?>