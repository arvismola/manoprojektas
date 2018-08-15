<?php
/**
Yra sąrašąs skaičių (kai kurie skaičiai turi reikšmę nulis). Suskaičiuoti kiek yra skaičių, kurių reikšmė yra nulis. Rezultatą išvesti (naudoti for).
 */

$a = [1,2,0,3,4,0,5,6,0,7,8,9,0];
$b  = 0;

for ($x=0; $x < count($a); $x++){
   if ($a[$x] == 0)  $b++;
}
echo $b;
