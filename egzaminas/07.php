<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidėmis.
 */

$masyvas = ['vienas', 'du', 'trys', 'keturi', 'penki'];

$i=0;
$m = [];
foreach ($masyvas as $up){
   $m[] = strtoupper($up);
    $i++;
}

var_dump($m);