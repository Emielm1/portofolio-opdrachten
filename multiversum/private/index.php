<?php
include 'view/header.php';
require_once 'controller/ProductsController.php';

$controller = new ProductsController();
$controller->handleRequest();

?>