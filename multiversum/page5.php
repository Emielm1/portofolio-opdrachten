<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiversum</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Multiversum</title>


    </head>
<body>
<?php
include 'header.php';

    include "./products.php";

    ?>

<div class="mx-auto contane">
    <h1 class="brillen container">Shop</h1>

    <?php

    $products = new Product();

    echo( $products->displayRow5('products'));

    ?>
    <br>
        <div class="pagination brillen">
        <a href="page4.php">&laquo;</a>
        <a  href="index.php">1</a>
        <a  href="page2.php">2</a>
        <a href="page3.php">3</a>
        <a href="page4.php">4</a>
        <a class="active" href="page5.php">5</a>
        <a href="page5.php">&raquo;</a>
    </div>
</div>
</body>
</html>