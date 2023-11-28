<?php

session_start();

require_once('db.php');

// $query = "SELECT * FROM employe";
// $stmt = $conn->query($query);
// $employe = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Lien font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Lien css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Tableau d'employés</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" style="background-color: #333;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajouter produit</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Titre page -->

    <h1 style="text-align: center;">Affichage des employés</h1>

    <table>
        <thead>
            <tr>
                <th>idEmploye</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Service</th>
                <th>Date d'embauche</th>
                <th>Salaire</th>
                <th>ID Secteur</th>
                <th>Voir</th>
                <th>Modif</th>
                <th>Supp</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $employe ['idEmploye']; ?></td>
                <td><?php echo $employe ['prenom']; ?></td>
                <td><?php echo $employe ['nom']; ?></td>
                <td><?php echo $employe ['sexe']; ?></td>
                <td><?php echo $employe ['service']; ?></td>
                <td><?php echo $employe ['dateEmbauche']; ?></td>
                <td><?php echo $employe ['salaire']; ?></td>
                <td><?php echo $employe ['idSecteur']; ?></td>
                <td class="action-buttons">
                    <button><i class="fas fa-eye"></i></button>
                </td>
                <td class="action-buttons">
                    <button><i class="fas fa-pencil-alt"></i></button>
                </td>
                <td class="action-buttons">
                    <button><i class="fas fa-trash-alt" style="color: red;"></i></button>
                </td>
            </tr>
            
        </tbody>
    </table>
</body>
</html>