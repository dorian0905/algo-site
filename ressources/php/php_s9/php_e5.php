<?php

// Ecrivez un algorithme qui demande une phrase à l’utilisateur. Celui-ci entrera ensuite le rang d’un caractère à supprimer, et la nouvelle phrase doit être affichée (on doit réellement supprimer le caractère dans la variable qui stocke la phrase, et pas uniquement à l’écran).

$pseudoCode = 'Variables sentence en String, rankToDelete en Entier
Lire sentence
Lire rankToDelete
sentence = gauche(sentence, rankToDelete - 1) + droite(sentence, rankToDelete + 1)
Retourner sentence';

// start php
function fonction_php() {
    $sentence = $_POST['sentence'];
    $rankToDelete = $_POST['rankToDelete'];
    $sentence = substr($sentence, 0, $rankToDelete) . substr($sentence, $rankToDelete + 1, strlen($sentence)-1 - $rankToDelete);
    return $sentence;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="sentence">Phrase :</label>
    <input class="form__element__input hidden" type="text" name="sentence" id="sentence" value="' . (isset($_POST['submited']) ? $_POST['sentence'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="rankToDelete">Rang à supprimer :</label>
    <input class="form__element__input hidden" type="number" name="rankToDelete" id="rankToDelete" value="' . (isset($_POST['submited']) ? $_POST['rankToDelete'] : '') . '">
</div>
');

?>