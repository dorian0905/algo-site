<?php

$pseudoCode = 'Variables sum, number, paid, rest, number10, number5, number1 en Entier
Début
    sum = 0
    Tant que number <> 0
        Ecire "Nombre :"
        lire number
        sum = sum + number
    Fin Tant que
    Ecrire "Payé :"
    Lire paid
    rest = sum - paid
    number10 = rest / 10
    rest = rest - 10 x number10
    number5 = rest / 5
    number1 = rest - 5 x number5
    Retourner "Il faut rendre au client " + number10 + " billets de 10€, " + number5 + " billets de 5€, et " + number1 + " pièces de 1€"
Fin';

// start php
function fonction_php() {
    if(!isset($_SESSION['sum'])) {
        $_SESSION['sum'] = 0;
        $_SESSION['moreArticles'] = true;
        $_SESSION['continue'] = true;
    }
    $number = $_POST['number'];
    if($_SESSION['moreArticles']) {
        if($number == 0) {
            $_SESSION['moreArticles'] = false;
        } else {
            $_SESSION['sum'] = $_SESSION['sum'] + $number;
        }
    } else {
        $_SESSION['continue'] = false;
        $sum = $_SESSION['sum'];
        unset($_SESSION['sum']);
        $rest = $number - $sum;
        $number10 = floor($rest / 10);
        $rest = $rest - $number10 * 10;
        $number5 = floor($rest / 5);
        $number1 = $rest - $number5 * 5;
        return 'Il faut rendre au client ' . $number10 . ' billets de 10€, ' . $number5 . ' billets de 5€, et ' . $number1 . ' pièces de 1€';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" id="changingLabel" for="number"> ' . ((!isset($_POST['number']) || $_POST['number'] != 0) ? 'Prix de l\'article :' : 'Somme payée :') . ' </label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>