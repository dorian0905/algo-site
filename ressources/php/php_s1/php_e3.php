<?php

$pseudoCode = 'Variables A, B en Entier
Début
    A ← 49
    B ← A + 4
    A ← A + 1
    B ← A – 4
Fin';

// start php
function fonction_php() {
    $A = 49;
    $B = $A + 4;
    $A = $A + 1;
    $B = $A - 4;
    return 'A = ' . $A . ', B = ' . $B;
}
// end php

?>