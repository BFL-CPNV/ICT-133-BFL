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
    if ($value >= 30) { /*if $value is bigger or equal to 30 then display number's value*/
        echo "le nombre vaut " . $value . "<br>";
    } else {
        echo "nombre trop petit" . "<br>";
    } /*else display a message saying number is too low*/
    $value += $step; /*adds $step's value to $value*/
    $i++;
} /*display the value of the number and inform the user if it is too low*/
return 0;
