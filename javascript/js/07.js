//  l'opérateur ET : && ou AND

// Si je cumule 2 conditions: 
// =>prenom ===prenomLogin
// =>monAge === ageLogin

// pour que les 2 correspondent pour être validés il faut les associer

if ((prenomLogin === prenom) && (ageLogin === monAge)){
    // ..........code............
    // je ne rentre ici que si les 2 contions sont VRAIES
}




/* 
    if ((A) && (B)){
        => si A est FAUX et B est VRAI => FAUX
        => si A est VRAI et B est FAUX => FAUX
        => si A est FAUX et B est FAUX => FAUX
        => si A est VRAI et B est VRAI => VRAI
    }
*/

// L'opérateur OU : || ou (OR) (| pipe = alt gr + 6)

if((C) || (D)){
/*
    => si C est FAUX et D est FAUX => FAUX
    => si C est FAUX et D est VRAI => VRAI
    => si C est VRAI et D est FAUX => VRAI
    => si C est VRAI et D est VRAI => VRAI
*/
}

// L'opérateur "!" signifie : le contraire de ou différent de ...

var utilisateurLog= true;

if(!utilisateurLog){
    // ......code.........
}

if(utilisateurLog == false){
    // .........code..............
}
