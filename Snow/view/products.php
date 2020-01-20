<?php
/**
 * Snow - products.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 20.01.2020 14:37
 * Current version: 1.0
 * Description: product page loading its content from a json file.
 */

// Flow Stamp stocked in memory
ob_start();
$titre = "Rent A Snow - Produits";
?>
    <style>
        .product {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>

    <div>
        <?= productsRead() ?>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
