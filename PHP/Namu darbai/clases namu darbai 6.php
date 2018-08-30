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
    function atrinkti($min, $max){
        $s = [];
        foreach ($this->prekes as $preke){
            if ($preke->kaina >= $min and $preke->kaina <= $max){
                $s[] = $preke;}
            return $s;}
    }
}
$testas = new parduotuve();
$testas->tiekimas('batonas', 1);
$testas->tiekimas('kava', 4);
$testas->tiekimas('alus', 2);
$testas->tiekimas('mesa', 6);
$testas->tiekimas('traskuciai', 10);
$testas->atrinkti(1,4);
var_dump($testas);
$o = $testas->atrinkti(1,4);
echo '<br>';
var_dump($o);


