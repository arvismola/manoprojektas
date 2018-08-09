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
echo md5('labas rytas stai ir as');
echo '<br>';
echo uniqid();
echo '<br>';

$s = "%s yra labai geras %s modelis, kurio kaina yra %s";
echo sprintf($s, "Passat", "VW", 2000);
echo '<br>';

printf($s, "Passat", "VW", 2000);
echo '<br>';

$s = ("                    Labas rytas                          ");
echo "*" . $s . "*";
echo '<br>';
echo "*" . trim($s) . "*"; // nuima tarpus
echo '<br>';

echo strcmp("abc", "abd");  // sulygina du tekstus pagal spec parametrus.
echo '<br>';

echo strpos("Labas rytas", "ry"); // parodo teksto eile pagal pasirinkta zodi ar raides.
echo '<br>';

echo strtoupper("labas rytas");  // pakeicia teiksta didziosiom raidem
echo '<br>';

echo strtolower("labas rytas");  // pakeicia teiksta mazosiom raidem
echo '<br>';

echo ucfirst(strtolower("lABas rYTAs")); // pirmas zodis is didziosiod gaunasi o lower sutaise klaidas kad viskas butu is mazosios toliau
echo '<br>';

echo ucwords(strtolower("lABas rYTAs")); // tas tik paraso visus zodzius is didziosios.
echo '<br>';

$s = "<b><u>Labas rytas</u></b>";
echo $s;
echo '<br>';

$x = htmlspecialchars($s);  // panaikina kitu kalbu tagus kad nesusijauktu puslapis.
    echo $x;
echo '<br>';

echo htmlspecialchars_decode($x); // atstato tagus atgal.
echo '<br>';

$s = "Labas rytas";
echo substr($s, 6, 3);  // i6kerpa teksto gabala
echo '<br>';



















