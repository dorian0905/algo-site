<?php

$pseudoCode = 'Variables A, B, C, D en Entier
Lire A, B, C
Début
    D ← A
    A ← C
    C ← B
    B ← D
Fin';

// start php
function fonction_php() {
    $A = $_POST["number1"];
    $B = $_POST["number2"];
    $C = $_POST["number3"];
    $D = $A;
    $A = $C;
    $C = $B;
    $B = $D;
    return 'A = ' . $A . ', B = ' . $B . ', C = ' . $C;
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
<div class="form__element">
    <label class="form__element__label hidden" for="number3">Nombre 3 :</label>
    <input class="form__element__input hidden" type="number" name="number3" id="number3" value="' . (isset($_POST['submited']) ? $_POST["number3"] : '') . '">
</div>
');

?>