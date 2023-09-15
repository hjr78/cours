alert("bonjour, nous allons vérifier ensemble ta vitesse");

var vitesse = parseInt(prompt("A quel vitesse roules-tu?"));

if( vitesse <= 50){
    document.write("félicitations tu roules à la bonne vitesse." + " Tu roules à " + vitesse);
    var imagejavascript = document.createElement("img");
    imagejavascript.src= "../img/img-radar (1)/img/content.png";
    document.body.appendChild(imagejavascript)
}

else if((vitesse>50) && (vitesse <=64)){
    document.write("fait un petit effort et ralentit un petit peu !" + "tu roules à " + " " + vitesse);

     var imagejavascript = document.createElement("img");
    imagejavascript.src= "../img/img-radar (1)/img/decend.png";
    document.body.appendChild(imagejavascript)
}

else if((vitesse>65) && (vitesse <=80)){
    document.write("/!\\ tu roules à une vitesse excessive, tu devrais ralentir" + "tu roules à " + " " + vitesse);

     var imagejavascript = document.createElement("img");
    imagejavascript.src= "../img/img-radar (1)/img/haaaa.png";
    document.body.appendChild(imagejavascript);
}

else{
    document.write("tu es un danger ralentis ");

     var imagejavascript = document.createElement("img");
    imagejavascript.src= "../img/img-radar (1)/img/enerver de ouf.png";
    document.body.appendChild(imagejavascript)
}


