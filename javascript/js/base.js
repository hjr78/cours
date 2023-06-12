// commentaire sur une ligne

/*
ici, je fais un commentaire sur plusieurs 
ligne.
*/



// --1: déclarer une variable en JS

//var Prenom;



// -- 2 : Affecter une valeur à une variable

//Prenom="Mila";
// var prenom="mila";



// -- 3 : une instruction se termine toujours par une points virgule, aussi il est possible d'écrire plusieurs instructions sur une seule ligne
// instr_1;
// inst_2; instr_3;

// -- 4: Afficher une boîte de dialogue (2facon)
// alert("Super, tu es arrivé sur mon site!");
//window.alert("Super, tu es arrivé sur mon site!");



// -- 5: Afficher dans la console 'ici, la valeur de ma variable Prenom 
//console.log(Prenom);




//-- 6 : Afficher dans la page web
//document.whrite("à la pause il dort");





//--7 : demander à l'utilisateur une valeur (2 facons)
//window.prompt("Question: on est quelle jour?", "jour de la semaine");
//prompt("Question: on est quelle jour?" , "jour de la semaine");

//et pour manipuler cette-valeur, je nn'oublie pas de la stocker
//var jour=prompt("Question on est quel jour": "jour de la semaine")
//console.log(jour)




//--8 : attention /!\ le JS est sensible a la casse ('vase sensitive')
//mavariable =/= mavariable =/= ma_variable
                 // camem case         snake case







 //9 : une variable ne peut pas commencer par un chiffre, ne doit contenir que des caractères alpha numérique,et ne peut pas êtr un mot réservé(var,for... des éléments natifs du langage js)

 


 //10: une variable peut être déclarer de facon explicite:
 // var fruit;
 // fruit="fraise";

 //ou implicite
 //var-fruit_2= "poir";

/*
~~~~~~~~~~~LES TYPES DE VARIABLESS~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

// 1. Chaine de caractères (string)
var vacances = "2023";
var dstination= " australie";


//2. un nombre entier (integrer ou int)
var annee = 2023;
//console.log(annee);




//3. un nombre décimal (float)
var nombre_a_virgule=-5.32;
//console.log(nombre_a_virgul)


var vacances="2020"
consol.log(vacances);





//.un booléen (booleen= vrai faux= true/false)
var unbooleen=false;



//--5. les constabtes

/*
La déclaration constante permet de créer une constante acccessible uniquement en lecture.
contrairement a une variable sa valeur ne peut être modifiée par reaffectation plus bas dans le code
une constante ne peut être déclarée à nouveau dans le même script
*/

//Par convention les constantes sont en majuscules

const Pays ="France";  // string
const annee ="2020";  //string
const birth= 2020; // nombre/ int / intégrer


//6= typeoff permet de connaitre le type de ma variable



console.log(typeof vacanxzs);
console.log (typeofannnee);


//en js les variables sont auto-typées
//on peut convertir une variable de type number en string et aussu string en number avec les fonctions natives de 3s
// la fonction parseint() renvoie en entier à paerir d'une chaîne de caractères

var unChiffre= "12";
console.log(unChiffre)
conslole.log(typeof unChiffre)



//string -> number
unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);


//je ré-affecte une valeur

unChiffre= "12.22";
console.log(unChiffre);
console.log(typeof unChiffre);



//string => float

unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

//number -> string

var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

