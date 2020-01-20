<?php
/**
 * Snow - model.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 13.01.2020 14:05
 * Current version: 1.0
 * Description:
 */

/**
 * Checks the login provided from login.php by the user and return a true or false statement.
 */
function checkLogin(){
    if(isset($_POST['Password'])){
        $Input = $_POST['Password'];

        if ($Input === "1234"){
            return true;
        }
        else {
            return false;
        }
    }
}