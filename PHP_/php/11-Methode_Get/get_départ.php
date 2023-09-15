<?php

// La méthode GET(Superglobale) permet de véhiculer des informations dans l'URL pour les récupérer dans un autre fichier (ou a un endroit du même fichier) pour un affichage spécial.

// Première exemple; je récupère les informations sur la même page (comme un one page)

// Deuxième exemple, en récupérant les infos sur une autre page
// Dans l'attribut href, d'abord j'indique le nom du fichier ou je veux récupérer les infos, puis j'écris ? pour envoyer les infos. Chaque info étant séparée de la précédente par un & 
// target= '_blank' permet d'ouvrir la nouvelle page dans un autre onglet

if (!$_GET) {
    echo "<button><a href='get_arriver.php?produit=Gateaux&variete=fraise&prix=12'target='_blank'>Tester</a></button>";
}
