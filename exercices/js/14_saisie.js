var nombre = 0; // Valeur initiale permettant d'entrer dans la boucle
while ((nombre < 50) || (nombre > 100)) {
    nombre = Number(prompt("Entrez un nombre entre 50 et 100 : "));
}

var nombre = parseInt(prompt("Entrer un nombre entre 50 et 100 :"));
// premier methode sans inverse 
while (nombre >= 50 && nombre <= 100) {
    alert("le nombre : " + nombre + " que Vous avez saisie  est compris entre 50 et 100");
    nombre = prompt("Entrer un nombre entre 50 et 100 :");
}
// deuxieme methode avec l'inverse
while (nombre < 50 || nombre > 100) {
    alert("Vous avez saisie " + nombre + " n'appartient pas a l'intervalle 50 et 100");
    nombre = prompt("Entrer un nombre entre 50 et 100 :");
}
// troisieme methode avec boucle while et dedans if else 
while (nombre != 'quitter') {
    if (nombre >= 50 && nombre <= 100) {
        alert("le nombre : " + nombre + " que Vous avez saisie  est compris entre 50 et 100");
        nombre = prompt("Entrer un nombre  'quitter' pour quitter");
    }
    else if (nombre < 50 || nombre > 100) {
        alert("Vous avez saisie " + nombre + " n'appartient pas a l'intervalle 50 et 100");
        nombre = prompt("Entrer un nombre  'quitter' pour quitter");
    }
    else {
        alert("Erreur entrer un nombre correcte");
    }
}

