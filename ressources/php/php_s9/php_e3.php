<?php

// Ecrivez un algorithme qui demande un mot à l’utilisateur et qui affiche à l’écran le nombre de lettres de ce mot.

$pseudoCode = 'Variables sentence en String, spacesNumber en Entier
Lire sentence
spacesNumber = 0
Pour i = 0 A longueur(sentence)
    Si sentence[i] = " ";
        spacesNumber++
    Fin Si
i suivant
Retourner spacesNumber + 1';

// start php
function fonction_php() {
    $sentence = $_POST['sentence'];
    $spacesNumber = 0;
    for($i = 0; $i <= strlen($sentence)-1; $i++) {
        if($sentence[$i] == ' ') {
            $spacesNumber++;
        }
    }
    return $spacesNumber + 1;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="sentence">Phrase :</label>
    <input class="form__element__input hidden" type="text" name="sentence" id="sentence" value="' . (isset($_POST['submited']) ? $_POST['sentence'] : '') . '">
</div>
');

?>