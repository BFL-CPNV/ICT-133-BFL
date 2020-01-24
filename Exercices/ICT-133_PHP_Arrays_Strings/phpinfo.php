<?php
/**
 * ICT-133_PHP_Arrays_Strings - phpinfo.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 02.12.2019 13:44
 * Current version: 3.0
 * Description: Affiche un calendrier
 **/

echo '<head>';
echo '<title>phpinfo</title>';
echo '<link rel="stylesheet" type="text/css" href="CSS/phpinfo.css">';
echo '</head>';
echo '<body>';
$tblmois = array(
    "JANVIER", /*0*/
    "FÉVRIER", /*1*/
    "MARS", /*2*/
    "AVRIL", /*3*/
    "MAI", /*4*/
    "JUIN", /*5*/
    "JUILLET", /*6*/
    "AOÛT", /*7*/
    "SEPTEMBRE", /*8*/
    "OCTOBRE", /*9*/
    "NOVEMBRE", /*10*/
    "DÉCEMBRE" /*11*/
); /*Array has months in french*/
$currentMonth = date("n");
$currentYear = date("Y");
$tbljours = array(
    "Lundi" => 'Lun',
    "Mardi" => 'Mar',
    "Mercredi" => 'Mer',
    "Jeudi" => 'Jeu',
    "Vendredi" => 'Ven',
    "Samedi" => 'Sam',
    "Dimanche" => 'Dim'

); /*array has days names affiliated by classes*/

/**
 * Function creates page's header
 * @param $tblmois
 */
function showCurrentMonth($tblmois, $currentMonth, $currentYear)
{
    $monthDisplay = $currentMonth - 1; /*$monthDisplay represents the position in the array*/

    echo "<li>" . $tblmois[$monthDisplay] . "<br><span style='font-size:18px'>" . $currentYear . "</span></li>"; /*Echo the current month and the current year*/

    echo '</ul>';
} /*display month and associated year*/

/**
 * Function creates page's content
 * @param $tbljours
 * @param $currentMonth
 * @param $currentYear
 */
function createcontent($tbljours, $currentMonth, $currentYear)
{
    echo '<ul class="weekdays">';

    foreach ($tbljours as $element) {
        echo "<li>";
        echo $element;
        echo "</li>";
    } /*display the weekdays from an array*/

    echo '</ul>';

    echo '<ul class="days">';

    $day = date("j", mktime(0, 0, 0, $currentMonth, 1, $currentYear));
    $month = date("D", mktime(0, 0, 0, $currentMonth, $day, $currentYear));
    $delay = 1;

    $i = 0;
    switch ($month) {
        case "Mon":
            $delay = 1;
            break;
        case "Tue":
            $delay = 2;
            break;
        case "Wed":
            $delay = 3;
            break;
        case "Thu":
            $delay = 4;
            break;
        case "Fri":
            $delay = 5;
            break;
        case "Sat":
            $delay = 6;
            break;
        case "Sun":
            $delay = 7;
            break;
    }

    for ($k = 1; $k < $delay; $k++) {
        echo '<li><p></p></li>';
    }
    while ($i <= 4) {
        for ($j = 1; $j < 8; $j++) {

            if ($day == date("j") && $currentMonth == date("n")) {

                echo '<li class="active"><p class="active">';

                echo date("j", mktime(0, 0, 0, $currentMonth, $day, $currentYear));
                $day++;

                echo '</p></li>';
            } elseif (date("n", mktime(0, 0, 0, $currentMonth, $day, $currentYear)) == $currentMonth) {

                echo '<li><p>';

                echo date("j", mktime(0, 0, 0, $currentMonth, $day, $currentYear));
                $day++;

                echo '</p></li>';
            }
        }
        $i++;
    }

}  /*display days's name and days's number*/

echo '<div class="month">';
echo '<ul>';
echo '<li class="prev"><a href="previous">&#10094;</a></li>';
echo '<li class="next"><a href="next">&#10095;</a></li>';

showCurrentMonth($tblmois, $currentMonth, $currentYear);
echo '</div>';
createcontent($tbljours, $currentMonth, $currentYear);

echo '</body>';
?>


