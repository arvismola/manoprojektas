<?php



$x = 5;

$s = 'Laba$xs';
$o = "Ry\"ta($x)s";


echo $s . ' ' .$o;
echo '<br>';

$str = <<<EOT
dfgjmdfl;gk  gjdlkg jdfgkldf jglfdgj dfgjdfglfdgdflgkdfgdfgdfgjmdflkg
gdfgfdlkgdfklgdfgldf
gdfgjmdflkgdfkgld
fgkjglkdfgjdflk;g
EOT;

echo $str;
echo '<br>';

echo strlen($str);
echo '<br>';
$s ="Labas rytas stai ir as";
$m = explode(' ', $s);
var_dump($m);
echo '<br>';

shuffle($m);
$s = implode(' ', $m);
echo $s;