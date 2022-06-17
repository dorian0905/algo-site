<?php

/* Ecrivez un algorithme qui trie un tableau dans l’ordre décroissant.
Vous écrirez bien entendu deux versions de cet algorithme, l'une employant le tri par insertion, l'autre le tri à bulles.*/

$pseudoCode = 'Tableau array(?) en Entier
Variables transfert en Entier
Pour i = 0 A arrondi-inf(longueur(array)/2-1)
    transfert = array[i]
    array[i] = array[longueur(array)-1-i]
    array[longueur(array)-1-i] = transfert
i suivant
Retrouner array
';

// start php
function fonction_php() {
    $array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    for($i = 0; $i <= floor(count($array)/2-1); $i++) {
        $transfert = $array[$i];
        $array[$i] = $array[count($array)-1-$i];
        $array[count($array)-1-$i] = $transfert;
    }
    return print_r($array);
}
// end php

?>