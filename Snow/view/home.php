<?php
/**
 * Snow - home.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 16.12.2019 14:50
 * Current version: 1.0
 * Description: The Home page, sends its content to the gabarit.php.
 */

// Flow Stamp stocked in memory
ob_start();
$titre = "Rent A Snow - Accueil";
?>
    <style>
        * {
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        /* Month header */
        .month {
            padding: 70px 25px;
            width: 100%;
            background: #9c4600;
            text-align: center;
        }

        /* Month list */
        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        /* Previous button inside month header */
        .month .prev {
            float: left;
            padding-top: 10px;
            color: white;
        }

        /* Next button */
        .month .next {
            float: right;
            padding-top: 10px;
            color: white;
        }

        /* Weekdays (Mon-Sun) */
        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        /* Days (1-31) */
        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size: 12px;
            color: #777;
        }

        /* Highlight the "current" day */
        .days li .active {
            padding: 5px;
            background: #9d4302;
            color: white !important
        }

        a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
        }

        a:hover {
            color: #dddddd;
        }
    </style>

    <div class="row-fluid"> <!-- Le Slider -->
        <div class="span12">

            <div id="headerSeparator"></div>

            <div class="camera_full_width">
                <div id="camera_wrap">
                    <div data-src="view/content/slider-images/2.jpg">
                        <div class="camera_caption fadeFromBottom cap2">
                            <?= welcomeUser() ?>
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/4.jpg">
                        <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à
                            disposition.
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/1.jpg">
                        <div class="camera_caption fadeFromBottom cap3">Découvrez des paysages fabuleux avec des
                            sensations.
                        </div>
                    </div>
                </div>
                <br style="clear:both"/>
                <div style="margin-bottom:40px"></div>
            </div>

            <div id="headerSeparator2"></div>
        </div>
    </div>

    <div class="span12" id="divMain">
        <h1>Nos activités</h1>

        <p><strong>Rent A Snow</strong> est spécialisée dans la location de snows. Nous avons tout types de
            modèles :
        <ul>
            <li>des plus récents au plus anciens,
            <li>pour débutants ou confirmés,
            <li>pour de la piste ou du hors-piste
        </ul>
        La location peut se faire au jour, à la semaine, au mois ou à la saison.
        </p>
        <p>
            Nous proposons aussi des cours privés ou en petits groupe (4 personnes maximum) pour tous les
            niveaux avec des moniteurs certifiés par l'école suisse de snowboard au prix de 60.- /heure.
        </p>

        <br/>
        <br/>

        <div class="row-fluid">
            <div class="span3">
                <div class="box">
                    <i class="icon-wrench"></i>
                    <h4 class="title">Entretien</h4>
                    <hr/>
                    <p>
                        Le matériel est toujours contrôlé avant d'être mis à disposition des clients. A
                        chaque fois que vous louerez un snow, vous pouvez partir surfer tranquille.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-leaf"></i>
                    <h4 class="title">Environnement</h4>
                    <hr/>
                    <p>
                        Nous veillons à respecter l'environnement en utilisant au maximum du matériel
                        recyclable et en prenant de consommer un minimum d'énergie lors de nos activités au
                        magasin,
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-edit"></i>
                    <h4 class="title">Contrat</h4>
                    <hr/>
                    <p>
                        Un contrat sera signé à chaque location. D'autre part nous travaillons en étroite
                        collaboration avec la Rega et garantissons des conditions de sauvetage optimales.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-signal"></i>
                    <h4 class="title">Signal</h4>
                    <hr/>
                    <p>
                        Pour ceux qui aiments les sensations forte, nous louons du matériel de protection
                        d'avalanches.
                    </p>
                </div>
            </div>
        </div>

        <!-- Insert Calender Start -->
        <?php
        /**
         * Inserted Calender code from ICT-133_PHP_Arrays_Strings
         *
         * Initial version by: Bastien.Fardel
         * Initial version created on: 02.12.2019 13:44
         * Current version: 3.0
         * Description: Affiche un calendrier
         **/
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
        ?>
        <!-- Insert calender end -->
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
