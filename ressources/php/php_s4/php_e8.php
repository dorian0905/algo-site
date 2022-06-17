<?php

/* Ecrivez un algorithme qui a près avoir demandé un numéro de jour, de mois et d\'année à l\'utilisateur, renvoie s\'il s\'agit ou non d\'une date valide.
                Cet exercice est certes d’un manque d’originalité affligeant, mais après tout, en algorithmique comme ailleurs, il faut connaître ses classiques ! Et quand on a fait cela une fois dans sa vie, on apprécie pleinement l’existence d’un type numérique « date » dans certains langages…).
                Il n\'est sans doute pas inutile de rappeler rapidement que le mois de février compte 28 jours, sauf si l’année est bissextile, auquel cas il en compte 29. L’année est bissextile si elle est divisible par quatre. Toutefois, les années divisibles par 100 ne sont pas bissextiles, mais les années divisibles par 400 le sont. */

$pseudoCode = 'Variables day, month, year en Entier
Début
    Lire day, month, year
    Si (day < 0 OU month < 0 OU month > 12)
        Retourner "La date n\'est pas valide"
    Fin Si
    Si (month = 2)
        Si (j <= 28)
            Retourner "La date est valide"
        Sinon Si (j = 29)
            Si (year % 4 = 0 && (year % 100 != 0 OU year % 400 = 0))
                Retourner "La date est valide"
            Fin Si
        Fin Si
    Sinon Si (month = 4 OU month = 6 OU month = 9 OU month = 11)
        Si (j <= 30)
            Retourner "La date est valide"
        Fin Si
    Sinon Si (j <= 31)
        Retourner "La date est valide"
    Fin Si
    Retourner "La date n\'est pas valide"
Fin';

// start php
function fonction_php() {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    if($day < 1 || $month < 1 || $month > 12) {
        return 'La date n\'est pas valide';
    }
    if($month == 2 ) {
        if($day <= 28) {
            return 'La date est valide';
        } elseif($day == 29) {
            if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
                return 'La date est valide';
            }
        }
    } elseif($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        if($day <= 30) {
            return 'La date est valide';
        }
    } elseif($day <= 31) {
        return 'La date est valide';
    }
    return 'La date n\'est pas valide';
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="day">Jour :</label>
    <input class="form__element__input hidden" type="number" name="day" id="day" value="' . (isset($_POST['submited']) ? $_POST['day'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="month">Mois :</label>
    <input class="form__element__input hidden" type="number" name="month" id="month" value="' . (isset($_POST['submited']) ? $_POST['month'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="year">Année :</label>
    <input class="form__element__input hidden" type="number" name="year" id="year" value="' . (isset($_POST['submited']) ? $_POST['year'] : '') . '">
</div>
');

?>