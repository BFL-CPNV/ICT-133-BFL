<?php
/**
 * Snow - login.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 06.01.2020 09:20
 * Current version: 1.0
 * Description: The Login Page, sends its content to gabarit.php.
 */

// Flow Stamp stocked in memory
ob_start();
$titre = "Rent A Snow - Login";
?>

<style>
    .subtitle {
        font-weight: bold;
        font-size: 20px;
        color: rgb(218, 93, 0);
    }

    .incorrect {
        font-weight: bold;
        color: red;
    }

</style>

<br>
<div>
    <p class="subtitle">Login</p><br>
    <?=wrongPassword()?>

    <form action="index.php?action=home" method="post">
        <label for="Username">Username</label>
        <input type="text" placeholder="Enter Username" value="" name="Username">
        <label for="Password">Password</label>
        <input type="password" placeholder="Enter password" value="" name="Password"><br>
        <input type="submit" value="Connexion">
    </form>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
