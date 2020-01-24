<?php
/**
 * Snow - controller.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 16.12.2019 14:42
 * Current version: 3.0
 * Description: Acts as the Controller and contains functions to use in order to call the appropriate group suchs as view or model.
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
    if (checkLogin()) {
        if (isset($_POST['Username'])) {
            $_SESSION['User'] = $_POST['Username'];
            $_SESSION['TF'] = 0;
            require "view/home.php";
        }
    } else {
        $_GET['action'] = "login";
        require "view/login.php";
    }
}

/**
 * Function to redirect the user to the products page
 */
function products()
{
    $_GET['action'] = "products";
    require "view/products.php";
}

/**
 * Function shows error message if password's incorrect
 */
function wrongPassword()
{
    if (isset($_SESSION['TF'])) {
        if ($_SESSION['TF'] == 1) {
            echo "<p class='incorrect'>Erreur de mot de passe</p>";
            $_SESSION['TF'] = 0;
        }
    }
}
