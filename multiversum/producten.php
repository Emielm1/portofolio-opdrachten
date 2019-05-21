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


$db = new PDO('mysql:host=127.0.0.1;dbname=Multiversum', 'root', '');

$query = $db->prepare('SELECT * FROM products WHERE product_id = ?');
$query->execute([
    $_GET["id"]
]);

$products = $query->fetch(PDO::FETCH_ASSOC);

?>
<div class="mx-auto contane" style="">

    <div class="container broski" style="">
        <div class="row align-items-start">
            <div class="col">
                <br> <img src="images/<?php echo $products["product_id"] ?>.png">
            </div>
            <div class="col brillen">
                <br>
                <h1 > <?php echo $products['product_name']; ?></h1>
                <p> €<?php echo $products['product_price']; ?>- </p>
                <p><br><?php echo $products['product_info']; ?> </br></p>

            </div>
        </div>



</div>


</body>
</html>