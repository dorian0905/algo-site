<?php

// Écrivez un algorithme remplissant un tableau de 6 sur 13, avec des zéros.

$pseudoCode = 'Tableau array(5, 12) en Entier
Pour i = 0 à 5
    Pour j = 0 à 12
        array[i][j] = 0
    j suivant
i suivant
Retourner array(5, 12)';

// start php
function fonction_php() {
    $array=[];
    for($i = 0; $i < 6; $i++) {
        for($j = 0; $j < 13; $j++) {
            $array[$i][$j] = 0;
        }
    }
    return print_r($array);
}
// end php

?>