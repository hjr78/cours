'use strict' //Mode strict du javascript

// Déclaration d'une variable

var nombre;

// La boucle du while s'éxecutera toujours au moins une fois, alors que la boucle while peut ne pas s'éxecuter si la condition est fausse dès le depart

// On utilise cette boucle quand elle doit s'éxecuter au moin une fois pour que la comparaison puisse s'effectuer

do{
    nombre = parseFloat(window.prompt('Vueillez saisir un nombre :'));
}while(isNaN(nombre) == true);

document.write('<p>Merci, vous avez saisi <strong>' +nombre + '</strong></p>');