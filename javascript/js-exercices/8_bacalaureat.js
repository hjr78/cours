// alert("hello");

var moyenne = parseFloat(prompt("Quelle est ta moyenne au bac?"));

if (moyenne < 10){
    document.write("Tu es recalé"); // J'affiche qu'il est recalé
}else if ((moyenne >=10) && (moyenne <12 )){
    //sinon, si la moyenne est entre 10 et 12 
    document.write("Tu passes !") // J'affiche que le candidat passe
}else if((moyenne >=12) && (moyenne <=20)){
    document.write("Bravo pour la mention")
    // j'affiche qu'il a une mention
}else{
    // en cas de saisit ne rentrant pas dans le cas suivant
    document.write("Vous n'avait pas saisi ...")
    // je lui indique qu'il n'a pas saisi ce qu'on lui demandait
}