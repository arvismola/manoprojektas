<?php
/**
Sukurti klase AUTO su savybemis: gamintojas, modelis, metai, kaina. Sukurti konstruktoriu kurio pagalba butu galima uzpildyti savybes. Sukurti kita klase TURGUS su savybe MASINOS. Sukurti antrai klasei metoda, kurio pagalba butu galima perduoti automobilio duomenis, sukurti pagal siuos duomenis pirmos klases egzemplioriu ir patalpinti tai i savybe MASINOS.
 * Sukurti antrai klasei metoda VIDURKIS, kuris paskaiciuotu TURGUJE esanciu masinu vidutine verte ir grazintu. Pademonstruoti veikima.
 */

class auto {
    public $gamintojas, $modelis, $metai, $kaina;

    function __construct($gam, $mod, $met, $kain)
    {
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
        $this->kaina = $kain;
    }
}

class turgus {
    public $masinos = [];

    function ideti($ga, $mo, $me, $kai){
      $this->masinos[] = new auto($ga, $mo, $me, $kai);
    }
    function vidurkis(){
        $s=0;
        foreach ($this->masinos as $masina){
            $s += $masina->kaina;
        }
        return $s / count($this->masinos);
    }
}

$o = new turgus();
$o->ideti('Honda', 'Civic', 2001, 1500);
$o->ideti('BMW', 'E46', 2003, 2500);
$o->ideti('Audi', 100, 1990, 300);
$o->ideti('VW', 'Jeta', 2001, 2500);
$o->ideti('Saab', 93, 2003, 2300);

$vidurkis = $o->vidurkis();
echo $vidurkis;
echo '<br>';
var_dump($o);