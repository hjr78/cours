<?php

if (isset($_POST['Envoyer'])) {
    $nombre = $_POST['nombre'];

  if ($nombre % 2 == 0) {
    echo "$nombre est un nombre pair.";
} else {
    echo "$nombre est un nombre impair.";
}
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo</title>
</head>
<body>

    <form action="" method="POST">
        <label for="nom">Nombre </label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <input type="submit" name="Envoyer" value="Envoyer">
    </form>

</body>
</html>