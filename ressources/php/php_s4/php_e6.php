<?php

/* Les élections législatives, en Toonerie Nationale, obéissent à la règle suivante :
    lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le premier tour.
    en cas de deuxième tour, peuvent participer uniquement les candidats ayant obtenu au moins 12,5% des voix au premier tour.
Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidats au premier tour. Cet algorithme traitera ensuite le candidat numéro 1 (et uniquement lui) : il dira s'il est élu, battu, s'il se trouve en ballottage favorable (il participe au second tour en étant arrivé en tête à l'issue du premier tour) ou défavorable (il participe au second tour sans avoir été en tête au premier tour). */

$pseudoCode = 'Variables score1, score2, score3, score4 en Décimal
Début
    Lire score1, score2, score3, score4
    Si (score1 > 50)
        Retourner "Le candidat est élu"
    Sinon Si (score1 < 12.5 OU score2 > 50 OU score3 > 50 OU score4 > 50)
        Retourner "Le candidat est battu"
    Sinon Si (score1 > max(score2, score3, score4)
        Retourner "Le candidat est en ballottage favorable"
    Sinon
        Retourner "Le candidat est en ballottage défavorable"
    Fin Si
Fin';

// start php
function fonction_php() {
    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $score3 = $_POST['score3'];
    $score4 = $_POST['score4'];
    if($score1 > 50) {
        return 'Le candidat est élu';
    } elseif($score1 < 12.5 || $score2 > 50 || $score3 > 50 || $score4 > 50) {
        return 'Le candidat est battu';
    } elseif($score1 > max($score2, $score3, $score4)) {
        return 'Le candidat est en ballottage favorable';
    } else {
        return 'Le candidat est en ballottage défavorable';
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="score1">Score du candidat 1 :</label>
    <input class="form__element__input hidden" type="number" name="score1" id="score1" value="' . (isset($_POST['submited']) ? $_POST['score1'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="score2">Score du candidat 2 :</label>
    <input class="form__element__input hidden" type="number" name="score2" id="score2" value="' . (isset($_POST['submited']) ? $_POST['score2'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="score3">Score du candidat 3 :</label>
    <input class="form__element__input hidden" type="number" name="score3" id="score3" value="' . (isset($_POST['submited']) ? $_POST['score3'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="score4">Score du candidat 4 :</label>
    <input class="form__element__input hidden" type="number" name="score4" id="score4" value="' . (isset($_POST['submited']) ? $_POST['score4'] : '') . '">
</div>
');

?>