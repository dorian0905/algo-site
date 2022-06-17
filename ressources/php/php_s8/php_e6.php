<?php

// Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques. Écrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.

$pseudoCode = 'Tableau T(12, 8) en Entier
Variables i, j, max en Entier
T = [?]
max = T[0][0]
Début
    Pour i ← 0 à m
        Pour j ← 0 à n
            Si T[i][j] > max
                max = T[i][j]
            Fin Si
        m Suivant
    k Suivant
Fin';

// start php
function fonction_php() {
    $T =[[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 10, 5, 2],[1, 5, 9, 8, 7, 5, 2]];
    $max = $T[0][0];
    for($i = 0; $i <= count($T)-1; $i++) {
        for($j = 0; $j <= count($T[0])-1; $j++) {
            if($T[$i][$j] > $max) {
                $max = $T[$i][$j];
            }
        }
    }
    return $max;
}
// end php

?>