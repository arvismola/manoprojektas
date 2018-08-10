<?php

$m = [1,3,5,8,10,10,55];
$s = 0;

$i = 0;
while($i < count($m)){     // sitame kaip ir for bet salygomis reikia pasirupinti paciam
    $s += $m[$i];
    $i++;
    }

echo round($s / count($m), 2); echo '<br>';

$i = 0;     //////////// pradzioje kodas paskui tikrinasi ir vykdo
$s = 0;
do {
    $s += $m[$i];
    $i++;
}
while($i < count($m));
echo round($s / count($m), 2); echo '<br>';



