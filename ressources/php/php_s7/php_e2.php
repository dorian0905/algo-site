<?php

/* Ecrivez un algorithme qui trie un tableau dans l’ordre décroissant.
Vous écrirez bien entendu deux versions de cet algorithme, l'une employant le tri par insertion, l'autre le tri à bulles.*/

$pseudoCode = 'Tableau array(?) en Entier
Variables indexMaxValue, transfert en Entier, method en String
Lire method
Si method = "Selection"
    Pour i = 0 A longueur(array) - 2
        indexMaxValue = i
        Pour j = i + 1 A longueur(array) - 1
            Si array[j] > array[indexMaxValue]
                indexMaxValue = j
            Fin Si
        j suivant
        transfert = array[i]
        array[i] = array[indexMaxValue]
        array[indexMaxValue] = transfert
    i suivant
    Retourner array
Sinon Si method = "Bulle"
    flag = true
    Tant Que flag
        flag = false
        Pour i = 0 A longueur(array) - 1
            Si array[i] < array[i+1]
                transfer = array[i]
                array[i] = array[i+1]
                array[i+1] = transfert
                flag = true
            Fin Si
        i suivant
    Fin Tant Que
Fin Si
';

// start php
function fonction_php() {
    $array = [10, 8, 7, 51, 42, 85, 12, 9, 2, 97, 102, 25];
    if($_POST['method'] === 'Selection') {
        for($i = 0; $i <= count($array) - 2; $i++) {
            $indexMaxValue = $i;
            for($j = $i + 1; $j <= count($array) - 1; $j++) {
                if($array[$j] > $array[$indexMaxValue]) {
                    $indexMaxValue = $j;
                }
            }
            $transfert = $array[$i];
            $array[$i] = $array[$indexMaxValue];
            $array[$indexMaxValue] = $transfert;
        }  
    } elseif($_POST['method'] === 'Bulle') {
        $flag = true;
        while($flag) {
            $flag = false;
            for($i = 0; $i <= count($array) - 2; $i++) {
                if($array[$i] < $array[$i+1]) {
                    $transfert = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $transfert;
                    $flag = true;
                } 
            }
        }
    }   
    return print_r($array);
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="method">Methode de tri :</label>
    <select class="form__element__input hidden" name="method" id="method">
        <option>Selection</option>
        <option>Bulle</option>
    </select>
</div>
');

?>