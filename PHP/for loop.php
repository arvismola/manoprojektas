<?php

$m = [1,3,5,8,10,10,55];
$s = 0;
for ($i=0; $i < count($m); $i++){  // $i yra indeksas kuris privalo buti
    $s += $m[$i];
};
echo round($s / count($m), 2); echo '<br>';




