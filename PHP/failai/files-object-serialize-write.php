<?php
$o = new stdclass();
$o->a = 'abc';
$o->b = 'def';

file_put_contents('object-serialize.txt', serialize($o));
echo 'ok';

