<?php

// Ecrire un algorithme qui demande trois noms à l’utilisateur et l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.

$pseudoCode = 'Variables name1, name2, name3 en String
Début
    Lire name1, name2, name3
    Si (name1 <= name2 && name2 <= name3)
        Retourner "Les noms sont rangés"
    Sinon
        Retourner "Les noms ne sont pas rangés"
    Fin Si
Fin';

// start php
function fonction_php() {
    $name1 = strtolower($_POST['name1']);
    $name2 = strtolower($_POST['name2']);
    $name3 = strtolower($_POST['name3']);
    if($name1 <= $name2 && $name2 <= $name3) {
        return 'Les noms sont rangés';
    } else {
        return 'Les noms ne sont pas rangés';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="name1">Nom 1 :</label>
    <input class="form__element__input hidden" type="text" name="name1" id="name1" value="' . (isset($_POST['submited']) ? $_POST['name1'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="name2">Nom 2 :</label>
    <input class="form__element__input hidden" type="text" name="name2" id="name2" value="' . (isset($_POST['submited']) ? $_POST['name2'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="name3">Nom 1 :</label>
    <input class="form__element__input hidden" type="text" name="name3" id="name3" value="' . (isset($_POST['submited']) ? $_POST['name3'] : '') . '">
</div>
');

?>