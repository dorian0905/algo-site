<?php

// Ecrire un algorithme qui déclare et remplisse un tableau de 7 valeurs numériques en les mettant toutes à zéro.

$pseudoCode = 'Tableau array(6) en Entier
Variable i en Entier
Début
    Pour i=0 à i=6
        array[i] = 0
    Fin Pour
    Retourner array
Fin';

// start php
function fonction_php() {
    $array = [];
    for($i = 0; $i < 7; $i++) {
        $array[$i] = 0;
    }
    return print_r($array);
}
// end php


?>