<?php
/**
Panaudodami prieš tai sukurtą klasę person, sukurkite klases staff ir client, kurios paveldi person klasę. client klasę papildykite metodu “asmensDuomenys”, kuris išvestų suformatuotą eilutę “Vardas Pavardė (amžius)”. Staff klasėje perrašykite metodą asmensDuomenys, pakeisdami išvedamą eilutę į “Pavardė Vardas, darbuotojas”. Darbuotojas ‐ tiesiog paprastas žodis.
 */

class person {
    public $name, $surname, $age;

    function __construct($nam, $surn, $ag){
        $this->name = $nam;
        $this->surname = $surn;
        $this->age = $ag;
    }
    function asmensDuomenys(){
        $s = 'Vardas:  %s, Pavarde:  %s, Amzius: %s';
        echo sprintf($s, $this->name, $this->surname, $this->age);
    }
}

class client extends person{

    function asmensDuomenys()
    {
        $s = 'Vardas:  %s, Pavarde:  %s, Amzius: %s';
        echo sprintf($s, $this->name, $this->surname, $this->age);
    }
}


class staff extends person {

    function info(){
        $s = 'Pavarde:  %s, vardas:  %s, Darbuotojas.';
        echo sprintf($s, $this->surname, $this->name);
    }
}
