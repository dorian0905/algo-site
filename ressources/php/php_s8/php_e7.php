<?php

/* Écrire un algorithme de jeu de dames très simplifié.
L’ordinateur demande à l’utilisateur dans quelle case se trouve son pion (quelle ligne, quelle colonne). On met en place un contrôle de saisie afin de vérifier la validité des valeurs entrées.
Ensuite, on demande à l’utilisateur quel mouvement il veut effectuer : 0 (en haut à gauche), 1 (en haut à droite), 2 (en bas à gauche), 3 (en bas à droite).
Si le mouvement est impossible (i.e. on sort du damier ), on le signale à l’utilisateur et on s’arrête là . Sinon, on déplace le pion et on affiche le damier résultant, en affichant un « O » pour une case vide et un « X » pour la case où se trouve le pion. */

$pseudoCode = 'Tableau board(9, 9) en Entier
Variables row, column, move en Entier
Début
    Ecrire (demande de ligne, colonne, deplacement)
    Lire row, column, move
    rowOk = row > 0 ET row <= 10
    columnOk = column > 0 ET column <= 10
    moveOk = move >= 0 ET move <= 3
    Si !rowOk ou !columnOk ou !moveOk
        Retourner "Les entrés ne sont pas valides"
    Fin Si
    Switch(move)
        case 0
            row++, column--
        case 1
            row++, column++
        case 2
            row--, column++
        case 3
            row--, column--
    Fin Switch
    Si (row < 1 || row > 10 || column < 1 || column > 10) {
        return "Le pion est sorti du plateau.";
    }
    board[row-1][column-1] = "X"
    Retourner board
Fin';

// start php
function fonction_php() {
    $board=[];
    for($i = 0; $i < 10; $i++) {
        for($j = 0; $j < 10; $j++) {
            $board[$i][$j] = 'O';
        }
    }
    $row = $_POST['row'];
    $column = $_POST['column'];
    $move = $_POST['move'];
    $rowOk = ($row > 0 && $row <= 10);
    $columnOk = ($column > 0 && $column <= 10);
    $moveOk = ($move >= 0 && $move <= 3);
    if(!$rowOk || !$columnOk || !$moveOk) {
        return 'Les entrées ne sont pas valides.';
    }
    switch($move) {
        case 0:
            $row++;
            $column--;
            break;
        case 1:
            $row++;
            $column++;
            break;
        case 2:
            $row--;
            $column++;
            break;
        case 3:
            $row--;
            $column--;
            break;
    }
    if($row < 1 || $row > 10 || $column < 1 || $column > 10) {
        return 'Le pion est sorti du plateau.';
    }
    $board[$row-1][$column-1] = '⬤';
    $display = '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>';
    for($i = count($board)-1; $i >= 0; $i--) {
        for($j = 0; $j < count($board[$i]); $j++) {
            $display = $display . '&nbsp;&nbsp; | &nbsp;&nbsp;' . $board[$i][$j];
        }
        $display = $display . '&nbsp;&nbsp; | &nbsp;&nbsp;<br>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>';
    }
    return $display;
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="row">Ligne : (1 à 10)</label>
    <input class="form__element__input hidden" type="number" name="row" id="row" value="' . (isset($_POST['submited']) ? $_POST['row'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="column">Colonne : (1 à 10)</label>
    <input class="form__element__input hidden" type="number" name="column" id="column" value="' . (isset($_POST['submited']) ? $_POST['column'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="move">Déplacement : (0 à 3)</label>
    <input class="form__element__input hidden" type="number" name="move" id="move" value="' . (isset($_POST['submited']) ? $_POST['move'] : '') . '">
</div>
');

?>