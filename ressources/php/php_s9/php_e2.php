<?php

// Ecrivez un algorithme qui demande un mot à l’utilisateur et qui affiche à l’écran le nombre de lettres de ce mot.

$pseudoCode = 'Variables word en String
Lire word
Retourner longueur(word)';

// start php
function fonction_php() {
    $word = $_POST['word'];
    return strlen($word);
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="word">Mot :</label>
    <input class="form__element__input hidden" type="text" name="word" id="word" value="' . (isset($_POST['submited']) ? $_POST['word'] : '') . '">
</div>
');

?>