<?php

// Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, qui devront être stockées dans un tableau. L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.

$pseudoCode = 'Tableau array()
Variables i en Entier, sum en Décimal
Début
    Ecrire "Combien de saisis ?"
    Lire numberOfEntries
    i = 0
    positive = 0
    negative = 0
    Tant que i < numberOfEntries
        Ecrire "Quelle est le nombre ?"
        Lire number
        array[i] = number
        Si number > 0
            positive ++
        Sinon Si number < 0
            negative ++
        Fin Si
    Fin Tant que
    Retourner positive, negative
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['numberOfEntries'])) {
        $_SESSION['iteration'] = -1;
        $_SESSION['positive'] = 0;
        $_SESSION['negative'] = 0;
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
        if($number > 0) {
            $_SESSION['positive']++;
        } elseif($number < 0) {
            $_SESSION['negative']++;
        }
        $_SESSION['iteration']++;      
    }
    if($i == $_SESSION['numberOfEntries']-1) {
        $_SESSION['continue'] = false;
        unset($_SESSION['numberOfEntries']);
        return 'Il y a ' . $_SESSION['negative'] . ' valeurs négatives, et ' . $_SESSION['positive'] . ' positives';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre de saisies :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>