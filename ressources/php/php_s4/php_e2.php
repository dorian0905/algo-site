<?php

/* Cet algorithme est destiné à prédire l\'avenir, et il doit être infaillible !
Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par exemple, si l\'utilisateur tape 21 puis 32, l\'algorithme doit répondre :
"Dans une minute, il sera 21 heure(s) 33".
NB : on suppose que l\'utilisateur entre une heure valide. Pas besoin donc de la vérifier.  */

$pseudoCode = 'Variables hours, minutes, totalMinutes, todayMinutes en Entier
Début
    Lire hours, minutes
    totalMinutes = 60 * hours + minutes + 1
    todayMinutes = totalMinutes % (60 * 24)
    hours = arrondi_inf(todayMinutes / 60)
    minutes = todayMinutes % 60
    Retourner "Dans une minute, il sera " + hours + " heure(s) " + minutes
Fin';

// start php
function fonction_php() {
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $totalMinutes = 60 * $hours + $minutes + 1;
    $todayMinutes = $totalMinutes % (60 * 24);
    $hours = floor($todayMinutes / 60);
    $minutes = $todayMinutes % 60;
    return 'Dans une minute, il sera ' . $hours . ' heure(s) ' . $minutes;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="hours">Heures :</label>
    <input class="form__element__input hidden" type="number" name="hours" id="hours" value="' . (isset($_POST['submited']) ? $_POST['hours'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="minutes">Minutes :</label>
    <input class="form__element__input hidden" type="number" name="minutes" id="minutes" value="' . (isset($_POST['submited']) ? $_POST['minutes'] : '') . '">
</div>
');

?>