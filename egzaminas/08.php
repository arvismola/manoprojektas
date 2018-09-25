<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “person”, kuri turi savybes ‐ name, surname,
age. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ name, surname ir age ‐ perduotus parametrus padėtų į savo savybes.
 */

class person {
    public $name, $surname, $age;

    function __construct($nam, $surn, $ag){
        $this->name = $nam;
        $this->surname = $surn;
        $this->age = $ag;
    }
}