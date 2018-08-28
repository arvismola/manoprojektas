<?php
/**
 Sukurti klase SVECIAS su savybemis: vardas, patiekalas.
 * Sukurti konstruktoriu kuris patalpintu varda ir patiekala i savybes.
 * sukurti metoda info INFO kuris isvestu pvz SVECIAS: JONAS, PATIEKALAS: MESA.
 * pademonstruoti veikima.
 * Sukurti klase VIP kuri paveldetu klase SVECIAS. Klaseje VIP perrasyti metoda info taip kad isvestu pvz VIP SVECIAS: JONAS, PATIEKALAS: MESA.
 * Pademonstruoti veikima.
 */

class svecias {
    public $vardas, $patiekalas;
    function __construct($v, $p){
        $this->vardas = $v;
        $this->patiekalas =$p;
    }
    function info()
    {
        $s = 'Svecias: %s, Patiekalas: %s';
        echo sprintf($s, $this->vardas, $this->patiekalas);
    }
}
$o = new svecias('Jonas', 'Mesa');
var_dump($o);
$o->info();
echo '<br>';

class vip_svecias extends svecias {
    function info()
    {
        $s = 'VIP svecias: %s, Patiekalas: %s';
        echo sprintf($s, $this->vardas, $this->patiekalas);
    }
}
$o = new vip_svecias('Antanas', 'Kebabas');
var_dump($o);
$o->info();
echo '<br>';