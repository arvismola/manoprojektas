<?php
/**
 Yra duotas masyvas su tekstais kur reikiama teksto dalis yra apreminta zenklais ^ ir $. Viename tekste yra viena tokia teksto dalis ir nesikartoja. Surasti visas tas teksto dalis, iskirpti ir sudeti i nauja masyva.
 */

$m= ['ggdfdg^labas$gvdfgdf',
    'fjghjhg^rytas$vdvssv',
    'dsfdvvvvvsd^stai$bvfbcvbn',
    'xddfhs^ir$dvdfbs',
    'kjhgf^as$qwertyu'];

//padaryti namie, reikia keliu kintamuju ir rasti pozicijas simboliu( skaiciais ) ir paskui iskirpti su substr.