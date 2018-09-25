<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */

class numberlist {
    public $numbers;

    function add($skaicius){
        $this->numbers[] = $skaicius;
    }
    function average(){
        $s=0;
        for($i=0; $i<count($this->numbers); $i++){
            $s += $this->numbers[$i];
        }
        return $s / count($this->numbers);
    }
}

$testas = new numberlist();
$testas->add(2);
$testas->add(3);
$testas->add(4);
echo $testas->average();


