<?php
/**
Yra duotas masyvas su tekstais. Išvesti tuos tekstus, kurių ilgis dalinasi iš dviejų arba trijų.
 */


$m = ['vienas', 'du', 'trys', 'keturi', 'penki', 'sesi', 'septyni', 'astuoni,', 'devyni', 'desimt'];

/*function dal($a) {
    return $a /2!=1 and $a /3!=1;
} */

/*function dal($a) {
    return $a %2!=1 and $a %3!=1;
} */

function dal($a) {
    return $a /2!=1 || $a /3!=1;
}

/* for ($i=0; $i<count($m); $i++) {
    if (dal($m[$i])) {
        echo $m[$i] . '<br>';
    }
} */

for ($i=0; $i<count($m); $i++) {
    if (strlen(dal($m[$i]))) {
        echo $m[$i] . '<br>';
    }
}

