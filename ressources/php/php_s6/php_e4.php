<?php

// Que produit l’algorithme suivant ?

$pseudoCode = 'Tableau Nb(5) en Entier
Variable i en Entier
Début
    Pour i ← 0 à 5
        Nb(i) ← i * i
    i suivant
    Pour i ← 0 à 5
        Ecrire Nb(i)
    i suivant
Fin';

// start php
function fonction_php() {
    $Nb = [];
    $result = "";
    for($i = 0; $i <= 5; $i++) {
        $Nb[$i] = $i*$i;
        $result = $result . '<br>' . $Nb[$i];
    }
    return $result;
}
// end php


?>