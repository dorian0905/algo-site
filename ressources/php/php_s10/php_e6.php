<?php

// Ecrivez un algorithme qui trie les individus du carnet d’adresses par ordre alphabétique.

$pseudoCode = 'Tableau array en Caractère
Début
    i = 0
    Ouvrir "file.txt" sur 5 en Lecture
    Tantque Non EOF(5)
        array[i] = line
        i++
    FinTantQue
    Fermer 5
    Pour i = 0 A longueur(array) - 2
        indexMinValue = i
        Pour j = i + 1 A longueur(array) - 1
            Si array[j] < array[indexMinValue]
                indexMinValue = j
            Fin Si
        j suivant
        transfert = array[i]
        array[i] = array[indexMinValue]
        array[indexMinValue] = transfert
    i suivant
    Ouvrir "file.txt" sur 5 en Ecriture
    Pour element de array
        Ecrire element
    Fin Pour
    Fermer 5
Fin';

// start php
function fonction_php() {
    $i = 0;
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice6.txt', 'r');
    while(!feof($textFile)) {
        $array[$i] = fgets($textFile);
        $i++;
    }
    fclose($textFile);
    $lineBreak = false;
    for($i = 0; $i <= count($array)-2; $i++) {
        $indexMinValue = $i;
        for($j = $i+1; $j <= count($array)-1; $j++) {
            if($j == count($array)-1 && !$lineBreak) {
                $array[$j] = $array[$j] . '
';
                $lineBreak = true;
            }
            if(substr($array[$j], 15, 20) < substr($array[$indexMinValue], 15, 20)) {
                $indexMinValue = $j;
            }
        }
        $transfert = $array[$i];
        $array[$i] = $array[$indexMinValue];
        $array[$indexMinValue] = $transfert;
    }
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice6.txt', 'w');
    foreach($array as $item) {
        fwrite($textFile, $item);
    }
    fclose($textFile);
    return 'Le fichier est trié';
}
// end php

?>