<?php

// Même question, mais cette fois le carnet est supposé être trié par ordre alphabétique. L’individu doit donc être inséré au bon endroit dans le fichier.

$pseudoCode = 'Tableau array en Caractère
Variable firstname, name, tel, email en Caractère, i en Entier, inserted en booléen
Début
    Lire firstname, name, tel, email
    i = 0
    inserted = false
    Ouvrir "file.txt" sur 5 en Lecture
    Tantque Non EOF(5)
        LireFichier 5, line
        Si name <= line(15,20) ET !inserted
            array[i] = firstname, name, tel, email
            i++
        Fin Si
        array[i] = line
        i++
    FinTantQue
    Si(!inserted)
        array[i] = firstname, name, tel, email
    Fin Si
    Fermer 5
    Ouvrir "file.txt" sur 5 en Ecriture
    Pour element de array
        Ecrire element
    Fin Pour
    Fermer 5
Fin';

// start php
function fonction_php() {
    $firstname = substr($_POST['firstname'],0,15);
    $name = substr($_POST['name'],0,20);
    $tel = substr($_POST['tel'],0,10);
    $email = substr($_POST['email'],0,30);
    $i = 0;
    $inserted = false;
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice4.txt', 'r');
    while(!feof($textFile)) {
        $currentLine = fgets($textFile);
        if($name <= substr($currentLine, 15, 20) && !$inserted) {
            $array[$i] = sprintf("%-15s%-20s%-10s%-20s\n", $firstname, $name, $tel, $email);
            $i++;
            $inserted = true;
        }
        $array[$i] = $currentLine;
        $i++;
    }
    if(!$inserted) {
        $array[$i] = sprintf("\n%-15s%-20s%-10s%-20s", $firstname, $name, $tel, $email);
    }
    fclose($textFile);
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice4.txt', 'w');
    foreach($array as $item) {
        fwrite($textFile, $item);
    }
    fclose($textFile);
    return $firstname . ' ' . $name . ' a été ajouté(e).';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="firstname">Prénom :</label>
    <input class="form__element__input hidden" type="text" name="firstname" id="firstname" value="' . (isset($_POST['submited']) ? $_POST['firstname'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="name">Nom :</label>
    <input class="form__element__input hidden" type="text" name="name" id="name" value="' . (isset($_POST['submited']) ? $_POST['name'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="tel">Tél :</label>
    <input class="form__element__input hidden" type="tel" name="tel" id="tel" value="' . (isset($_POST['submited']) ? $_POST['tel'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="email">E-mail :</label>
    <input class="form__element__input hidden" type="email" name="email" id="email" value="' . (isset($_POST['submited']) ? $_POST['email'] : '') . '">
</div>
');

?>