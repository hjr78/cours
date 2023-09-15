// exo 1:

var prenom = prompt ("Entrez votre prénom.");
var age = prompt ("Entrez votre âge.");

alert ("Bonjour " + prenom + " ,qui a " + " "+ age + "ans");



// exo 2:

// addition
var a = 9;
a = 9 + 3;
console.log(a);

// soustraction
var a = 9;
a = 9 - 3;
console.log(a);

// multiplication
var a = 9;
a = 9 / 3;
console.log(a);


// division
var a = 9;
a = 9 * 3;
console.log(a);


// exo 5:

var tempCel = 37.1;

var tempFahr = tempCel * 9/5 + 32;

console.log("La température en Fahrenheit est de " + tempFahr + " °F");






var nombre= Number(prompt("Entrez un nombre:"));
if (nombre > 0){ 
    console.log(nombre + " est positif")
}

let pokemonDispo = 'pikachu';
if (pokemonDispo === 'pikachu') {
    alert("Pikachu attaque éclair");
} else{
    alert("Je prend la fuite");
}



let nombre = Number(prompt("entrez un nombre :"));
if (nombre > 0) {
    console.log(nombre + " est positif");
}
else{
    console.log(nombre + " est negatif ou nul");
}




outil1 = "fourchette";
outil2 = "couteau";

if ((outil1 === "fourchette") && (outil2 === "couteau")){
    console.log("je mange mon plat de tajine");
}

if ((outil1 === "fourchette") || (outil2 === "cuillère")){
    console.log("Je mange mon crumble au pomme");
}



// part2

// [ source: https://github.com/oc-courses/intro-javascript ]
/* 
* Exo 1: * Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
* puis affiche le nom du jour suivant.
* S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
* A toi de voir comment.
*/

const jourActuel = "lundi";
let jourSuivant = "";
if (jourActuel === "lundi") {
  jourSuivant = "mardi";
} else if (jourActuel === "mardi") {
  jourSuivant = "mercredi";
} else if (jourActuel === "mercredi") {
  jourSuivant = "jeudi";
} else if (jourActuel === "jeudi") {
  jourSuivant = "vendredi";
} else if (jourActuel === "vendredi") {
  jourSuivant = "samedi";
} else if (jourActuel === "samedi") {
  jourSuivant = "dimanche";
} else if (jourActuel === "dimanche") {
  jourSuivant = "lundi";
} else {
  console.log("Erreur : jour non reconnu !");
}


/* 
* Exo 2:
* Complétez ce programme pour afficher l'heure qu'il sera dans une seconde.
* Attention, ce programme est moins simple qu'il en a l'air : validez votre solution 
* en la testant avec les entrées suivantes. Vous devez obtenir les résultats indiqués.
    14h17m59s => 14h18m0s
    6h59m59s => 7h0m0s
    23h59m59s => 0h0m0s (minuit)
*/

let heures = 14; // Faire varier cette variable entre 0 et 23
let minutes = 17; // faire varier cette variable entre 0 et 59
let secondes = 59; // faire varier cette variable entre 0 et 59

// Ajoutez votre code ici

var heure =prompt("Entrez l'heure");
var minute =prompt("Entrez les minutes");
var seconde =prompt("Entrez les secondes");

if ((heure >=0) && (heure <=23) && (minute >=0) && (minute <=59) && (seconde >=0) && (seconde <=59)){
    seconde++;
    if(seconde === 60){
        seconde = 0;
        minute++;
        if (minute === 60){
            minute = 0;
            heure++;
            if (heure === 24){
                heure = 0;
            }
        }
    }
    console.log("Dans une seconde il sera " + heure + "h " + minute + "m " + seconde+ "s ")
}else{
    console.log("Heure incorrecte")
}


// * Exo 3 
// *
// * Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
// * => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));
// * puis affiche si ce candidat est recalé (moyenne inférieure à 10), 
// * reçu (moyenne entre 10 et 12) 
// * ou reçu avec mention (moyenne supérieure ou égale à 12).
// * Essayer avec méthode "if... else" 
// *
// * Tester le même exercice avec "switch" 
// *   -> la moyenne est sur 10
// *   -> si de 1 à 4: recalé
// *   -> si 5: reçu
// *   -> + de 5: reçu avec mention
// */


var moyenne = parseFloat(prompt("Quelle est ta moyenne au bac?"));

if (moyenne < 10){
    console.log("Tu es recalé"); 
}else if ((moyenne >=10) && (moyenne <12 )){
   console.log("Tu passes !") ;
}else if((moyenne >=12) && (moyenne <=20)){
   console.log("Bravo pour la mention");
}else{
    console.log("Vous n'avait pas saisi ...");
}