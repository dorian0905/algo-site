<?php

/* Une compagnie d\'assurance automobile propose à ses clients quatre familles de tarifs identifiables par une couleur, du moins au plus onéreux : tarifs bleu, vert, orange et rouge. Le tarif dépend de la situation du conducteur :
    un conducteur de moins de 25 ans et titulaire du permis depuis moins de deux ans, se voit attribuer le tarif rouge, si toutefois il n\'a jamais été responsable d\'accident. Sinon, la compagnie refuse de l\'assurer.
    un conducteur de moins de 25 ans et titulaire du permis depuis plus de deux ans, ou de plus de 25 ans mais titulaire du permis depuis moins de deux ans a le droit au tarif orange s\'il n\'a jamais provoqué d\'accident, au tarif rouge pour un accident, sinon il est refusé.
    un conducteur de plus de 25 ans titulaire du permis depuis plus de deux ans bénéficie du tarif vert s\'il n\'est à l\'origine d\'aucun accident et du tarif orange pour un accident, du tarif rouge pour deux accidents, et refusé au-delà
    De plus, pour encourager la fidélité des clients acceptés, la compagnie propose un contrat de la couleur immédiatement la plus avantageuse s\'il est entré dans la maison depuis plus de cinq ans. Ainsi, s\'il satisfait à cette exigence, un client normalement "vert" devient "bleu", un client normalement "orange" devient "vert", et le "rouge" devient orange.
Ecrire l\'algorithme permettant de saisir les données nécessaires (sans contrôle de saisie) et de traiter ce problème. */

$pseudoCode = 'Variables age, licenseSeniority, responsibleAccident, assuranceSeniority, score en Entier
Début
    Lire age, licenseSeniority, responsibleAccident, assuranceSeniority
    Si (age < 25)
        score = 2
    Sinon
        score = 1
    Fin Si
    Si (licenseSeniority < 2)
        score = score + 2
    Sinon
        score = score + 1
    Fin Si
    score = score + responsibleAccident
    Si (assuranceSeniority >= 5 && score <= 4)
        score = score - 1
    Fin Si
    Si (score = 1)
        Retourne "Le client a droit au tarif bleu"
    Sinon Si (score = 2)
        Retourne "Le client a droit au tarif vert"
    Sinon Si (score = 3)
        Retourne "Le client a droit au tarif orange"
    Sinon Si (score = 4)
        Retourne "Le client a droit au tarif rouge"
    Sinon
        Retourne "Le client ne peut pas être assuré"
    Fin Si
Fin';

// start php
function fonction_php() {
    $age = $_POST['age'];
    $licenseSeniority = $_POST['licenseSeniority'];
    $responsibleAccident = $_POST['responsibleAccident'];
    $assuranceSeniority = $_POST['assuranceSeniority'];
    if($age < 25) {
        $score = 2;
    } else {
        $score = 1;
    }
    if($licenseSeniority < 2) {
        $score = $score + 2;
    } else {
        $score = $score + 1;
    }
    $score = $score + $responsibleAccident;
    if($assuranceSeniority >= 5 && $score <= 4) {
        $score = $score - 1;
    }
    if($score == 1) {
        return "Le client a droit au tarif bleu";
    } elseif($score == 2) {
        return "Le client a droit au tarif vert";
    } elseif($score == 3) {
        return "Le client a droit au tarif orange";
    } elseif($score == 4) {
        return "Le client a droit au tarif rouge";
    } else {
        return "Le client ne peut pas être assuré";
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="age">Age :</label>
    <input class="form__element__input hidden" type="number" name="age" id="age" value="' . (isset($_POST['submited']) ? $_POST['age'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="licenseSeniority">Ancienneté du permis :</label>
    <input class="form__element__input hidden" type="number" name="licenseSeniority" id="licenseSeniority" value="' . (isset($_POST['submited']) ? $_POST['licenseSeniority'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="responsibleAccident">Accidents responsables :</label>
    <input class="form__element__input hidden" type="number" name="responsibleAccident" id="responsibleAccident" value="' . (isset($_POST['submited']) ? $_POST['responsibleAccident'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="assuranceSeniority">Ancienneté assurance :</label>
    <input class="form__element__input hidden" type="number" name="assuranceSeniority" id="assuranceSeniority" value="' . (isset($_POST['submited']) ? $_POST['assuranceSeniority'] : '') . '">
</div>
');

?>