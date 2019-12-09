<!--
 ICT-133_PHP_Arrays_Strings - phpinfo.php

 Initial version by: Bastien.Fardel
 Initial version created on: 02.12.2019 13:44
 Current version: 2.0
 Description: Affiche un calendrier
-->
<head>
    <title>phpinfo</title>
    <link rel="stylesheet" type="text/css" href="CSS/phpinfo.css">
</head>
<body>
    <div class="month">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <?php
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

            $mois_actuel = date("n") - 1; /*$mois_actuel represents the position in the array*/

            echo "<li>".$tblmois[$mois_actuel]."<br><span style='font-size:18px'>".date("Y")."</span></li>"; /*Echo the current month and the current year*/
            ?>
        </ul>
    </div> <!-- display month and associated year -->

    <ul class="weekdays">
        <?php
        $tbljours = array(
            "Lundi" => 'Lun',
            "Mardi" => 'Mar',
            "Mercredi" => 'Mer',
            "Jeudi" => 'Jeu',
            "Vendredi" => 'Ven',
            "Samedi" => 'Sam',
            "Dimanche" => 'Dim'

        ); /*array has days names affiliated by classes*/

        $nbdays = date("t"); /*number of days in the month*/

        foreach ($tbljours as $element){
            echo "<li>";
            echo $element;
            echo "</li>";
        }
        ?>
    </ul> <!-- display the weekdays from an array -->

    <ul class="days">
        <?php
        for($days = 1; $days <= $nbdays; $days++){
            if($days == date("j")){
                echo "<li><span class='active'>".$days."</span></li>";
            } /*if $days is equal to the current day from the date function, mark number as active*/
            else{
                echo "<li>".$days."</li>";
            } /*if $days not equal to the current day from function date then simply display the number without marking it*/
        }
        ?>
</ul> <!-- display the days numbers as well as marking the current day -->
</body>

