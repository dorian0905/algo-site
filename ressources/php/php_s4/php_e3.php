<?php

/* De même que le précédent, cet algorithme doit demander une heure et en afficher une autre. Mais cette fois, il doit gérer également les secondes, et afficher l\'heure qu\'il sera une seconde plus tard.
                Par exemple, si l\'utilisateur tape 21, puis 32, puis 8, l\'algorithme doit répondre : "Dans une seconde, il sera 21 heure(s), 32 minute(s) et 9 seconde(s)".
                NB : là encore, on suppose que l\'utilisateur entre une date valide.  */

$pseudoCode = 'Variables hours, minutes, seconds, totalSeconds, todaySeconds en Entier
Début
    Lire hours, minutes, seconds
    totalSeconds = 3600 * hours + 60 * minutes + seconds + 1
    todaySeconds = totalSeconds % (3600 * 24)
    hours = arrondi_inf(todaySeconds / 3600)
    minutes = arrondi_inf((todaySeconds - 3600 * hours) / 60)
    seconds = todaySeconds - hours * 3600 - minutes * 60
    Retourner "Dans une seconde, il sera " + hours + " heure(s), " + minutes + " minute(s) et " + seconds + " seconde(s)"
Fin';

// start php
function fonction_php() {
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $seconds = $_POST['seconds'];
    $totalSeconds = 3600 * $hours + 60 * $minutes + $seconds + 1;
    $todaySeconds = $totalSeconds % (3600 * 24);
    $hours = floor($todaySeconds / 3600);
    $minutes = floor(($todaySeconds - $hours * 3600) / 60);
    $seconds = $todaySeconds - $hours * 3600 - $minutes * 60;
    return 'Dans une seconde, il sera ' . $hours . ' heure(s), ' . $minutes . ' minute(s) et ' . $seconds . ' seconde(s)';
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
<div class="form__element">
    <label class="form__element__label hidden" for="seconds">Secondes :</label>
    <input class="form__element__input hidden" type="number" name="seconds" id="seconds" value="' . (isset($_POST['submited']) ? $_POST['seconds'] : '') . '">
</div>
');

?>