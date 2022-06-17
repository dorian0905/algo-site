<?php

// Que produit l’algorithme suivant ?

$pseudoCode = 'Tableau array(?) en Entier
Variable i, result en Entier
Début
    result = 0;
    Pour i ← 0 à longueur(array)-1
        result += array[i]
    i suivant
    Retourner result
Fin';

// start php
function fonction_php() {
    $array = [5, 6, 87, 5 ,98, 61, 51, 41, 8, 9, 74];
    $result = 0;
    for($i = 0; $i < count($array); $i++) {
        $result += $array[$i];
    }
    return $result;
}
// end php


?>