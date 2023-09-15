var nb1 = parseInt(prompt('numero1'));
var nb2 = parseInt(prompt('numero2'));

if((!isNaN(nb1)) && (!isNaN(nb2))){
// En JavaScript NaN est l'abréviation de "NOT-A-NUMBER"
// isNaN() la méthode renvoie true si une valeur est NaN
    if (nb1<nb2){
    document.write("Votre 1er nombre : " + nb1 + " est plus petit que votre 2nd : " + nb2);
    }else if(nb1>nb2){
    document.write("Votre 1er nombre : " + nb1 + "est plus grand que votre 2nd : " + nb2)
    }else{
    document.write("Votre 1er nombre : " + nb1 + " est égal à votre 2nd : " + nb2);
    }

}else{
    alert('Vous n\'avez pas saisi de chiffre(s)')
    // ne rentre jamais dans cette condition car forcément un nombre avec le parseInt
}
