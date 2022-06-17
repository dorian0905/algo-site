<?php

// Formulez un algorithme équivalent à l’algorithme suivant :

$pseudoCode = 'Variables tutu, toto en Entier et tata en String
Début
    Lire tutu, toto, tata
    Si (tutu > toto + 4 OU tata = "OK")
        tutu = tutu + 1
    Sinon
        tutu = tutu - 1
    Fin Si
    Retourner tutu
Fin';

// start php
function fonction_php() {
    $tutu = $_POST['tutu'];
    $toto = $_POST['toto'];
    $tata = $_POST['tata'];
    if($tutu > $toto + 4 || $tata == "OK") {
        $tutu ++;
    } else {
        $tutu --;
    }
    return 'tutu = ' . $tutu;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="tutu">Tutu :</label>
    <input class="form__element__input hidden" type="number" name="tutu" id="tutu" value="' . (isset($_POST['submited']) ? $_POST['tutu'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="toto">Toto :</label>
    <input class="form__element__input hidden" type="number" name="toto" id="toto" value="' . (isset($_POST['submited']) ? $_POST['toto'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="tata">Tata :</label>
    <input class="form__element__input hidden" type="text" name="tata" id="tata" value="' . (isset($_POST['submited']) ? $_POST['tata'] : '') . '">
</div>
');

?>