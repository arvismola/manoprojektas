<?php
/**
Sukurkite klasę prekė, kuri turi savybes: pavadinimas, kaina. Sukurkite klasę parduotuvė, su savybe prekės (masyvas). Sukurkite klasėje parduotuvė metodą tiekimas, kuris padeda prekę į savybę prekės kaip klasės prekė objekto egzempliorių. Sukurkite parduotuvės metodą atrinkti, kuris atrenka ir gražina prekes (klasės prekė objektų masyvą) pagal kainos intervalą: nuo min iki max. Pademonstruoti veikimą.
 */

class preke {
    public $pavadinimas, $kaina;
    function __construct($pav, $kain)
    {
        $this->pavadinimas = $pav;
        $this->kaina = $kain;
    }
}

class parduotuve {
    public $prekes = [];
    function tiekimas($pav, $kain){
        $this->prekes[] = new preke($pav, $kain);
    }
    function atrinkti(){
        $s = $this->prekes;
        for ($i=0; $i<count($this->prekes); $i++){
            $s[$i] = asort($s);
        }
        return $s;
    }
}

$testas = new parduotuve();
$testas->tiekimas('batonas', 0.60);
$testas->tiekimas('kava', 4.50);
$testas->tiekimas('alus', 1.00);
$testas->tiekimas('mesa', 6.00);
$testas->tiekimas('traskuciai', 0.89);
$testas->atrinkti();
var_dump($testas);


