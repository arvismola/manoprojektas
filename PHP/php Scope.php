<?php

$a = 5;
global $x;
$x = 5;

function x(){
    // echo $a; klaida
    global $x;
    echo $x;
}

x();

echo '<br>';

function inc(){
    $x = 1;
    $x++;
    echo $x . '<br>';
}



inc(); inc(); inc();

echo '<br>';

function inc2(){
    static $x = 1;
    $x++;
    echo $x . '<br>';
}


inc2(); inc2(); inc2();