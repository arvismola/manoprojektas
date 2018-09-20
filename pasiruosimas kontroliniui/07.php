<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 4 elementų - teksto eilučių. Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis.
 */

$masyvas = ['VieNAS', 'dU', 'TrYs', 'KeTUri'];

$i=0;

foreach ($masyvas as $maz){
     = strtolower($maz[$i]);
    $i++;
}

var_dump($masyvas);

//nedabaigtas, neveikia