<?php
/**
Sukurti klase su konstruktoriumi, kuris turi parametra - atsitiktiniu skaiciu kiekis. Konstruktorius turi sugeneruoti atsitiktinius skaicius savybeje (masyve). Sukurti funkcija kuri paskaiciuotu skaiciu vidurki ir ji grazintu. Pademonstruoti veikima.
 */

class cons {
    public $m=[];
    function __construct($skaicius) {
        for ($i=0; $i<$skaicius; $i++) {
            $this->m[] = rand(1,100);
        }
    }
    function vidurkis() {
        $s=0;
        foreach ($this->m as $x) {
            $s += $x;
        }
        return $s / count($this->m);
    }
}

$fignia = new cons(5);
var_dump($fignia);
