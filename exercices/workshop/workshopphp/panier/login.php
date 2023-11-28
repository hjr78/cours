<?php
session_start();

// Récupérez les données du formulaire
$login = isset($_POST["login"]) ? $_POST["login"] : "";
$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
$valider = isset($_POST["valider"]) ? $_POST["valider"] : "";

$erreur = "";

if (isset($valider)) {
    if (empty($login) || empty($pass)) {
        $erreur = "Les champs 'Login' et 'Mot de passe' sont obligatoires.";
    } else {
        // Inclure le fichier de connexion à la base de données
        require_once("db_connexion.php");

        // Préparez la requête SQL pour vérifier l'utilisateur et récupérer son rôle
        $query = "SELECT id, role FROM utilisateurs WHERE login=? AND pass=?";
        $stmt = $conn->prepare($query);
        
        // Hasher le mot de passe (assurez-vous d'utiliser une meilleure méthode de hachage en production)
        $hashedPass = md5($pass);

        // Exécutez la requête en liant les paramètres
        $stmt->execute([$login, $hashedPass]);

        // Récupérez la première ligne de résultat
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // L'utilisateur est authentifié, stockez son ID dans la session
            $_SESSION['user_id'] = $row['id'];

            // Vérifiez le rôle de l'utilisateur
            if ($row['role'] === 'admin') {
                // Redirigez l'administrateur vers le tableau de bord
                header("location: dashboard.php");
                exit;
            } else {
                // Redirigez les utilisateurs non administrateurs vers une page d'accueil par exemple
                header("location: index.php");
                exit;
            }
        } else {
            $erreur = "Login ou mot de passe incorrect.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        * {
            font-family: Arial;
        }

        body {
            margin: 20px;
        }
        form{
            text-align: center;
        }

        input {
            border: solid 1px #2222AA;
            margin-bottom: 10px;
            padding: 16px;
            outline: none;
            border-radius: 6px;
            width: 200px;
        }

        .erreur {
            color: #CC0000;
            margin-bottom: 10px;
            text-align: center;
        }
        h1{
            text-align: center;
        }
         input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Connexion</h1>
<div class="erreur"><?php echo $erreur ?></div>
<form name="fo" method="post" action="">
    <input type="text" name="login" placeholder="Login" value="<?php echo $login ?>" /><br />
    <input type="password" name="pass" placeholder="Mot de passe" /><br />
    <input type="submit" name="valider" value="Se connecter" />
</form>
</body>
</html>