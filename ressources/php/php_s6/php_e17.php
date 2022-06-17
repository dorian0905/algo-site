<?php

// Ecrire un algorithme permettant de saisir 100 valeurs et qui les range au fur et à mesure dans un tableau. Cela s\'appelle le tri à la volée (qui est une forme de tri par insertion)

$pseudoCode = 'A FAIRE';

// start php
function fonction_php() {
    if(!isset($_SESSION['numberOfEntries'])) {
        $_SESSION['iteration'] = -1;
        $_SESSION['array'] = [];
        $_SESSION['continue'] = true;
    }
    $i = $_SESSION['iteration'];
    $number = $_POST['number'];
    if($i == -1) {
        $_SESSION['numberOfEntries'] = $number;
        $_SESSION['iteration']++;
    } elseif($i == 0) {
        $_SESSION['array'][0] = $number;
        $_SESSION['iteration']++;
    } else {
        $determinedIndex = '';
        if($number >= $_SESSION['array'][$i-1]) {
            $determinedIndex = $i;
        } elseif($number <= $_SESSION['array'][0]) {
            $determinedIndex = 0;
        } else {
            $j=1;
            while($determinedIndex == '') {
                if($number >= $_SESSION['array'][$j-1] && $number <= $_SESSION['array'][$j]) {
                    $determinedIndex = $j;
                }
                $j++;
            }
        }
        for($k = count($_SESSION['array']); $k > $determinedIndex; $k--) {
            $_SESSION['array'][$k] = $_SESSION['array'][$k-1];
        }
        $_SESSION['array'][$determinedIndex] = $number;
        $_SESSION['iteration']++;
    }
    if($i == $_SESSION['numberOfEntries']-1) {
        $_SESSION['continue'] = false;
        unset($_SESSION['numberOfEntries']);
        return print_r($_SESSION['array']);
    }
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="number" id="changingLabel"> ' . (!isset($_POST['number']) ? 'Nombre de saisies' : 'Valeur :') . ' </label>
    <input class="form__element__input hidden" type="number" name="number" id="number" autofocus>
</div>
');

?>