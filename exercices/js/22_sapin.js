/*
----------------------------------------------------------------------------
Sapin de Noël
*/
var size = prompt('chois le nombre d\'étages du sapin');
// on itère le nombre d'étages du sapin
for(var etage=1; etage<=size; etage++) {
    // 1. Pour chaque étage e, nous avons i=e+3 lignes
    for(var i=0; i<etage+3 ; i++) {
    			// 2. Pour chaque ligne i, nous avons ((etage+i)*2)-1 étoiles
          for(var nb_etoile=1; nb_etoile<=((etage+i)*2)-1; nb_etoile++) {
          document.getElementById('sapin').innerHTML+='*';
          }
          document.getElementById('sapin').innerHTML+='</br>';
    } // fin lignes
} // fin étage

// On affiche le pied
for(var s=1; s<=size; s++) {
  document.getElementById('sapin').innerHTML+='|';
  document.getElementById('sapin').innerHTML+='</br>';
}
