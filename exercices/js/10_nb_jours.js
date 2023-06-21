var mois = parseInt(prompt("Quelle mois choisissez-vous ", "<saisir un chiffre entre 1 et 12>"));

if(mois===2){ //si on a choisi Février => 2
    document.write("Le mois numéro" + mois + " fait 28jours.")
}else if((mois === 4) || (mois ===6 ) || (mois===9) || (mois===11)){ //si on a choisis un mois qui fzit 30jours
    document.write("Le mois numéro" + mois + "fait 30jours.")
}else if ((mois===1) || (mois ===3) || (mois === 5) || (mois===7) || (mois === 8) || (mois===10) || (mois=== 12)){
    // si on choisit un mois qui fait 31jours
     document.write("Le mois numéro " + mois + " fait 31 jours. ");
}else{
    document.write("Votre choix " + mois + "n'est pas dans le calendrier. ");
}
