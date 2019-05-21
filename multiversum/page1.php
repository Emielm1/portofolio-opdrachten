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
?>

<div class="contane mx-auto container">

    <h1 class="brillen container">Shop</h1>


    <?php

    include "./products.php";

    $products = new Product();

    echo $products->displayRow1('products');

    ?>






</div>
<br>

  <div class="pagination brillen float-left">
        <a href="page1.php">&laquo;</a>
        <a class="active" href="page1.php">1</a>
        <a  href="page2.php">2</a>
        <a href="page3.php">3</a>
        <a href="page4.php">4</a>
        <a href="page5.php">5</a>
        <a href="page2.php">&raquo;</a>
   </div>

</body>
</html>