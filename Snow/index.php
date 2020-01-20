<?php
/**
 * Snow - index.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 16.12.2019 14:23
 * Current version: 1.0
 * Description:
 */

require "controller/controller.php";

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login();
            break;
        default :
            home();
    }
}
else {
    home();
}