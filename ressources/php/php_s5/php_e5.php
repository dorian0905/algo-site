<?php

/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite écrit la table de multiplication de ce nombre */

$pseudoCode = 'Variables number, i en Entier ; result en String
Début
    Lire number
    result = "Table de " + number + " :"
    Pour i <- 1 à 10
        result = result + number + " x " + i + " = " + number*i
    Fin Pour
    Retourner result
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    $result = 'Table de ' . $number . ' :' . '<br>';
    for($i = 1; $i <= 10; $i++) {
        $result = $result . $number . ' * ' . $i . ' = ' . $number*$i . '<br>';
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