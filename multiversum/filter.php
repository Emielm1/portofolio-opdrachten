<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiversum</title>


</head>
<body class="bg">
<?php
include 'header.php';
?>

<div class="mx-auto contane container" style="height: 80vh">
    <h1 class="brillen">Winkel</h1>
<?php
include 'products.php';

$product = new Product;

$result = $product->filterProducts();

echo $result;

?>

</div>