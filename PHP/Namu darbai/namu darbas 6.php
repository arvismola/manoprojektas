<?php
/**
Yra duotas masyvas su tekstais. Išvesti tuos tekstus, kurių ilgis dalinasi iš dviejų arba trijų.
 */


$m = ['vienas', 'du', 'trys', 'keturi', 'penki', 'sesi', 'septyni', 'astuoni', 'devyni', 'desimt'];

/*function dal($a) {
    return $a %2!=0 and $a %3!=0;
} */

function dal($a) {
    return strlen($a) %2==0 or strlen($a) %3==0;  //teisingas ats
}

/*function dal($a) {
    return $a /2!=1 || $a /3!=1;
}*/

/* for ($i=0; $i<count($m); $i++) {
    if (dal($m[$i])) {
        echo $m[$i] . '<br>';
    }
} */

for ($i=0; $i<count($m); $i++) {
    if (dal($m[$i])) {                   // jeigu strlen yra funkcijoje antra karta jo galima ir nekartot
        echo $m[$i] . '<br>';
    }
}

