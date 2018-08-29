<?php
/**
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “kursas”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes. Sukurkite klases pirmas ir antras, kurios paveldi kursas klasę. kursas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. pirmas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (pirmas kursas)”. pirmas kursas ‐ tiesiog paprastas žodis. antras klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (antras kursas)”. antras kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
 */

class kursas {
    public $data, $skaicius, $auditorija;
    function __construct($dat, $sk, $audit)
    {
        $this->data = $dat;
        $this->skaicius = $sk;
        $this->auditorija = $audit;
    }
    function info(){
        $s = 'Data: %s, Skaicius: %s, auditorija: %s';
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
}
 class pirmas extends kursas {
    function info(){
        $s = 'Data: %s, Skaicius: %s, pirmas kursas: %s';
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
    }
 }

 class antras extends kursas {
     function info(){
         $s = 'Data: %s, Skaicius: %s, antras kursas: %s';
         echo sprintf($s, $this->data, $this->skaicius, $this->auditorija);
     }
 }
$kurs = new kursas('testas', 'testas', 'testas');
$kurs->info();
echo '<br>';
 $vienas = new pirmas('Rugpjucio 30', 3, 3);
$vienas->info();
echo '<br>';
$antras = new antras('Rugsejo 1', 3, 3);
$antras->info();