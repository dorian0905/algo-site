<?php

// Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

$pseudoCode = 'Tableau array1(), array2() en Entier
Variable i, j, result en Entier
Début
    array1 = [4, 8, 7, 12]
    array2 = [3, 6]
    result = 0
    Pour i ← 0 à longueur(array1)-1
        Pour j ← 0 à longueur(array2)-1
            result = result + array1[i] * array2[j]
        j suivant
    i suivant
    Retourner result
Fin';

// start php
function fonction_php() {
    $array1 = [4, 8, 7, 12];
    $array2 = [3, 6];
    $result = 0;
    for($i = 0; $i < count($array1); $i++) {
       for($j = 0; $j < count($array2); $j++) {
            $result += $array1[$i] * $array2[$j];
       }
    }
    return $result;
}
// end php


?>