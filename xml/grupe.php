<?php

// $xml=simplexml_load_file("grupe.xml");     tiesiogiai
$s = file_get_contents('grupe.xml');  // tas pats tik per daugiau komandu bet naudojamas kai info nuskaitoma ne is vieno saltinio arba netiesiogiai uzkraunama
$xml = simplexml_load_string($s);
print_r($xml);

echo 'grupe: ' . $xml->pavadinimas; echo '<br>';
echo 'grupe: ' . $xml->destytojas; echo '<br>';

$x = $xml->xpath('mokiniai/mokinys');
var_dump($x); echo '<br>';
echo '<ol>';
foreach ($x as $mokinys){
    echo '<li>' . $mokinys->vardas .', mokinio id:  ' . $mokinys['id'] . '</li>';
}
echo '</ol>'; echo '<br>';

$x = $xml->xpath("mokiniai/mokinys[apranga='sviesi']"); // paprasta paieska
var_dump($x); echo '<br>';
$x = $xml->xpath("mokiniai/mokinys[@id='arv']");  // paieska naudojant id
var_dump($x); echo '<br>';



