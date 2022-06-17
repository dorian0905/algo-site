<?php

// Ecrire un algorithme qui calcule le plus grand écart dans un tableau de X entiers positifs, comme négatifs.

$pseudoCode = 'Tableau array(?) en Entier
Variables maxValue, minValue en Entier
minValue = array[0]
maxValue = array[0]
Pour i = 0 A longeur(array) - 1
    Si array[i] < minValue
        minValue = array[i]
    Fin Si
    Si array[i] > maxValue
        maxValue = array[i]
    Fin Si
i suivant
Retourner "La différence max est de " + maxValue - minValue
';

// start php
function fonction_php() {
    $array = [1, 5, 7, 2, 9, -8, -12, 7, -1, 21, -12];
    $minValue = $array[0];
    $maxValue = $array[0];
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] < $minValue) {
            $minValue = $array[$i];
        }
        if($array[$i] > $minValue) {
            $maxValue = $array[$i];
        }
    }
    return 'La différence max est de ' . ($maxValue - $minValue);
}
// end php

?>