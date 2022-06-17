<?php

$pseudoCode = 'Variables section1, section2, section3, section4 en String
Début
    section1 ← belle marquise
    section2 ← vos beaux yeux
    section3 ← me font mourir
    section4 ← d\'amour
    Retourner   section1 + " " + section2 + " " + section3 + " " + section4
                section2 + " " + section1 + " " + section3 + " " + section4
                section1 + " " + section2 + " " + section4 + " " + section3
                section4 + " " + section3 + " " + section2 + " " + section1
Fin';

// start php
function fonction_php() {
    $section1 = 'belle marquise';
    $section2 = 'vos beaux yeux';
    $section3 = 'me font mourir';
    $section4 = 'd\'amour';
    return '1ère phrase : ' . $section1 . ' ' . $section2 . ' ' . $section3 . ' ' . $section4 . '<br>
    2ème phrase : ' . $section2 . ' ' . $section1 . ' ' . $section3 . ' ' . $section4 . '<br>
    3ème phrase : ' . $section1 . ' ' . $section2 . ' ' . $section4 . ' ' . $section3 . '<br>
    4ème phrase : ' . $section4 . ' ' . $section3 . ' ' . $section2 . ' ' . $section1;
}
// end php

?>