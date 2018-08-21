<?php
/**
Yra sąrašas automobilių, kur automobilis yra aprašytas tekstu, kur jo duomenys atskirti kableliais, pvz.: "Honda,Civic,2012,1000". Iš šio sąrašo sukurti naują sąrašą, kuriame automobilis būtų aprašytas asociatyviniu masyvu: gamintojas, modelis, metai, kaina.
 */

echo '<ol>';
echo '<li>' . "Honda,Civic,2012,1000" . '</li>';

function masinos($mas){
    $defaults = [
        'gamintojas' => 'nepasirinkta',
        'modelis' => 'nepasirinkta',
        'metai' => 0,
        'kaina'=> 0
    ];
    $m = [];
    $options = array_merge($defaults, $mas);
    for ($i=0; $i<$options['n']; $i++){
        $m[] = ($options['start'], $options['stop']);
    }
    return $m;
}


