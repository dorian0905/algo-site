<?php

$pseudoCode = 'Variables A, B, C en Entier
Début
    A ← 51
    B ← 34
    C ← A + B
    A ← 21
    C ← B – A
Fin';

// start php
function fonction_php() {
    $A = 51;
    $B = 34;
    $C = $A + $B;
    $A = 21;
    $C = $B - $A;
    return 'A = ' . $A . ', B = ' . $B . ', C = ' . $C;
}
// end php

?>