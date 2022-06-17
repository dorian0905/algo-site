<?php

// Ecrire un algorithme qui supprime dans notre carnet d\'adresses tous les individus dont le mail est invalide (pour employer un critère simple, on considèrera que sont invalides les mails ne comportant aucune arobase, ou plus d\'une arobase).

$pseudoCode = 'Début
    Ouvrir "season10_exercice8.txt" sur 1 en Lecture
    i = 0
    Tantque Non EOF(1)
        arobaseNumber = 0
        Pour j = 0 a longeur(line)-1
            Si line[j] = "@"
                arobaseNumber++
            Fin Si
        Fin Pour
        Si arobaseNumber = 1
            array[i] = line
            i++
        Fin Si
    FinTantQue
    Fermer 1
    Ouvrir "season10_exercice8.txt" sur 1 en Ecriture
    Pour element de array
        Ecrire element
    Fin Pour
    Fermer 1
Fin';

// start php
function fonction_php() {
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice8.txt', 'r');
    $i = 0;
    while(!feof($textFile)) {
        $arobaseNumber = 0;
        $currentLine = fgets($textFile);
        for($j = 0; $j < strlen($currentLine); $j++) {
            if($currentLine[$j] == '@') {
                $arobaseNumber++;
            }
        }
        if($arobaseNumber == 1) {
            $array[$i] = $currentLine;
            $i++;
        }
    }
    fclose($textFile);
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice8.txt', 'w');
    foreach($array as $item) {
        fwrite($textFile, $item);
    }
    fclose($textFile);
    return 'Le fichier est nettoyé.';
}
// end php

?>