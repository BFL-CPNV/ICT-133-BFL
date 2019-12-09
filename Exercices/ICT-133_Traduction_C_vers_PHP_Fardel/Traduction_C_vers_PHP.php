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
    if ($value >= 30) { /*if $value is bigger or equal to 30 then display its value*/
        echo "le nombre vaut ".$value."<br>";
    } else {
        echo "nombre trop petit"."<br>";
    } /*if $value is smaller than 30 then display a message saying it is too low*/

    $value += $step;
} /*display message giving the value of the number if it isn't too low*/
return 0;