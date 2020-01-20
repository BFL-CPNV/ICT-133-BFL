<?php
/**
 * Snow - index.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 16.12.2019 14:23
 * Current version: 2.0
 * Description: Acts as the Router, calls the controller and transmits the info to it.
 */

require "controller/controller.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login();
            break;
        case 'products' :
            products();
            break;
        default :
            home();
    }
} else {
    home();
}