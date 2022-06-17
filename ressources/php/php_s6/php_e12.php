<?php

// Ecrivez un algorithme qui permette la saisie d’un nombre quelconque de valeurs, sur le principe de l’ex 6.8. Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l’écran.

$pseudoCode = 'Tableau array()
Variables i en Entier, sum en Décimal
Début
    Ecrire "Combien de saisis ?"
    Lire numberOfEntries
    i = 0
    Tant que i < numberOfEntries
        Ecrire "Quelle est le nombre ?"
        Lire number
        array[i] = number + 1
    Fin Tant que
    Retourner array
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['numberOfEntries'])) {
        $_SESSION['iteration'] = -1;
        $_SESSION['array'] = [];
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i == -1) {
        $_SESSION['numberOfEntries'] = $number;
        $_SESSION['iteration']++;
    } elseif($i < $_SESSION['numberOfEntries']) {
        $_SESSION['array'][$i] = $number + 1;
        $_SESSION['iteration']++;      
    }
    if($i == $_SESSION['numberOfEntries']-1) {
        $_SESSION['continue'] = false;
        unset($_SESSION['numberOfEntries']);
        return print_r($_SESSION['array']);
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number" id="changingLabel"> ' . (!isset($_POST['number']) ? 'Nombre de saisies' : 'Valeur :') . ' </label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>