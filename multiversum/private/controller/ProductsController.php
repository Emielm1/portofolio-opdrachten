<?php
require_once 'model/ProductsLogic.php';
class ProductsController {
    public  function __construct(){

        $this->ProductsLogic = new ProductsLogic();

    }
    public  function __destruct() {}
   public function handleRequest()
{
    try {
        $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
        switch ($op) {
            case 'create':
                $this->collectCreateProduct();
                break;
            case 'reads':
                $this->collectReadProducts();
                break;
            case 'read':
                $this->collectReadProduct($_REQUEST['id']);
                break;
            case 'update':
                $this->collectUpdateProduct();
                break;
            case 'delete':
                $this->collectDeleteProduct($_REQUEST['id']);
                break;
            default:
                $this->collectReadProducts();
                break;
        }
    } catch (ValidationException $e) {
        $errors = $e->getErrors();

    }

}
    public  function collectReadProduct($id)
    {
        $results = $this->ProductsLogic->readProduct($id);
        include 'view/contacts.php';
     var_dump($results);
    }
        public  function collectCreateProduct($name, $phone, $email, $adress) {
     if ($_POST){
            unset($_POST);

       }else {
            $results = $this->ProductsLogic->createProduct();
            include 'view/create.php';
      }

        }
        public  function collectReadProducts() {
            $results = $this->ProductsLogic->readProducts();
            include 'view/viewproducts.php';
        }
        public function collectUpdateProduct() {}

        public  function collectDeleteProduct($id) {
            $results = $this->ProductsLogic->deleteProduct($id);
            include 'view/delete.php';
        }




}


?>
