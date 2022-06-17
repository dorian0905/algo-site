<?php

// Quel résultat cet algorithme produit-il ?

$pseudoCode = 'Variable line en Caractère
Début
    Ouvrir "file.txt" sur 5 en Lecture
    Tantque Non EOF(5)
        LireFichier 5, line
        Ecrire Truc
    FinTantQue
    Fermer 5
Fin';

// start php
function fonction_php() {
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice1.txt', 'r');
    $result = "";
    while(!feof($textFile)) {
        $result = $result . '<br>' . fgets($textFile);
    }
    fclose($textFile);
    return $result;
}
// end php

?>