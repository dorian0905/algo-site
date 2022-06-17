<?php

// Les enregistrements d’un fichier contiennent les deux champs Nom (chaîne de caractères) et Montant (Entier). Chaque enregistrement correspond à une vente conclue par un commercial d’une société.
// On veut mémoriser dans un tableau, puis afficher à l\'écran, le total de ventes par vendeur. Pour simplifier, on suppose que le fichier de départ est déjà trié alphabétiquement par vendeur.

$pseudoCode = 'Tableau recovered, array en Caractère
Variable 
Début
    i = 0
    Ouvrir "file.txt" sur 5 en Lecture
    Tantque Non EOF(5)
        recovered[i]["name"] = gauche(line, "/")
        recovered[i]["value"] = droite(line, "/")
        i++
    FinTantQue
    precedentName = recovered[0]["name"]
    sum = 0
    j = 0
    Pour i = 0 A longueur(recovered)-1
        Si recovered[i]["name"] = precedentName
            sum += recovered[i]["value"]
        Sinon
            array[j]["name"] = precedentName
            array[j]["sum"] = sum
            j++
            precedentName = recovered[i]["name"]
            sum = recovered[i]["value"]
        Fin Si
    i suivant
    array[j]["name"] = precedentName
    array[j]["sum"] = sum
    Retourner array
Fin';

// start php
function fonction_php() {
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice9.txt', 'r');
    $i = 0;
    while(!feof($textFile)) {
        $currentLine = fgets($textFile);
        $separationIndex = strpos($currentLine, '/');
        $recovered[$i]['name'] = substr($currentLine, 0, $separationIndex);
        $recovered[$i]['value'] = intval(substr($currentLine, $separationIndex+1));
        $i++;
    }
    $precedentName = $recovered[0]['name'];
    $sum = 0;
    $j = 0;
    for($i = 0; $i < count($recovered); $i++) {
        if($recovered[$i]['name'] == $precedentName) {
            $sum += $recovered[$i]['value'];
        } else {
            $array[$j]['name'] = $precedentName;
            $array[$j]['sum'] = $sum;
            $j++;
            $precedentName = $recovered[$i]['name'];
            $sum = $recovered[$i]['value'];
        }
    }
    $array[$j]['name'] = $precedentName;
    $array[$j]['sum'] = $sum;
    return print_r($array);
}
// end php

?>