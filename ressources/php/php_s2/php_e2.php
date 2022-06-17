<?php

$pseudoCode = 'Variables number, carre en Entier
Début
    Lire number
    carre = number * number
    Retourner carre
Fin';

// start php
function fonction_php() {
    $number = $_POST['number1'];
    $carre = $number * $number;
    return 'carre = ' . $carre;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number1">Nombre :</label>
    <input class="form__element__input hidden" type="number" name="number1" id="number1" value="' . (isset($_POST['submited']) ? $_POST['number1'] : '') . '">
</div>
');

?>