<?php
/**
Sukurti klasę su savybe - masyvu. Masyve asmenys, kurie aprasyti taip: vardas, sąskaita. Sukurti funkciją, kuri visiems Jonams suteiktų 100 EUR priedą Joninių proga. Pademonstruoti veikimą.
 */

class jon {
    public $z = [
        ['vardas' => 'Jonas', 'saskaita' => 0],
        ['vardas' => 'Antanas', 'saskaita' => 0],
        ['vardas' => 'Kazys', 'saskaita' => 0],
        ['vardas' => 'Jonas', 'saskaita' => 0],
        ['vardas' => 'Mykolas', 'saskaita' => 0],
        ['vardas' => 'Petras', 'saskaita' => 0],
        ['vardas' => 'Vaclovas', 'saskaita' => 0],
        ['vardas' => 'Mindaugas', 'saskaita' => 0],
        ['vardas' => 'Jonas', 'saskaita' => 0],
        ['vardas' => 'Tadas', 'saskaita' => 0]
    ];
    function premija(){
        for ($i=0; $i<count($this->z); $i++){
            if ($this->z[$i]['vardas'] == 'Jonas'){
                $this->z[$i]['saskaita'] +=100;
            }
        }
        return $this->z;
    }
}


$jon = new jon();
$jon->premija();
var_dump($jon);


//neveikia

/* $a=[
    ['vardas' => 'Jonas', 'saskaita' => 0],
    ['vardas' => 'Antanas', 'saskaita' => 0],
    ['vardas' => 'Kazys', 'saskaita' => 0],
    ['vardas' => 'Jonas', 'saskaita' => 0],
    ['vardas' => 'Mykolas', 'saskaita' => 0],
    ['vardas' => 'Petras', 'saskaita' => 0],
    ['vardas' => 'Vaclovas', 'saskaita' => 0],
    ['vardas' => 'Mindaugas', 'saskaita' => 0],
    ['vardas' => 'Jonas', 'saskaita' => 0],
    ['vardas' => 'Tadas', 'saskaita' => 0]
];

    for ($i=0; $i<count($a); $i++){
        if ($a[$i]['vardas'] == 'Jonas')
        { $a[$i]['saskaita'] += 100;}

}
var_dump($a); */ //sitas veikia



