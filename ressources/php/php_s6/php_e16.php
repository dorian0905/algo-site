<?php

/* Ecrire un algorithme permettant de résoudre le problème suivant :
                – Données : un tableau tableau contenant 100 entiers
                – Résultat : “vrai” si les entiers sont consécutifs et “faux” sinon */

$pseudoCode = 'Tableau array(99) en Entier
Variable i en Entier
Début
    Pour i ← 1 à longueur(array) - 1
        Si array[i] != array[i-1] + 1
            Retourner "Faux"
        Fin Si
    i suivant
    Retourner "vrai"
Fin';

// start php
function fonction_php() {
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // $array = [5, 3, 5, 8, 6, 7, 8, 1, 7];
    for($i = 1; $i <= count($array) - 1; $i++) {
        if($array[$i] != $array[$i-1] + 1) {
            return 'Faux';
        }
    }
    return 'Vrai';
}
// end php

?>