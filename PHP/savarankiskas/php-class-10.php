<?php
/**
Sukurti klase su savybe: masyvu. Sukurti metoda, kurio pagalba butu galima patalpinti skaiciu i klases savybe - masyva. Sukurti metoda, kuris grazintu visu masyvo skaiciu suma.
 * Sukurti kita klase, kuri paveldetu pirma klase ir joje perrasyti metoda, kuris grazintu nelyginiu skaiciu suma.
 * Sukurti trecia klase, kuri paveldetu pirma klase ir perrasyti metoda, kuris grazintu visu lyginiu skaiciu suma. pademostruoti veikima.
 */

class pirmas {
    public $m=[];
    function ideti($skaicius) {
        $this->m[] = $skaicius;
    }
    function info(){
        $s=0;
        foreach ($this->m as $x) {
                $s += $x;
        }
        return $s;
    }
}

$vienas = new pirmas();
$vienas->ideti(15);
$vienas->ideti(5);
$vienas->ideti(70);
$vienas->ideti(35);
$vienas->ideti(10);
var_dump($vienas);
echo $vienas->info();
echo '<br>';

class antras extends pirmas {
    function info(){
        $s=0;
        foreach ($this->m as $x) {
            if ($x%2 == 1){
                $s += $x;
            }
        }
        return $s;
    }

}
$du = new antras();
$du->ideti(15);
$du->ideti(5);
$du->ideti(70);
$du->ideti(35);
$du->ideti(10);
var_dump($du);
echo $du->info();
echo '<br>';

class trecias extends pirmas {
    function info(){
        $s=0;
        foreach ($this->m as $x) {
            if ($x%2 == 0){
                $s += $x;
            }
        }
        return $s;
    }

}
$trys = new trecias();
$trys->ideti(15);
$trys->ideti(5);
$trys->ideti(70);
$trys->ideti(35);
$trys->ideti(10);
var_dump($trys);
echo $trys->info();
echo '<br>';