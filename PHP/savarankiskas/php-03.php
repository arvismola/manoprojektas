<?php
/**
Yra skaiciu  masyvas. Isvesti visus skaicius kurie yra daugiau uz 3 ir maziau uz 10. Sulyginima atlikti naudojant funkcija.
 */

$m = [1,2,3,4,5,6,7,8,9,10];


function sulyg($a) {
    return $a >3 and $a <10;
        }

for ($i=0; $i<count($m); $i++) {
    if (sulyg($m[$i])) {
         echo $m[$i] . '<br>';
    }
}
