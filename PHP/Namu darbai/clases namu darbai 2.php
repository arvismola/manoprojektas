<?php
/**
Sukurti klase. Klaseje turi buti savybe - automobiliu masyvas: Gamintojas, modelis, metai, kaina.
 * Sukurti funkcija kuri paskaiciuotu kainos vidurki, ir grazintu atgal.
 */

Class masinos {
    public $m = [
        ['gamintojas' => 'Honda', 'modelis' => 'Civic', 'metai' => 2005, 'kaina' => 1500],
        ['gamintojas' => 'Audi', 'modelis' => 100, 'metai' => 1900, 'kaina' => 300],
        ['gamintojas' => 'Saab', 'modelis' => 93, 'metai' => 2003, 'kaina' => 2500],
        ['gamintojas' => 'BMW', 'modelis' => 'E46', 'metai' => 2002, 'kaina' => 2000],
        ['gamintojas' => 'Seat', 'modelis' => 'Ibiza', 'metai' => 2010, 'kaina' => 7000],
        ['gamintojas' => 'Subaru', 'modelis' => 'Impreza', 'metai' => 1999, 'kaina' => 1800],
    ];
    function vidurkis(){
        $s=0;
        foreach ($this->m as $cars) {
            $s += $cars['kaina'];
        }
        return $s / count($this->m);
    }
}
$obj = new masinos();
echo $obj->vidurkis();