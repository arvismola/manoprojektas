<?php

class a {
    public $mas = [];
    function gen(){
        for ($i=0; $i<5; $i++){
            for ($j=0; $j<5; $j++){
                $this->mas[$i][$j] = rand(1,100);
            }
        }
    }
    function lent(){
        echo '<table>';
        for ($i=0;$i<5;$i++){
            echo '<tr>';
            for ($j=0;$j<5;$j++){
                echo '<td>' . $this->mas[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

    }
}

$o = new a();
$o->gen();
$o->lent();

