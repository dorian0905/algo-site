<?php

// Que produit l’algorithme suivant ?

$pseudoCode = 'Tableau Suite(7) en Entier
Variable i en Entier
Début
    Suite(0) ← 1
    Suite(1) ← 1
    Pour i ← 2 à 7
        Suite(i) ← Suite(i-1) + Suite(i-2)
    i suivant
    Pour i ← 0 à 7
        Ecrire Suite(i)
    i suivant
Fin';

// start php
function fonction_php() {
    $Suite[0] = 1;
    $Suite[1] = 1;
    $result = $Suite[0] . '<br>' . $Suite[1];
    for($i = 2; $i <= 7; $i++) {
        $Suite[$i] = $Suite[$i-1] + $Suite[$i-2];
        $result = $result . '<br>' . $Suite[$i];
    }
    return $result;
}
// end php


?>