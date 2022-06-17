<?php

/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite écrit la table de multiplication de ce nombre */

$pseudoCode = 'Variables number, i, result en Entier
Début
    Demander number
    Pour i <- 1 à number
        result = result + i
    Fin Pour
    Retourner result
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    $result = 0;
    for($i = 1; $i <= $number; $i++) {
        $result += $i;
    }
    return $result;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" value="' . (isset($_POST['submited']) ? $_POST['number'] : '') . '">
</div>
');

?>