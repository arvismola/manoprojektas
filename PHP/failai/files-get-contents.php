<?php

$s = file_get_contents('write.txt');
echo $s . '<br>';

$s = file_put_contents('write.txt', $s . ' priedas is file put contents ');
echo 'ok';



$page = file_get_contents('http://www.delfi.lt');
$s = file_put_contents('delfi.txt', $page);

