<?php
/**
Sukurti klasę auto, kurioje yra savybės: gamintojas, modelis, metai. Konstruktoriaus pagalba automobilio gamintoją, modelį ir metus patalpinti į klasės savybes. Sukurti metodą info, kurio pagalba būtų galima išvesti pvz.: Gamintojas: Honda, modelis: Civic, metai: 2005. Išvedimui naudoti šabloną. Pademonstruoti veikimą.
 */

class auto {
    public $automobilis = [];
    function __construct($gam, $mod, $metai){
        $this->automobilis = [
            'gamintojas' => $gam,
            'modelis' => $mod,
            'metai' => $metai,
        ];
    }
    function info(){
        $s = "Gamintojas: %s, modelis:  %s, metai: %s";
        echo sprintf($s, $this->automobilis['gamintojas'],$this->automobilis['modelis'],$this->automobilis['metai']);
    }
}
$o = new auto('Honda', 'Civic', 2005);
var_dump($o);
$o->info();

//veikia