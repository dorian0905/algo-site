<?php

// Pour sa naissance, la grand-mère de TITI place une somme de 1000 Euros sur son compte épargne rémunéré
// au taux de 2.75% (chaque année le compte est augmenté de 2.75%). Développer un algorithme permettant
// de stocker dans un tableau sur 20 ans associant à chaque anniversaire de TITI la somme acquise sur son compte. Puis, la grand-mère de TITI aura la possibilité de saisir un âge (compris entre 1 et 20 ans) et l\'algorithme affichera la somme correspondante qu\'il y aura alors sur le compte.

$pseudoCode = 'Tableau array1() en Décimal
Variables age, i en Entier
Début
    lire age
    array[0] = 1000
    Pour i ← 1 à 20
        array[i] = array[i-1] * 1.0275
    i suivant
    Retourner arrondi(array[age], 2)
Fin';

// start php
function fonction_php() {
    $age = $_POST['age'];
    $array[0] = 1000;
    for($i = 1; $i <= 20; $i++) {
        $array[$i] = $array[$i-1] * 1.0275;
    }
    return round($array[$age], 2);
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="age">Age :</label>
    <input class="form__element__input hidden" type="number" name="age" id="age" value="' . (isset($_POST['submited']) ? $_POST['age'] : '') . '">
</div>
');

?>