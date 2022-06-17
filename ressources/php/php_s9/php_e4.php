<?php

// Ecrivez un algorithme qui demande une phrase à l’utilisateur et qui affiche à l’écran le nombre de voyelles contenues dans cette phrase.
// On pourra écrire deux solutions. La première déploie une condition composée bien fastidieuse. La deuxième, en utilisant la fonction Trouve, allège considérablement l\'algorithme.

$pseudoCode = 'Tableau vowels[a, e, i, o, u, y]
Variables sentence en String, vowelsNumber en Entier
Lire sentence
vowelsNumber = 0
Pour i = 0 A longueur(sentence)
    Pour j = 0 A 5
        Si sentence[i] = vowels[j];
            spaceNumber++
        Fin Si
    j suivant
i suivant
Retourner spaceNumber + 1';

// start php
function fonction_php() {
    $sentence = $_POST['sentence'];
    $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
    $vowelsNumber = 0;
    for($i = 0; $i <= strlen($sentence)-1; $i++) {
        for($j = 0; $j <= 5; $j++) {
            if($sentence[$i] == $vowels[$j]) {
                $vowelsNumber++;
            }
        }
    }
    return $vowelsNumber;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="sentence">Phrase :</label>
    <input class="form__element__input hidden" type="text" name="sentence" id="sentence" value="' . (isset($_POST['submited']) ? $_POST['sentence'] : '') . '">
</div>
');

?>