<?php

$pseudoCode = 'Variables A, B en Entier
Début
    A ← 14
    B ← 29
    A ← B
    B ← A
Fin';

// start php
function fonction_php() {
    $A = 14;
    $B = 29;
    $A = $B;
    $B = $A;
    return 'A = ' . $A . ', B = ' . $B;
}
// end php

?>