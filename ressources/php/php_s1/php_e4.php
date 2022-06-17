<?php

$pseudoCode = 'Variables A, B, C en Entier
Début
    A ← 13
    B ← 19
    C ← A + B
    B ← A + B
    A ← C
Fin';

// start php
function fonction_php() {
    $A = 13;
    $B = 19;
    $C = $A + $B;
    $B = $A + $B;
    $A = $C;
    return 'A = ' . $A . ', B = ' . $B . ', C = ' . $C;
}
// end php

?>