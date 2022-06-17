<?php

/* Écrivez un algorithme qui fusionne deux tableaux (déjà existants) dans un troisième, qui devra être trié.
                Attention ! On présume que les deux tableaux de départ sont préalablement triés : il est donc irrationnel de faire
                une simple concaténation des deux tableaux de départ, puis d\'opérer un tri : comme quand on se trouve face à deux
                tas de papiers déjà triés et qu\'on veut les réunir, il existe une méthode bien plus économique (et donc, bien plus
                rationnelle...) */

$pseudoCode = 'Tableau array1(?), array2(?), array3(?) en Entier
Variables index1, index2, index3 en Entier
index1 = 0
index2 = 0
Pour i = 0 à longueur(array1) + longueur(array2) - 1
    index3 += 1
    Si (index2 > longueur($array2) - 1)
        array3[index3] = array1[index1]
        index1 ++
    Sinon Si (index1 > longueur($array1) - 1
        array3[index3] = array2[index2]
        index1 ++
    Sinon Si (array1[$index1] < array2[$index2])
        array3[index3] = array1[index1]
        index1 ++
    Sinon
        array3[index3] = array2[index2]
        index1 ++
    Fin Si
Fin TantQue
Retourner array3
';

// start php
function fonction_php() {
    $array2 = [1, 3, 5, 7, 9, 9, 10, 15];
    $array1 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22];
    $array3 = [];
    $index1 = 0;
    $index2 = 0;
    for($index3 = 0; $index3 < (count($array1)+count($array2)); $index3++) {
        if ($index2 > (count($array2) - 1)) {
            $array3[$index3] = $array1[$index1];
            $index1++;
        } elseif ($index1 > (count($array1) - 1)) {
            $array3[$index3] = $array2[$index2];
            $index1++;
        } elseif($array1[$index1] < $array2[$index2]) {
            $array3[$index3] = $array1[$index1];
            $index1++;
        } else {
            $array3[$index3] = $array2[$index2];
            $index2++;
        }
    }
    return print_r($array3);
}
// end php

?>