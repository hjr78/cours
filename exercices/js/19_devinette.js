alert ("Hello et bienvenue !");

// Cette ligne génère aléatoirement un nombre entre 1 et 100

var solution = Math.floor(Math.random() * 100) + 1;
// La fonction mathhfloor renvoie le plus grand entier qui est égal à un nombre
// LA fonction Math.random renvoie un nombre à virgule supérieur ou égal à 0 et inférieur à 1



// TEST pour mieux vérifier le programme

console.log("(La solution est " + solution + ")");

for (var i = 1; i <= 6; i++) {
    nbJoueur = parseInt(prompt("Le but du jeu est simple. Je pense à un nombre entre 0 et 100. A ton avis, quel est ce nombre ? Notes le dans la zone ci-dessous, tu as 6 essais."));
    if (!isNaN(nbJoueur)) {
        if (solution === nbJoueur) {
            alert("Bravo vous avez trouvé !");
            i = 6;
        } else {
            if (solution < nbJoueur) {
                alert("Le nombre est plus petit, essai " + i + " sur 6");
            } else {
                alert("Le nombre est plus grand, essai " + i + " sur 6");
            }
        }
    } else {
        alert("Vous n'avez pas saisi un nombre !");
    }
}




alert("La bonne réponse est " + solution + ".");