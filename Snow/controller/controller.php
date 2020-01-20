<?php
/**
 * Snow - controller.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 16.12.2019 14:42
 * Current version: 2.0
 * Description: Contains functions to use in order to call the appropriate group suchs as view or model.
 */
session_start();


require "model/model.php";

/**
 * Function to redirect the user to the home page
 */
function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

/**
 * Function to redirect the user to the login page
 */
function login()
{
    $_GET['action'] = "login";
    if (checkLogin()) {
        if (isset($_POST['Username'])) {
            $_SESSION['User'] = $_POST['Username'];
            $_SESSION['TF'] = 0;
            require "view/login.php";
        }
    } else {
        $_SESSION['TF'] = 1;
        require "view/login.php";
    }
}


function wrongPassword()
{
    if (isset($_SESSION['TF'])) {
        if ($_SESSION['TF'] == 1) {
            echo "<p class='error'>Le mot de passe est incorrect.</p>";
        }
    }
}
