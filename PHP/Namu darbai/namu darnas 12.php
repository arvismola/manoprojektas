<?php
/**
Sukurti skriptą, kuris surastu visus pirminius skaičius ("A prime number (or a prime) is a natural number greater than 1 that cannot be formed by multiplying two smaller natural numbers" - https://en.wikipedia.org/wiki/Prime_number) nurodytame skaičių intervale nuo iki.
 */

class skaiciai {
    static function tikrinti($sk){
        $pirminis = true;
        for ($i=2; $i<$sk-1; $i++){
            if($sk % $i == 0){
                $pirminis = false;
            }
        }
        return $pirminis;
    }
   static function pirminiai($from, $to){
       $m = [];
       for ($i=$from; $i<=$to; $i++){
           if(skaiciai::tikrinti($i)) $m[] = $i;  ///arba galima kreiptis so tagu self::
       }
       return $m;
   }
}
var_dump(skaiciai::pirminiai(10,20));










function prime($a, $b){

}
