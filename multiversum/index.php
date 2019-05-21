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
<br>
<div class="mx-auto contane">
    <h1 class="brillen container sale">Sale</h1>

    <p class="salepage">
        <?php


        $products = new Product();

        echo $products->displayRowsale('products');

        ?>
    </p>

</body>
</html>