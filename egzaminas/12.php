<?php
/**
Tarkime turime lentelę duomenų bazėje ‘Imonės’ su laukais ‘id, imone, imones_kodas,kliento_tipas, kliento_registravimo_data’. Parašykite SQL užklausą gauti visus duomenys apie 5 naujausias įmonęs.
 */

'select * from imones order by kliento_registravimo_data desc limit 5';
