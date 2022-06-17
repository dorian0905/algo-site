<?php

// Ecrivez l’algorithme qui produit un résultat similaire au précédent, mais le fichier texte "Exemple.txt" est cette fois de type délimité (caractère de délimitation : /). On produira à l\'écran un affichage où pour des raisons esthétiques, ce caractère sera remplacé avec des espaces.

$pseudoCode = 'Variable line en Caractère
Début
    Ouvrir "file.txt" sur 5 en Lecture
    Tantque Non EOF(5)
        LireFichier 5, line
        Ecrire remplacer("/", " ", "file.txt")
    FinTantQue
    Fermer 5
Fin';

// start php
function fonction_php() {
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice2.txt', 'r');
    $result = "";
    while(!feof($textFile)) {
        $result = $result . '<br>' . fgets($textFile);
    }
    fclose($textFile);
    return str_replace("/", " ", $result);
}
// end php

?>