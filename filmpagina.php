<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Succesfilms</title>
</head>
<body>

<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=filmwebsite', 'root', '');
    $_GET["id"]
]);

$film = $query->fetch(PDO::FETCH_ASSOC);

?>
<div class="mx-auto" style="width: 1150px; background-color: #272727">
    <?php include("assets/header.php") ?>
    <div class="container broski" style="background-color: #272727">
        <div class="row align-items-start">
            <div class="col">
                <br> <img src="<?php echo $film['plaatje']; ?>" alt="afbeelding" class="noshade">
            </div>
            <div class="col">
                <br>
                <h1> <?php echo $film['titel']; ?></h1>
                <p> <?php echo $film['naam']; ?> </p>
                <p><br><?php echo $film['beschrijving']; ?> </br></p>


            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col">
                <h3><br><?php echo $film['rating']; ?>/10</h3>
            </div>
            <div class="col">
                <p>Director: <br>
                Writer: <br>
                Stars: <br>
                </p>
                <br>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
            </div>
        </div>
    </div>
    <footer>
        <?php include("assets/footer.php") ?>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/bootstrap.js" type="text/javascript"></script>
</body>
</html>