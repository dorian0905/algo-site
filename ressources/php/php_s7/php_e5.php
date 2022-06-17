<?php

/* Ecrivez l\'algorithme qui recherche un mot saisi au clavier dans un dictionnaire. Le dictionnaire est supposé être codé
                dans un tableau préalablement rempli et trié. */

$pseudoCode = 'Tableau array(?) en Entier
Variables word en String; indexMin, indexMax, presentIndex en Integer; finished en Booléen
Lire word
indexMin = 0
indexMax = longueur(array) - 1
finished = false
Tant Que !finished
    presentIndex = arrondi_inf(indexMax - IndexMin)/2
    Si array[presentIndex] = word
        Retourner "Mot trouvé"
    Sinon Si word < array[presentIndex]
        indexMax = presentIndex - 1
    Sinon
        indexMin = presentIndex + 1
    Fin Si
    Si indexMax < indexMin
        finished = true
    Fin Si
Fin Tant Que
Retourner "Le mot n\'existe pas"
';

// start php
function fonction_php() {
    $array = ['arbre', 'bol', 'cool', 'flute', 'kamel', 'novembre', 'zebre'];
    $word = $_POST["word"];
    $indexMin = 0;
    $indexMax = count($array) - 1;
    $finished = false;
    while($finished == false) {
        $presentIndex = floor(($indexMax - $indexMin)/2) + $indexMin;
        if($array[$presentIndex] == $word) {
            return "Mot trouvé";
        } elseif($word < $array[$presentIndex]) {
            $indexMax = $presentIndex - 1;
        } else {
            $indexMin = $presentIndex + 1;
        }
        if($indexMax < $indexMin) {
            $finished = true;
        }
    }
    return "Le mot n'existe pas";
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="word">Mot recherché :</label>
    <input class="form__element__input hidden" type="text" name="word" id="word" value="' . (isset($_POST['submited']) ? $_POST['word'] : '') . '">
</div>
');

?>