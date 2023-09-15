<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?= $_SESSION['prenom'] ?> </title>
</head>
<body>
    
<?php if(isset($_SESSION)): ?>
    <h1>Bienvenue <?= $_SESSION['prenom'] ?></h1>
    <p>Sur ce site vous avez le statut d' <?= $_SESSION['statut'] ?></p>

<?php endif; ?>
</body>
</html>