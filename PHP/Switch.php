<?php

$m = [
    "Antanas",
    "Pertas",
    "Jonas",
    "Arvydas",
    "Kestas",
];
shuffle($m);
switch ($m[0]) {         // darbas su masyvais ir keliais kintamaisiais.
    case  "Antanas":
    case "Jonas":
    case "Kestas": $rez ="draugas"; break;
    case "Arvydas": $rez="priesas"; break;
    case "Petras": $rez="Lopas"; break;
    default: $rez="KATINAS";
}

echo $m[0] . ' yra ' . $rez;



