<?php

// Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).

$pseudoCode = 'Variables number en Entier
Début
    Lire number
    Si (number = 0)
        Retourner number + " est nul"
    Sinon Si (number > 0)
        Retourner number + " est positif"
    Sinon
        Retourner number + " est négatif"
    Fin Si
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    if($number == 0) {
        return $number . ' est nul';
    } elseif($number > 0) {
        return $number . ' est positif';
    } else {
        return $number . ' est négatif';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" value="' . (isset($_POST['submited']) ? $_POST['number'] : '') . '">
</div>
');

?>