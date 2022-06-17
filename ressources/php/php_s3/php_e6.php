<?php

/* Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de sa catégorie :
    •"Poussin" de 6 à 7 ans
    •"Pupille" de 8 à 9 ans
    •"Minime" de 10 à 11 ans
    •"Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ? */

$pseudoCode = 'Variables number en Entier
Début
    Lire number
    Si (number <= 5)
        Retourner "Sans catégorie"
    Sinon Si (number <= 7)
        Retourner "Poussin"
    Sinon Si (number <= 9)
        Retourner "Pupille"
    Sinon Si (number <= 11)
        Retourner "Minime"
    Sinon
        Retourner "Cadet"
    Fin Si
Fin';

// start php
function fonction_php() {
    $number = $_POST['number'];
    if($number <= 5) {
        return 'Sans catégorie';
    } elseif($number <= 7) {
        return 'Poussin';
    } elseif($number <= 9) {
        return 'Pupille';
    } elseif($number <= 11) {
        return 'Minime';
    } else {
        return 'Cadet';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number">Age :</label>
    <input class="form__element__input hidden" type="number" name="number" id="number" value="' . (isset($_POST['submited']) ? $_POST['number'] : '') . '">
</div>
');

?>