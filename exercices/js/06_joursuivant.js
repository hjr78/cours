var jour = prompt("Quelle jour somme-nous ?");

if(jour === "lundi"){
    document.write("Demain nous serons Mardi");
}else if(jour === "mardi"){
    document.write("Demain nous serons Mercredi");
}else if(jour === "mercredi"){
    document.write("Demain nous serons Jeudi");
}else if(jour === "jeudi"){
    document.write("Demain nous serons Vendredi");
}else if(jour === "vendredi"){
    document.write("Demain nous serons Samedi");
}else if(jour === "samedi"){
    document.write("Demain nous serons Dimanche");
}else if(jour === "dimanche"){
    document.write("Demain nous serons Lundi");
}else{
    document.write("Jour Inconnu");
}


switch(jour){
    case "lundi":
    console.log("demain on est mardi");
    break;
    case "mardi":
    console.log("demain on est mercredi");
    break;
    case "mercredi":
    console.log("demain on est jeudi");
    break;
    case "jeudi":
    console.log("demain on est vendredi");
    break;
    case "vendredi":
    console.log("demain on est samedi");
    break;
    case "samedi":
    console.log("demain on est dimanche");
    break;
    case "dimanche":
    console.log("demain on est lundi");
    break;
    default:
    console.log("désolé, vérifiez l'orthographe et veuillez écrire sans majuscules.");
}