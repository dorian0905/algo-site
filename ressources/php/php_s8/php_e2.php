<?php

// Écrivez un algorithme remplissant un tableau de 6 sur 13, avec des zéros.

$pseudoCode = 'Tableau X(1, 2) en Entier
Variables i, j, val en Entier
Début
    Val ← 1
    Pour i ← 0 à 1
        Pour j ← 0 à 2
            X(i, j) ← Val
            Val ← Val + 1
        j Suivant
    i Suivant
    Pour i ← 0 à 1
        Pour j ← 0 à 2
            Ecrire X(i, j)
        j Suivant
    i Suivant
Fin';

// start php
function fonction_php() {
    $X = [];
    $Val=1;
    $result = '';
    for($i = 0; $i <= 1; $i++) {
        for($j = 0; $j <= 2; $j++) {
            $X[$i][$j] = $Val;
            $Val++;
        }
    }
    for($i = 0; $i <= 1; $i++) {
        for($j = 0; $j <= 2; $j++) {
            $result = $result . $X[$i][$j] . ', ';
        }
    }
    return $result;
}
// end php

?>