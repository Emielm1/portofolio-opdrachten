<?php
require_once 'model/DataHandler.php';

class ProductsLogic {

public function __construct() {

$this->DataHandler = new Datahandler("localhost","mysql","multiversum","root","");


}

public function createProduct($name, $phone, $email, $adress){
  $sql = "INSERT INTO contacts (name, phone, email, location)
VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["location"]."')";
    $results = $this->DataHandler->createData($sql);
    return $results;
}
public function readProducts()
{
    $sql = "SELECT product_id, product_name, product_price, product_info FROM products WHERE product_id != 0";
    $results = $this->DataHandler->readsData($sql);

    return $results;
}

public  function __destruct() {}

public  function readProduct($id)
{
   $sql = "SELECT * FROM products WHERE product_id='. $id .' ";
   $results = $this->DataHandler->readData($sql);
   return $results;
}
public  function updateProduct ($name, $phone, $email, $adress, $id) {

}
public  function deleteProduct($id) {

    $sql = "DELETE  FROM products WHERE product_id =". $id ." ";
    $results = $this->DataHandler->deleteData($sql);

    return $results;
}
}
?>
