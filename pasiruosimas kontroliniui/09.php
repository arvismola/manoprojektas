<?php
/**
Panaudodami prieš tai sukurtą klasę kursai, sukurkite klases backend ir frontend, kurios paveldi kursai klasę. Kursai klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Pavadinimas, lygis (mokinių skaičius)”. backend klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Pavadinimas, lygis (mokinių skaičius) - backend”. backend - tiesiog paprastas žodis.
 */

class kursai {
    public $pavadinimas, $lygis, $skacius;

    function __construct($pav, $lyg, $sk){
        $this->pavadinimas = $pav;
        $this->lygis = $lyg;
        $this->skaicius = $sk;
    }
    function info(){
            $s = 'Pavadinimas:  %s, Lygis:  %s, Mokiniu skaicius: %s';
            echo sprintf($s, $this->pavadinimas, $this->lygis, $this->skaicius);
    }
}

class backend extends kursai {

    function info(){
        $s = 'Pavadinimas:  %s, Lygis:  %s, Mokiniu skaicius - backend: %s';
        echo sprintf($s, $this->pavadinimas, $this->lygis, $this->skaicius);
    }
}