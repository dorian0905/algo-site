<?php

// Écrivez un algorithme remplissant un tableau de 6 sur 13, avec des zéros.

$pseudoCode = 'Tableau T(3, 1) en Entier
Variables k, m, en Entier
Début
    Pour k ← 0 à 3
        Pour m ← 0 à 1
            T(k, m) ← (k + 1) + 4 * m
        m Suivant
    k Suivant
    Pour k ← 0 à 3
        Pour m ← 0 à 1
            Ecrire T(k, m)
        m Suivant
    k Suivant
Fin';

// start php
function fonction_php() {
    $T = [];
    $result = '';
    for($k = 0; $k <= 3; $k++) {
        for($m = 0; $m <= 1; $m++) {
            $T[$k][$m] = ($k + 1) + 4 * $m;
        }
    }
    for($k = 0; $k <= 3; $k++) {
        for($m = 0; $m <= 1; $m++) {
            $result = $result . $T[$k][$m] . ', ';
        }
    }
    return $result;
}
// end php

?>