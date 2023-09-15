<?php 
// Connexion à la base de données
    $mysqli = new mysqli('localhost', 'root', '', 'voyage');

    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
    }
       
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['voyage_id']) && isset($_POST['nom'])&& isset($_POST['description']) && isset($_POST['prix'])){
        $voyage_id = $_POST['voyage_id'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
 // Mettez à jour les détails du voyage dans la base de données
        $sql = "UPDATE produits SET nom ='$nom', description = '$description', prix='$prix' WHERE id = $voyage_id";

        if($mysqli->query($sql)){
            echo 'Voyage mis à jour avec succés.';
        }else{
            echo 'Erreur lors de la mise à jour du voyage : ' .$mysqli->error;
        }
    }else{
        echo 'Données du formulaire manquantes.';
    }
}else{
    echo 'Requête invalide';
}

$mysqli->close();
?>







