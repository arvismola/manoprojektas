<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “kursai”, kuri turi savybes - pavadinimas, lygis, mokinių skaičius. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris pavadinimas -  pavadinimas, lygis, mokinių skaičius skaičius - perduotus parametrus padėtų į savo savybes.
 */

class kursai {
   public $pavadinimas, $lygis, $skacius;

   function __construct($pav, $lyg, $sk){
       $this->pavadinimas = $pav;
       $this->lygis = $lyg;
       $this->skaicius = $sk;
   }
}