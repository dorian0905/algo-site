<?php

// Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

$pseudoCode = 'Tableau array1(), array2(), array3() en Entier
Variable i, result en Entier
Début
    array1 = [4, 8, 7, 9, 1, 5, 4, 6]
    array2 = [7, 6, 5, 2, 1, 3, 7, 4]
    Pour i ← 0 à longueur(array1)-1
        array3[i] = array1[i] + array2[i]
    i suivant
    Retourner array3
Fin';

// start php
function fonction_php() {
    $array1 = [4, 8, 7, 9, 1, 5, 4, 6];
    $array2 = [7, 6, 5, 2, 1, 3, 7, 4];
    for($i = 0; $i < count($array1); $i++) {
        $array3[$i] = $array1[$i] + $array2[$i];
    }
    return print_r($array3);
}
// end php


?>