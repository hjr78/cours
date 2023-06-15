var nombre1 = 5;
var nombre2 = 3;

console.log("n1 = " + nombre1);
document.write("<h3>Résultat : <br>n1 = " + nombre1 + "</h3>");


console.log("n2 = " + nombre2);
document.write("<h3>n2 = " + nombre2 + "</h3>");

var vide = nombre1;
nombre1 = nombre2;
nombre2 = vide;


console.log("n1 = " + nombre1);
console.log("n2 = " + nombre2);
