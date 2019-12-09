<?php
/**
* ICT-133_Dates_Fardel - Dates_Fardel.php
*
* Initial version by: Bastien.Fardel
* Initial version created on: 02.12.2019 09:32
* Current version: 1.2
* Description: Programme qui affiche des dates.
*/
    echo date("l d F Y")."<br>"; /*for instance : Saturday 17 November 2018*/
    echo date("M dS Y")."<br>"; /*for instance : Nov 17th 2018*/
    echo date("d/m/y h:i a")."<br>"; /*for instance : 17/11/18 11:45 pm*/
    echo date("d M Y, H:i:s")."<br>"; /*for instance : 17 Nov 2018, 23:43:47*/
    echo date("r")."<br>"; /*for instance : Sat, 17 Nov 2018 23:43:47 +0100*/

return 0;