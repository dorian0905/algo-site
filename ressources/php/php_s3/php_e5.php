<?php

// Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être nul). Attention toutefois, on ne doit pas calculer le produit !

$pseudoCode = 'Variables number1, number2 en Entier
Début
    Lire number1, number2
    Si (number1 = 0 OU number2 = 0)
        Retourner "Le produit est nul"
    Sinon Si ((number1 > 0 ET number2 > 0) OU (number1 < 0 ET number2 < 0))
        Retourner "Le produit est positif"
    Sinon
        Retourner "Le produit est négatif"
    Fin Si
Fin';

// start php
function fonction_php() {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if($number1 == 0 || $number2 ==0) {
        return ['Le produit est nul', $_POST['number1'], $_POST['number2']];
    } elseif(($number1 > 0 && $number2 > 0) || ($number1 < 0 && $number2 < 0)) {
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