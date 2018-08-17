<?php
/**
Yra skaiciu  masyvas. Isvesti visus skaicius kurie yra daugiau uz 3 ir maziau uz 10.
 */

$m = [1,2,3,4,5,6,7,8,9,10];


for ($i=0; $i<count($m); $i++) {
    if ($m[$i] >3 and $m[$i]<10) {
        echo $m[$i] . '<br>';
    }
}