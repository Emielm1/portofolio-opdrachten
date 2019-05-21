<?php
if (isset($_GET['product_id'])) {

        $productCart = array();
        $productId = $_GET['product_id'];

        if (isset($_COOKIE['cart'])) {
            $productCart = json_decode($_COOKIE['cart'], true);
        }

        array_push($productCart, $productId);
        setcookie('cart', json_encode($productCart), time() + 3600, '/');
    }
    header("Location: index.php?add_to_cart=" . $_GET['product_id']);
