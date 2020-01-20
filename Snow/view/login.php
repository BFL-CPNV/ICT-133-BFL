<?php
/**
 * Snow - login.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 06.01.2020 09:20
 * Current version: 1.0
 * Description:
 */

// Flow Stamp stocked in memory
ob_start();
$titre = "Rent A Snow - Login";
?>

<style>
    .subtitle {
        font-weight: bold;
        font-size: 20px;
    }


</style>

<br>
<div>
    <p class="subtitle">Login</p><br>
    <?=WrongPassword()?>

    <form action="index.php?action=login" method="post">
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
