<?php

// Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les vingt suivantes et 0,08 E au-delà. Ecrivez un algorithme qui demande à l’utilisateur le nombre de photocopies effectuées et qui affiche la facture correspondante.

$pseudoCode = 'Variables photocopy en Entier, price en Décimal
Début
    Lire photocopy
    Si (photocopy <= 10)
        price = photocopy * 0.1
    Sinon Si (photocopy <= 30)
        price = 10 * 0.1 + (photocopy - 10) * 0.09
    Sinon
        price = 10 * 0.1 + 20 * 0.09 + (photocopy - 30) * 0.08
    Fin Si
    Retourner "Prix : " + price
Fin';

// start php
function fonction_php() {
    $photocopy = $_POST['photocopy'];
    if($photocopy <= 10) {
        $price = $photocopy * 0.1;
    } elseif ($photocopy <= 30) {
        $price = 10 * 0.1 + ($photocopy - 10) * 0.09;
    } else {
        $price = 10 * 0.1 + 20 * 0.09 + ($photocopy - 30) * 0.08;
    }
    return 'Prix : ' . $price . '€';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="photocopy">Nombre :</label>
    <input class="form__element__input hidden" type="text" name="photocopy" id="photocopy" value="' . (isset($_POST['submited']) ? $_POST['photocopy'] : '') . '">
</div>
');

?>