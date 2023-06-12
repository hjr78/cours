// alert('test')

// L'opérateur de comparaison == signifie 'égal à'
var nb1 = 123;
var nb2 = "123";

console.log(nb1 == nb2); // return true 

// l'opérateur de comparaison === signifie 'strictement égal à'
// Il permet de vérifier la VALEUR et le TYPE

console.log(nb1 === nb2); //return false

// L'opérateur != signifie 'différent de ... en Valeur'

console.log(nb1 != nb2);

// L'opérateur !== 'signifie strictement différent de ... en type et en valeur'

console.log(nb1 !==nb2); //returne TRUE

// EXERICE
// J'arrive sur un espace sécurisé au moyen du prénom et de l'âge.
// Je doiot saisir mon prénom et mon âge pour être authentifié sur le site.
// En cas d'échec une alerte m'informe du problème.
// Si tout se passe bien, un message de bienvenue m'accueille.

var prenom, monÂge;
prenom = "Hajare";
monÂge = 21;

// 1=> Demander son prénom à l'utilisateur avec un prompt
var prenomLogin = prompt('Quel est votre prénom');

// 2=> Je vérifie si le prénom saisi (prenoLogin) correspond à (prénom)
if (prenom === prenomLogin){
    // 2.1 Si tout est ok, je continue la vérification avec l'âge
    var ageLogin = parseInt(prompt('votre âge?')); // 2.2 Demande à l'utilisateur son âge via un prompt
   
    if ( ageLogin === monÂge){
        alert("Bienvenue " + prenomLogin);
    }else{
        // 2.3 Si les âges ne correspondent pas, je lance une ALERT
        alert("Erreur d'âge");
    }

} else{
    //2.4 Sinon, les prénoms ne correspondent pas, je lance une ALERT
    alert("Attention, prenom non-reconnu");
}