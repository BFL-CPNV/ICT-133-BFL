<?php
/* Project  : CtoPHP
 * File     : Traduction_C_vers_PHP.php
 * Author   : bastien.fardel@cpnv.ch
 * Version  : 1.0
 * Part     : 1
 */

$value = 20;
$step = 3;

for ($i=0 ; $i<10 ; $i++)
{
    if ($value >= 30) {
        echo "le nombre vaut ".$value."<br>";
    } else {
        echo "nombre trop petit"."<br>";
    }

    $value += $step;
}
return 0;