<?php

// Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à ce que la réponse convienne.

$pseudoCode = 'Variable number en Entier
Début
    Tant que number < 1 OU number >3
        Ecrire "Entrer un nombre"
        Lire number
    Fin Tant que
    Retourner number
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    if($number < 1 || $number > 3) {
        $_SESSION['continue'] = true;
        return 'Le nombre ' . $number . ' n\'est pas compris entre 1 et 3';
    }
    $_SESSION['continue'] = false;
    return 'Le nombre ' . $number . ' est bien compris entre 1 et 3';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" value="' . (isset($_POST['submited']) ? $_POST['number'] : '') . '">
</div>
');

?>