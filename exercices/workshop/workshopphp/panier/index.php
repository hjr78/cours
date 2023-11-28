<?php
session_start(); // Démarrer la session

// Inclure le fichier de connexion à la base de données
require_once("db_connexion.php");

// Sélectionnez les données des voitures depuis la base de données
$query = "SELECT * FROM voitures";
$stmt = $conn->query($query);
$voitures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <?php include 'navbar.php';?>






<!-- start tri-corps -->
<div class="container">
  <div id="electrique" class="section">
    <div class="content">
      <h1>Découvrez notre gamme 100% électrique</h1>
      <h4><a href="#">Nouvelles Audi Q4 e-tron et Q4 Sportback e-tron, 100% électriques.</a></h4>
    </div>
    <div class="overlay"></div>
  </div>
  <div id="disponibles" class="section">
    <div class="content">
    <h1>Nos modèles disponibles immédiatement</h1>
      <h4><a href="#">Voir tous les modèles.</a></h4>
    </div>
    <div class="overlay"></div>
  </div>
  <div id="rs" class="section">
    <div class="content">
<div class="row">
  <div class="col-sm-4"> <span> <div class="rhombus"></div></span>
    <h1>RS</h1>
    </div>
</div>
      <h4><a href="#">L'expérience d'une conduite à l'état pur.</a></h4>
    </div>
    <div class="overlay"></div>
  </div>
</div>

<!-- fin tri-corps -->


    <h1>Liste des Voitures</h1>
    <div class="voitures">
        <?php foreach ($voitures as $voiture) : ?>
            <div class="voiture">
                <img src="<?php echo $voiture['image']; ?>" alt="<?php echo $voiture['marque'] . ' ' . $voiture['modele']; ?>">
                <h2><?php echo $voiture['marque'] . ' ' . $voiture['modele']; ?></h2>
                <p>Année : <?php echo $voiture['annee']; ?></p>
                <p>Couleur : <?php echo $voiture['couleur']; ?></p>
                <p>Prix : $<?php echo number_format($voiture['prix'], 2); ?></p>
                <form method="post" action="ajouter_au_panier.php">
                    <input type="hidden" name="voiture_id" value="<?php echo $voiture['id']; ?>">
                    <input type="submit" name="ajouter_au_panier" value="Ajouter au panier">
                </form>
            </div>
        <?php endforeach; ?>
    </div>
  <!-- FOOTER START -->
<div class="footer">

 <div class="contain">
    
        <h1 id="h1footer">
          
          
    © 2023 LePoleS. Tous droits réservés.</h1>
    
    
    <div class="col">
    <ul> <li>Mentions légales</li>
      <li>Politique sur les cookies</li>
      <li>Gérer vos cookies</li>
      
  </ul>
  </div>
   
  <div class="col">
     <ul>
 
      <li>Système de lanceur d'alerte</li>
      <li>Étiquettes énergetiques pneumatiques</li>
      <li>Devis & RDV entretien en ligne</li>
      
  </ul>
  </div>
  
   <div class="col">
   <ul>
      
      <li>Demande d'information</li>
      <li>Recrutement</li>
      <li>Opérateurs indépendants</li>
    
  </ul>
  </div>
   
  <div class="col">
  <ul>
     
      <li>Réseau</li>
      <li>Recevez toute l'actualité </li>
    
   </ul>
    
   </div>
   <br>
<br>
   </div>
  
   
   
 
<div class="clearfix"></div>
</div>

</div>
<!-- END OF FOOTER -->
</body>
</html>