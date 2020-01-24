<?php
/**
 * Snow - model.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 13.01.2020 14:05
 * Current version: 2.0
 * Description: Acts as the model, communicates with databases.
 */

/**
 * Checks the login provided from login.php by the user and return a true or false statement.
 */
function checkLogin()
{
    if (isset($_POST['Password'])) {
        $Input = $_POST['Password'];

        if ($Input === "1234") {
            return true;
        } else {
            if ($Input === "") {
                return false;
            } else {
                $_SESSION['TF'] = 1;
                return false;
            }
        }
    }
}

/**
 * Function welcomes connected user with adapted greeting form or displays
 * the standard welcome if not connected to avoid errors
 */
function welcomeUser()
{
    if (isset($_POST['Username'])) {
        $time = date("H");

        if ($time >= 7 && $time < 14) {
            echo "Bonjour " . $_POST['Username'];
        }

        if ($time >= 14 && $time < 19) {
            echo "Bon après-midi " . $_POST['Username'];
        }

        if ($time >= 19 && $time < 23) {
            echo "Bonsoir " . $_POST['Username'];
        }

        if ($time < 7 && $time >= 23) {
            echo "Bonne nuit " . $_POST['Username'];
        }
    } else {
        echo "Bienvenue sur Rent A Snow !";
    }
}

/**
 * Function reads from json file to create content to show on page
 */
function productsRead()
{
    //Gets the contents of the JSON file
    $productsJsonContents = file_get_contents("view/content/json/products.json");
    // Convert to array
    $productsArray = json_decode($productsJsonContents, true);

    echo '<table width="100%">';
    foreach ($productsArray as $row) {
        echo '<div class="product">' .
            '<h1>Item # : ' . $row["tag"] . '</h1>' .
            '<p class="price">Price : ' . $row["price"] . '</p>' .
            '<p>Brand : ' . $row["brand"] . '</p>' .
            '<p>Model : ' . $row["model"] . '</p>' .
            '<p>Class : ' . $row["class"] . '</p>' .
            '<p>Stock : ' . $row["stock"] . '</p>' .
            '<p><button>Add to Cart</button></p></div>';
    }
}