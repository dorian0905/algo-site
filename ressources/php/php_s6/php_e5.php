<?php

// Que produit l’algorithme suivant ?

$pseudoCode = 'Tableau N(6) en Entier
Variables i, k en Entier
Début
    N(0) ← 1
    Pour k ← 1 à 6
        N(k) ← N(k-1) + 2
    k Suivant
    Pour i ← 0 à 6
        Ecrire N(i)
    i suivant
Fin';

// start php
function fonction_php() {
    $N[0] = 1;
    $result = $N[0];
    for($k = 1; $k <= 6; $k++) {
        $N[$k] = $N[$k-1] + 2;
        $result = $result . '<br>' . $N[$k];
    }
    return $result;
}
// end php


?>