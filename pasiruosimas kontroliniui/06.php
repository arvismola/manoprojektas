<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 3 parametrus - skaičius, funkcija turi grąžinti rezultatą - visų paduotų parametrų sumos kvadratą.
 */

function kvadratas($a, $b, $c){
    $ats = ($a+$b+$c)*($a+$b+$c);
    echo $ats;
}

kvadratas(2,3,4);


