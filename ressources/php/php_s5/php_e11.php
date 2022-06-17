<?php

/* Ecrire un algorithme qui permette de connaître ses chances de gagner au tiercé, quarté, quinté et autres impôts volontaires.
                On demande à l’utilisateur le nombre de chevaux partants, et le nombre de chevaux joués. Les deux messages affichés devront être :
                    Dans l’ordre : une chance sur X de gagner
                    Dans le désordre : une chance sur Y de gagner
*/

$pseudoCode = 'Variables startingHorses, playedHorses, numerator, denominator, factP, x, y en Entier
Début
    Demander startingHorses, playedHorses
    For i <- 1 à startingHorses
        numerator = numerator * i
    Fin for
    For j <- 1 à (startingHorses-playedHorses)
        denominator = denominator * j
    Fin for
    For k <- 1 à playedHorses
        factP = factP * k
    Fin for
    x = numerator / denominator
    y = x / factP
    Retourner  "Dans l’ordre : une chance sur " + x + " de gagner
                Dans le désordre : une chance sur " + y + " de gagner"
Fin';

// start php
function fonction_php() {
    $startingHorses = $_POST['startingHorses'];
    $playedHorses = $_POST['playedHorses'];
    $numerator = 1;
    $denominator = 1;
    $factP = 1;
    for($i = 1; $i <= $startingHorses; $i++) {
        $numerator *= $i;
    }
    for($j = 1; $j <= ($startingHorses-$playedHorses); $j++) {
        $denominator *= $j;
    }
    for($k = 1; $k <= $playedHorses; $k++) {
        $factP *= $k;
    }
    $x = $numerator/$denominator;
    $y = $x / $factP;
    return 'Dans l’ordre : une chance sur '. $x .' de gagner<br>
    Dans le désordre : une chance sur '. $y .' de gagner';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="startingHorses">Nombre de chevaux partants :</label>
    <input class="form__element__input hidden" type="number" name="startingHorses" id="startingHorses" value="' . (isset($_POST['submited']) ? $_POST['startingHorses'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="playedHorses">Nombre de chevaux joués :</label>
    <input class="form__element__input hidden" type="number" name="playedHorses" id="playedHorses" value="' . (isset($_POST['submited']) ? $_POST['playedHorses'] : '') . '">
</div>
');

?>