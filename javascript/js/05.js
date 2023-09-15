// alert('test');

//  structure de base IF

if (true){// par défaut la condition à vérifier le IF vérifie si elle est vraie

    // .....code.......
}

var nb1 = 10;
if (nb1 < 50){
    console.log("nb1 est bien inférieur à 50");
}

// ELSE

if (true){
    // .......... code si VRAI.............
} else{
    // ............code si FAUX..............
}



if (nb1 < 50){
    console.log("nb1 est bien inférieur à 50");
} else{
    console.log("nb1 est inférieur à 50");
}

//  EXERCICE

// On utiise le IF pour vérifier l'âge de l'internaute.
// => s'il est majeur je lui souhaite la bienvenue
// => s'il est mineur je lui [1]signale et [2] le renvoie vers un autre site

// 1=> Je déclare la majorité légale
var majoriteFR = 18

// 2=> demander l'âge en s'assurant que nous avons un NUMBER
var age = parseInt(prompt("Indiquez votre âge"))

// 3=> je vérifie si mon internaite est majeur 
if (age >= majoriteFR){
    // bienvenue si vrai
    alert("Bienvenue, vous êtes majeur")                     
} else{
    // s'il est mineur je lui signale
    alert("aller voir un autre site")
    // et ensuite je redirige vers darty
    document.location.href="http://www.darty.fr/"
}