<?php
/**
Sukurti klasę auto, kurioje yra savybės: gamintojas, modelis, metai. Konstruktoriaus pagalba automobilio gamintoją, modelį ir metus patalpinti į klasės savybes. Sukurti metodą info, kurio pagalba būtų galima išvesti pvz.: Gamintojas: Honda, modelis: Civic, metai: 2005. Išvedimui naudoti šabloną. Pademonstruoti veikimą.
 */

class auto
{
    public $gamintojas, $modelis, $metai;

    function __construct($gam, $mod, $met)
    {
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
    }
        function info()
        {
            $s = 'Gamintojas: %s, Modelis: %s, Metai: %s';
            echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
        }
}
$o = new auto('Honda', 'Civic', 2005);
$o->info();

//veikia