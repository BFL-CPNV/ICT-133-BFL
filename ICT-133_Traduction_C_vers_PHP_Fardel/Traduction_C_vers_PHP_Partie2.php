<?php
/* Project  : CtoPHP
 * File     : Traduction_C_vers_PHP_Partie2.php
 * Author   : bastien.fardel@cpnv.ch
 * Version  : 1.0
 * Part     : 2
 */

$value = 20;
$step = 3;
$i = 0;

while ($i < 10) {
    if ($value >= 30) {
        echo "le nombre vaut " . $value . "<br>";
    } else {
        echo "nombre trop petit" . "<br>";
    }
    $value += $step;
    $i++;
}
return 0;
