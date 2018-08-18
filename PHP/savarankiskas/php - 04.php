<?php
/**
Yra duotas tekstu masyvas. Isvesti visus tekstus, kurie prasideda simboliais 'a' arba 'b'
 */

$m = ['as', 'tu', 'batonas', 'bebras', 'pienas', 'kava', 'arbuzas'];

function sub($a)
{
    return substr($a, 0, 1) == 'a' or substr($a, 0, 1) == 'b';

}

for ($i=0; $i<count($m); $i++) {
    if (sub($m[$i])) {
        echo $m[$i] . '<br>';
    }
}
