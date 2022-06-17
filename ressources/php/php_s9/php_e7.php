<?php

// Ecrivez un algorithme qui demande un nombre entier à l’utilisateur. L’ordinateur affiche ensuite le message "Ce nombre est pair" ou "Ce nombre est impair" selon le cas.

$pseudoCode = 'Variables number en Entier
Lire number
Si number % 2 = 0
    Retourner "Ce nombre est pair"
Sinon
    Retourner "Ce nombre est impair"
Fin Si';

// start php
function fonction_php() {
    $number = $_POST['number'];
    if($number % 2 === 0) {
        return "Ce nombre est pair";
    } else {
        return "Ce nombre est impair";
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