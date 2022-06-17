<?php

// Ecrivez un algorithme qui permette de modifier un renseignement (pour simplifier, disons uniquement le nom de famille) d’un membre du carnet d’adresses. Il faut donc demander à l’utilisateur quel est le nom à modifier, puis quel est le nouveau nom, et mettre à jour le fichier. Si le nom recherché n\'existe pas, le programme devra le signaler.

$pseudoCode = 'Tableau array en Caractère
Variable firstname, name, tel, email en Caractère, i en Entier, inserted en booléen
Début
    Lire formerName, newName
    Ouvrir "file.txt" sur 5 en Lecture
    changed = false
    Tantque Non EOF(5)
        LireFichier 5, line
        Si formerName = line(15,20) ET !changed
            array[i] = firstname, newName, tel, email
            changed = true
        Sinon
            array[i] = line
        Fin Si
        i++
    FinTantQue
    Fermer 5
    Si(!changed)
        Retourner "Le contact n\'a pas été trouvé"
    Sinon
        Ouvrir "file.txt" sur 5 en Ecriture
        Pour element de array
            Ecrire element
        Fin Pour
        Fermer 5
        Retourner "Le contact a bien été changé"
    Fin Si
Fin';

// start php
function fonction_php() {
    $formerName = substr($_POST['formerName'],0,20);
    $newName = substr($_POST['newName'],0,20);
    $i = 0;
    $changed = false;
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice5.txt', 'r');
    while(!feof($textFile)) {
        $currentLine = fgets($textFile);
        if($formerName == substr($currentLine, 15, strlen($formerName)) && !$changed) {
            $array[$i] = substr($currentLine, 0, 15) . sprintf("%-20s", $newName) . substr($currentLine, 35, 40);
            $changed = true;
        } else {
            $array[$i] = $currentLine;
        }
        $i++;
    }
    fclose($textFile);
    if(!$changed) {
        return 'Le contact n\'a pas été trouvé.';
    } else {
        $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice5.txt', 'w');
        foreach($array as $item) {
            fwrite($textFile, $item);
        }
        fclose($textFile);
        return $formerName . ' a été modifié par ' . $newName . '.';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="formerName">Ancien nom :</label>
    <input class="form__element__input hidden" type="text" name="formerName" id="formerName" value="' . (isset($_POST['formerName']) ? $_POST['formerName'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="newName">Nouveau nom :</label>
    <input class="form__element__input hidden" type="text" name="newName" id="newName" value="' . (isset($_POST['submited']) ? $_POST['newName'] : '') . '">
</div>
');

?>