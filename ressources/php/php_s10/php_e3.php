<?php

// On travaille avec le fichier du carnet d’adresses en champs de largeur fixe.
// Ecrivez un algorithme qui permet à l’utilisateur de saisir au clavier un nouvel individu qui sera ajouté à ce carnet d’adresses.

$pseudoCode = 'Variable firstname, name, tel, email en Caractère
Début
    Lire firstname, name, tel, email
    Ouvrir "file.txt" sur 5 en Ajout
    LireFichier 5
    Ajouter formate(firstname, name, tel, email)
    Fermer 5
Fin';

// start php
function fonction_php() {
    $firstname = substr($_POST['firstname'],0,15);
    $name = substr($_POST['name'],0,20);
    $tel = substr($_POST['tel'],0,10);
    $email = substr($_POST['email'],0,30);
    $textFile = fopen('c:\laragon\www\ressources\files\season10_exercice3.txt', 'a');
    $result = sprintf("\n%-15s%-20s%-10s%-20s", $firstname, $name, $tel, $email);
    fwrite($textFile, $result);
    fclose($textFile);
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