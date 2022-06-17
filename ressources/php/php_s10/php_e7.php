<?php

// Ecrivez un algorithme qui trie les individus du carnet d’adresses par ordre alphabétique.

$pseudoCode = 'Début
    Ouvrir "season10_exercice7_3.txt" sur 1 en Ajout
    Pour i = 1 A 2
        Ouvrir "season10_exercice7_" + i + ".txt" sur 2 en Lecture
        Tantque Non EOF(2)
            LireFichier 2, line
            EcrireFichier 1, line
        FinTantQue
        Fermer 2
    Fin Pour
    Fermer 1
Fin';

// start php
function fonction_php() {
    $combinedFile = fopen('c:\laragon\www\ressources\files\season10_exercice7_3.txt', 'a');
    for($i = 1; $i <= 2; $i++) {
        $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice7_' . $i . '.txt', 'r');
        if($i != 1) {
            fwrite($combinedFile, '
');
        }
        while(!feof($textFile)) {
            fwrite($combinedFile, fgets($textFile));
        }
        fclose($textFile);
    }
    fclose($combinedFile);
    return 'Les fichiers sont combinés.';
}
// end php

?>