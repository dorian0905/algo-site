<?php

// Ecrire un algorithme qui choisit un nombre au hasard compris entre 1 et 100. Pour ceci, on utilise la fonction : iNombreHasard <- random[1..100] Demander à l\'utilisateur de trouver le nombre. On fera apparaître un message : « Plus petit ! », et inversement, « Plus grand ! » jusqu’à ce que l\'utilisateur ait trouvé et afficher en combien de coups.

$pseudoCode = 'randomNumber, i, number en Entier
Début
    randomNumber = alea(1, 100)
    i = 0
    Tant que number <> randomNumber
        i++
        Ecrire "Entrer un nombre"
        Lire number
        Si number < randomNumber
            Ecrire « Plus grand ! »
        Sinon
            Ecrire « Plus petit ! »
        Fin Si
    Fin Tant que
Retourner "Vous avez trouvé en " + i + " coups"
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['randomNumber'])) {
        $_SESSION['randomNumber'] = rand(1, 100);
        $_SESSION['count'] = 1;
        $_SESSION['continue'] = true;
    }
    $randomNumber = $_SESSION['randomNumber'];
    $number = $_POST['number'];
    if($number != $randomNumber) {
        $_SESSION['count']++;
        if($number < $randomNumber) {
            return "Plus grand !";
        } else {
            return "Plus petit !";
        }
    }
    $_SESSION['continue'] = false;
    unset($_SESSION['randomNumber']);
    return 'Vous avez trouvé en ' . $_SESSION['count'] . ' coups';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" value="' . (isset($_POST['submited']) ? $_POST['number'] : '') . '">
</div>
');

?>