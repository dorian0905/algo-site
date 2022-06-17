<?php

$pseudoCode = 'Variables A, B, C en Caractères
Début
    A ← "573"
    B ← "19"
    C ← A & B
Fin';

// start php
function fonction_php() {
    $A = "573";
    $B = "19";
    $C = $A . $B;
    return 'C = ' . $C;
}
// end php

?>