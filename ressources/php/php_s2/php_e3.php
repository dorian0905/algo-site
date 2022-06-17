<?php

$pseudoCode = 'Variables htPrice, numberOfArticles, rate en Entier
Début
    Lire htPrice, numberOfArticles, rate
    ttcPrice = htPrice * numberOfArticles * (1 + rate)
    Retourner ttcPrice
Fin';

// start php
function fonction_php() {
    $htPrice = $_POST['htPrice'];
    $numberOfArticles = $_POST['numberOfArticles'];
    $rate = $_POST['rate'];
    $ttcPrice = $htPrice * $numberOfArticles * (1 + $rate);
    return 'prix TTC = ' . $ttcPrice;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="htPrice">Prix HT :</label>
    <input class="form__element__input hidden" type="number" name="htPrice" id="htPrice" value="' . (isset($_POST['submited']) ? $_POST['htPrice'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="numberOfArticles">Nombre d\'articles :</label>
    <input class="form__element__input hidden" type="number" name="numberOfArticles" id="numberOfArticles" value="' . (isset($_POST['submited']) ? $_POST['numberOfArticles'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="rate">Taux :</label>
    <input class="form__element__input hidden" type="number" name="rate" id="rate" value="' . (isset($_POST['submited']) ? $_POST['rate'] : '') . '">
</div>
');

?>