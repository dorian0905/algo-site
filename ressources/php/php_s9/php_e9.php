<?php

// A FAIRE

$pseudoCode = 'A FAIRE';

// start php
function fonction_php() {
    $sentence = $_POST['sentence'];
    $key = $_POST['key'];
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $crypted = '';
    $j = 0;
    for($i=0; $i < strlen($sentence); $i++) {
        if(in_array($sentence[$i], str_split($letters, 1))) {
            $iSentence = strpos($letters, $sentence[$i]);
            $iKey = strpos($letters, $key[$j]);
            $crypted = $crypted . $letters[($iSentence + $iKey) % 26];
            if($j == strlen($key) - 1) {
                $j=0;
            } else {
                $j++;
            }
        } else {
            $crypted = $crypted . $sentence[$i];
        }
    }
    return $crypted;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="sentence">Phrase :</label>
    <input class="form__element__input hidden" type="text" name="sentence" id="sentence" value="' . (isset($_POST['submited']) ? $_POST['sentence'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="key">Clé :</label>
    <input class="form__element__input hidden" type="text" name="key" id="key" value="' . (isset($_POST['submited']) ? $_POST['key'] : '') . '">
</div>
');

?>