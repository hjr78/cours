'use strict' // Mode strict du JS

alert("tt")

// 1 - Variable




// Rechercher du button dans l'arbre DOM = Document Objet Model

var button = document.getElementById('toggle-rectangle');

// getelementbyid pour récup un ID




// Recherche du rectangle dans l'arbre DOM

var rectangle = document.querySelector('.rectangle')

// querySelector pour récup une class






// 2 - Fonctions




// Fonction au click sur le boutton




function surClickButon(){

    rectangle.classList.toggle('hide');

}