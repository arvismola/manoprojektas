<?php
/*
 Sukurti funkciją, kuri išveda visas išeigines dienas (datas) per nurodytą mėnesį (parametras). Išeiginės dienos: šeštadienis ir sekmadienis.
 */

function iseigines($y, $m){
    $data = new DateTime();
    $data->setdate($y,$m,1);
   do {
       $n = $data->format('N');
       $mx = $data->format('m');
       if ($n == 6 or $n == 7){
           echo $data->format('Y-m-d') . '<br>';
       }
       $data->add(new DateInterval('P1D'));
   }
   while ($mx == $m);
}

iseigines(2018, 9);


