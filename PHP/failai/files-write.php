<?php

$s = 'labas rytaSSSSSSSSSSS';

$o = fopen('write.txt', 'w');

fwrite($o, $s, strlen($s));

fclose($o);
echo 'ok';
