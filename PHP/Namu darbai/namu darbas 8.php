<?php
/**
Yra sąrašas automobilių, kur automobilis yra aprašytas tekstu, kur jo duomenys atskirti kableliais, pvz.: "Honda,Civic,2012,1000". Iš šio sąrašo sukurti naują sąrašą, kuriame automobilis būtų aprašytas asociatyviniu masyvu: gamintojas, modelis, metai, kaina.
 */

$m=['honda,civic,2010,3000'];
$s=[];

foreach ($m as $masina) {
  $x=explode(',', $masina);
  $s[]=['gamintojas'=>$x[0], 'modelis' => $x[1], 'metai' => $x[2], 'kaina' => $x[3],
  ];
}
var_dump($s);