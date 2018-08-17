<?php
/**
Yra masyvas su vardais. Isvesti visus vardus, kuriu teksto ilgis >= 5;
 */


$m = ['Antanas', 'Petras', 'Juozas', 'Kestas', 'Martynas', 'Mykolas', 'Tadas', 'Ona'];

for ($i=0; $i<count($m); $i++) {
    if (strlen($m[$i])>=5) {
    echo $m[$i] .' '. "tinka" . '<br>' . '<hr>';
    }
    else {
        echo $m[$i] .' '. "netinka" . '<br>' . '<hr>';}
}