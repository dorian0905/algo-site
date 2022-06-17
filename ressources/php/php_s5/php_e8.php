<?php

$pseudoCode = 'Tableau array en Entier
Variables i, j, maxValue, indexMaxValue en Entier
Début
    i = 0
    Tant que i < 20
        Ecire "Nombre 1"
        lire array[i]
        i++
    Fin Tant que
    maxValue = array[0]
    indexMaxValue = 0
    Pour j = j A longueur(array)-1
        Si array[j] > maxValue
            maxValue = array[j]
            indexMaxValue = j
        Fin Si
    Fin Pour
    Retourner "Le plus grand de ces nombres était " + maxValue
    C\'était le nombre numéro " + indexMaxValue + 1 + "."
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['iteration'])) {
        $_SESSION['iteration'] = 1;
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i < 20) {
        if($i == 1 || $number > $_SESSION['maxValue']) {
            $_SESSION['maxValue'] = $number;
            $_SESSION['indexMaxValue'] = $i;
        }
        $_SESSION['iteration']++;
    } else {
        $_SESSION['continue'] = false;
        if($number > $_SESSION['maxValue']) {
            $_SESSION['maxValue'] = $number;
            $_SESSION['indexMaxValue'] = $i;
        }
        $maxValue = $_SESSION['maxValue'];
        $indexMaxValue = $_SESSION['indexMaxValue'];
        unset($_SESSION['iteration']);
        unset($_SESSION['maxValue']);
        unset($_SESSION['indexMaxValue']);
        return 'Le plus grand de ces nombres était ' . $maxValue . '. C\'était le nombre numéro ' . $indexMaxValue . '.';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>