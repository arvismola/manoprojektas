<?php

class a{
    public $x = 5;
    // final function fnc(){ draudzia paveldejima bet tik funkcijos
    function fnc(){
        echo 'labas';
    }
    //  private $u = 15; privati savybe
    protected $u = 15; // savybe privati bet paveldima
}

$o = new a(); var_dump($o);
echo '<br>';

class b extends a{
    public $x = 10;
    public $y = 10;
    function fnc(){
        echo 'rytas';
    }
    function printu(){
        print($this->u);
    }
}

$e = new b(); var_dump($e);
echo '<br>';
$e->printu();   // neveiks nes savybe yra private TAGAS
echo '<br>';