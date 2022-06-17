<?php

// Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d’effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.

$pseudoCode = 'Tableau array()
Variables i en Entier, sum en Décimal
Début
    Ecrire "Combien de saisis ?"
    Lire numberOfEntries
    i = 0
    Tant que i < numberOfEntries
        Ecrire "Quelle est le nombre ?"
        Lire number
        array[i] = number
    Fin Tant que
    maxValue = array[0]
    indexMaxValue = 0
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
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i == -1) {
        $_SESSION['numberOfEntries'] = $number;
        $_SESSION['iteration']++;
    } elseif($i < $_SESSION['numberOfEntries']) {
        $_SESSION['array'][$i] = $number;
        $_SESSION['iteration']++;      
    }
    if($i == $_SESSION['numberOfEntries']-1) {
        $maxValue = $_SESSION['array'][0];
        $indexMaxValue = 0;
        for($j = 1; $j < count($_SESSION['array']); $j++) {
            if($_SESSION['array'][$j] > $maxValue) {
                $maxValue = $_SESSION['array'][$j];
                $indexMaxValue = $j;
            }
        }
        $_SESSION['continue'] = false;
        unset($_SESSION['numberOfEntries']);
        return ('La plus grande valeur est ' . $maxValue . ', elle a l\'index ' . $indexMaxValue);
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