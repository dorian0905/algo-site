<?php

// Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l’utilisateur

$pseudoCode = 'Tableau array(8)
Variables i en Entier
Début
    i = 0
    Tant que i <= 8
        Ecrire "Quelle est la note ?"
        Lire number
        array[i] = number
    Fin Tant que
    Retourner array
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['iteration'])) {
        $_SESSION['iteration'] = 0;
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i <= 8) {
        $_SESSION['array'][$i] = $number;
        $_SESSION['iteration']++;
    }
    if($i == 8) {
        $_SESSION['continue'] = false;
        $array = $_SESSION['array'];
        unset($_SESSION['array']);
        unset($_SESSION['iteration']);
        return print_r($array);
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Note :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>