<?php

// Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.

$pseudoCode = 'Variables number1, number2 en Entier
Début
    Lire number1, number2
    Si ((number1 >= 0 ET number2 >= 0) OU (number1 < 0 ET number2 < 0))
        Retourner "Le produit est positif"
    Sinon
        Retourner "Le produit est négatif"
    Fin Si
Fin';

// start php
function fonction_php() {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if(($number1 >= 0 && $number2 >= 0) || ($number1 < 0 && $number2 < 0)) {
        return 'Le produit est positif';
    } else {
        return 'Le produit est négatif';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number1">Nombre 1 :</label>
    <input class="form__element__input hidden" type="number" name="number1" id="number1" value="' . (isset($_POST['submited']) ? $_POST['number1'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="number2">Nombre 2 :</label>
    <input class="form__element__input hidden" type="number" name="number2" id="number2" value="' . (isset($_POST['submited']) ? $_POST['number2'] : '') . '">
</div>
');

?>