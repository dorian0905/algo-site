<?php

// Toujours et encore sur le même principe, écrivez un algorithme permettant, à l’utilisateur de saisir les notes d\'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.

$pseudoCode = 'Tableau array()
Variables i en Entier, sum en Décimal
Début
    Ecrire "Combien de saisis ?"
    Lire numberOfEntries
    i = 0
    Tant que i < numberOfEntries
        Ecrire "Quelle est la note ?"
        Lire number
        array[i] = number
    Fin Tant que
    Pour i = 1 A longueur(array)-1
        Si array[i] > maxValue
            maxValue = array[i]
            indexMaxValue = i
        Fin Si
    i suivant
    Retourner maxValue, indexMaxValue
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['numberOfEntries'])) {
        $_SESSION['iteration'] = -1;
        $_SESSION['array'] = [];
        $_SESSION['sum'] = 0;
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i == -1) {
        $_SESSION['numberOfEntries'] = $number;
        $_SESSION['iteration']++;
    } elseif($i < $_SESSION['numberOfEntries']) {
        $_SESSION['array'][$i] = $number;
        $_SESSION['sum'] += $number;
        $_SESSION['iteration']++;
    }
    if($i == $_SESSION['numberOfEntries']-1) {
        $_SESSION['continue'] = false;
        $array = $_SESSION['array'];
        $average = round($_SESSION['sum'] / count($array), 2);
        $moreOfAverage = 0;
        for($j = 0; $j < count($array); $j++) {
            if($array[$j] > $average) {
                $moreOfAverage++;
            }
        }
        unset($_SESSION['numberOfEntries']);
        return ('Il y a ' . $moreOfAverage . ' notes au dessus de la moyenne.');
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