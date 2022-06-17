<?php

// Un des plus anciens systèmes de cryptographie (aisément déchiffrable) consiste à décaler les lettres d’un message pour le rendre illisible. Ainsi, les A deviennent des B, les B des C, etc. Ecrivez un algorithme qui demande une phrase à l’utilisateur et qui la code selon ce principe. Comme dans le cas précédent, le codage doit s’effectuer au niveau de la variable stockant la phrase, et pas seulement à l’écran.

$pseudoCode = 'Variables word, letters, crypted en String
Lire word
letters= "abcdefghijklmnopqrstuvwxyza"
crypted = ""
Pour i = 0 A longueur(word)-1
    crypted = crypted + letters[trouve(letters, word[i])+1]
i suivant
Retourner crypted';

// start php
function fonction_php() {
    $word = $_POST['word'];
    $letters = 'abcdefghijklmnopqrstuvwxyza';
    $crypted = "";
    for($i=0; $i < strlen($word); $i++) {
        $crypted = $crypted . $letters[strpos($letters, $word[$i])+1];
    }
    return $crypted;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="word">Mot à crypter :</label>
    <input class="form__element__input hidden" type="text" name="word" id="word" value="' . (isset($_POST['submited']) ? $_POST['word'] : '') . '">
</div>
');

?>