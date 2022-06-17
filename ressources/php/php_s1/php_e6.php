<?php

$pseudoCode = 'Variables A, B, C en Entier
Lire A, B
Début
    C ← B
    B ← A
    A ← C
Fin';

// start php
function fonction_php() {
    $A = $_POST["number1"];
    $B = $_POST["number2"];
    $C = $B;
    $B = $A;
    $A = $C;
    return 'A = ' . $A . ', B = ' . $B;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number1">Nombre 1 :</label>
    <input class="form__element__input hidden" type="number" name="number1" id="number1" value="' . (isset($_POST['submited']) ? $_POST["number1"] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="number2">Nombre 2 :</label>
    <input class="form__element__input hidden" type="number" name="number2" id="number2" value="' . (isset($_POST['submited']) ? $_POST["number2"] : '') . '">
</div>
')

?>