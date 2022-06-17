<?php

// Ecrivez les algorithmes qui génèrent un Glup aléatoire tel que …
/*
 0 =< Glup =< 2
 –1 =< Glup =< 1
 1,35 =< Glup =< 1,65
 Glup émule un dé à six faces
 –10,5 =< Glup =< +6,5
 Glup émule la somme du jet simultané de deux dés à six faces
*/

$pseudoCode = 'Variables glup1 ... glup6 en Entier
glup1 = tronque(alea()*3)
glup2 = tronque(alea()*3)-1
glup3 = (tronque(alea()*31)+135)/100
glup4 = tronque(alea()*6)+1
glup5 = (tronque(alea()*171)-105)/10
glup6 = tronque(alea()*6)+1 + tronque(alea()*6)+1
Retourner glup1 ... glup6';

// start php
function fonction_php() {
    $glup1 = rand(0, 2);
    $glup2 = rand(-1, 1);
    $glup3 = rand(135, 165)/100;
    $glup4 = rand(1, 6);
    $glup5 = rand(-105, 65)/10;
    $glup6 = rand(1, 6) + rand(1, 6);
    return $glup1 . ' ' . $glup2 . ' ' . $glup3 . ' ' . $glup4 . ' ' . $glup5 . ' ' . $glup6;
}
// end php

?>