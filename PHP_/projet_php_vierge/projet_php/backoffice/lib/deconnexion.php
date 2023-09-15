<?php

session_start();  // si on veut manipuler la session on doit l'appeler
session_unset(); // unset va vider la variable $_session
session_destroy(); // va détruire la variable $_session et du coup la session elle meme
header('Location: ../index.php'); // petite redirection sur le site


?>