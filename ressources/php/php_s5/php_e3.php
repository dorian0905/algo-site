<?php

/* Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, si l\'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27. */

$pseudoCode = 'Variables number, i en Entier ; result en String
Début
    Lire number
    result = number + 1
    Pour i <- number + 2 A number + 10
        result = result & ", " & number
    Fin Pour
    Retourner result
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    $result = $number + 1;
    for($i = $number+2; $i <= $number+10; $i++)
        $result = $result . ', ' . $i;
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