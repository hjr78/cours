<?php

// Démarrer la session (si ce n'est pas déja fait)
session_start();


//Définir des variables pour stocker les données du formulaire

$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
/* $nom est une variable qui est définie en fonction de la valeur de $_POST['nom'].
isset($_POST['nom']) vérifie si la clé "nom" existe dans le tableau $_POST, ce qui signifie que le formulaire a été soumis avec un champ appelé "nom".
Si la clé "nom" existe dans $_POST, la variable $nom prendra la valeur de $_POST['nom'].
Si la clé "nom" n'existe pas dans $_POST, la variable $nom prendra une valeur vide (c'est-à-dire "").
*/

/* Equvalent a ca $nom = isset($_POST['nom']) ? $_POST["nom"] : "";
if (isset($_POST['nom'])) {

    $nom = $_POST['nom'];

} else {

    $nom = "";

}
*/

$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$login = isset($_POST["login"]) ? $_POST["login"] : "";
$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
$repass = isset($_POST["repass"]) ? $_POST["repass"] : "";
$valider = isset($_POST["valider"]) ? $_POST["valider"] : "";

$erreur = "";
/*Le code qui suit il commence par vérifier si la variable $valider est définie. Cela indique que le formulaire d'inscription a été soumis.

Ensuite, il vérifie si certains champs obligatoires ($nom, $prenom, $login, $pass) sont vides. Si l'un de ces champs est vide, il définit la variable $erreur avec le message "Tous les champs sont obligatoires."

Ensuite, il vérifie si les champs de mot de passe $pass et $repass correspondent. Si ce n'est pas le cas, il définit la variable $erreur avec le message "Les mots de passe ne correspondent pas."

Si aucune erreur n'est survenue jusqu'à présent, le script continue en incluant un fichier de connexion à la base de données (db_connexion.php).

Il prépare une requête SQL pour vérifier si le login de l'utilisateur existe déjà dans la base de données. Si un enregistrement avec le même login est trouvé, il définit la variable $erreur avec le message "Ce login existe déjà."

Si le login n'existe pas encore dans la base de données, le script hash le mot de passe (notez que l'utilisation de md5 pour le hachage du mot de passe n'est pas recommandée en production en raison de sa faible sécurité).

Ensuite, il prépare une requête SQL pour insérer l'utilisateur dans la base de données avec les informations fournies (nom, prénom, login haché).

Si l'insertion réussit, l'utilisateur est redirigé vers la page de connexion (login.php). Sinon, il définit la variable $erreur avec le message "Une erreur est survenue lors de l'inscription."*/ 
if (isset($valider)){
    // Vérifier si des champs obligatoires sont vides
    if(empty($nom) || empty($prenom) || empty($login) || empty($pass)){
        $erreur = "Tous les champs sont obligatoires.";
    }elseif($pass != $repass){
        $erreur = "Les mots de passe ne correspondent pas.";
    }else{
        // Inclure le fichier de connexion à la base de données
        require_once("db_connexion.php");

        // Vérifier si le login existe déja
        $sel = $conn->prepare("SELECT id  FROM utilisateurs WHERE login=? LIMIT 1");
        /*$sel : $sel est une variable qui est utilisée pour stocker la requête préparée. Cela vous permettra d'exécuter la requête ultérieurement.

        $conn : $conn est l'objet de connexion à votre base de données. Vous utilisez cet objet pour préparer et exécuter des requêtes SQL.

        prepare("SELECT id FROM utilisateur WHERE login=? LIMIT 1") : Cette partie de la ligne prépare la requête SQL. Elle indique à la base de données de préparer une requête SELECT qui sélectionne l'ID de la table "utilisateur" où la valeur du champ "login" correspond à un paramètre que vous fournirez ultérieurement (indiqué par le point d'interrogation ?). La clause LIMIT 1 signifie que la requête ne retournera qu'un seul résultat, même s'il y en a plusieurs correspondants. */
        $sel->execute([$login]);
        $row=$sel->fetch(PDO::FETCH_ASSOC);

        if ($row){
            $erreur = "ce login existe déjà";
        }else{
            $hashedPass= md5($pass);

            $ins = $conn->prepare("INSERT INTO utilisateurs (nom,prenom,login,pass) VALUES (?,?,?,?)");

            if($ins->execute([$nom,$prenom,$login,$hashedPass])){
                header("location: login.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="styles.css">

  <style>

        form{
            text-align: center;
        }

      
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .erreur {
            color: #cc0000;
            margin-bottom: 10px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        label {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Inscription</h1>
<div class="erreur"></div>
<form name="fo" method="post" action="">
    <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom?>" /><br />
    <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom?>" /><br />
    <input type="text" name="login" placeholder="Login" value="<?php echo $login?>" /><br />
    <input type="password" name="pass" placeholder="Mot de passe" /><br />
    <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
    <input type="submit" name="valider" value="S'inscrire" />
</form>
</body>
</html>