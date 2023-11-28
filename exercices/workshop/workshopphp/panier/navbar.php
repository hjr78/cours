<div class="navbar">
    <a href="index.php" class="accueil">Accueil</a>
    <?php
    if (isset($_SESSION['user_id'])) {
        // L'utilisateur est connecté, afficher le bouton de déconnexion
        echo '<a href="deconnexion.php" class="deconnexion">Déconnexion</a>';

        // Vérifier si l'utilisateur est administrateur
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
            // L'utilisateur est administrateur, afficher le bouton du tableau de bord
            echo '<a href="dashboard.php" class="dashboard">Tableau de Bord</a>';
        }
    } else {
        // L'utilisateur n'est pas connecté, afficher le bouton de connexion
        echo '<a href="login.php" class="connexion">Connexion</a>';
    }
    ?>
  <a href="inscription.php" class="inscription">Inscription</a>
    <a href="panier.php" class="panier">Panier</a> <!-- Nouvel élément pour le panier -->

</div>