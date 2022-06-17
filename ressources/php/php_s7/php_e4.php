<?php

/* Ecrivez un algorithme qui permette à l’utilisateur de supprimer une valeur d’un tableau préalablement saisi.
                L’utilisateur donnera l’indice de la valeur qu’il souhaite supprimer. Attention, il ne s’agit pas de remettre une valeur
                à zéro, mais bel et bien de la supprimer du tableau lui-même ! */

$pseudoCode = 'Tableau array(?) en Entier
Variables index en Entier
Lire index
Pour i = index A longueur(array)-2
    array[i] = array[i+1]
i suivant
Supprimer(array[longueur(array)-1])
Retrouner array
';

// start php
function fonction_php() {
    $array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    $index = $_POST['index'];
    for($i = $index; $i <= count($array)-2; $i++) {
        $array[$i] = $array[$i+1];
    }
    array_pop($array);
    return print_r($array);
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="index">Index à supprimer :</label>
    <input class="form__element__input hidden" type="number" name="index" id="index" value="' . (isset($_POST['submited']) ? $_POST['index'] : '') . '">
</div>
');

?>