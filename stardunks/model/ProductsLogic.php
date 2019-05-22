<?php
require_once 'model/DataHandler.php';

class ProductsLogic
{

    public function __construct()
    {

        $this->DataHandler = new Datahandler("localhost", "mysql", "levels", "root", "");


    }

    public function createProduct($name, $phone, $email, $adress)
    {
        $sql = "INSERT INTO contacts (name, phone, email, location)
VALUES ('" . $_POST["name"] . "','" . $_POST["phone"] . "','" . $_POST["email"] . "','" . $_POST["location"] . "')";
        $results = $this->DataHandler->createData($sql);
        return $results;
    }

    public function readProducts()
    {
        //$item_per_page = 6;
   //     $position = (1 - 1 * $item_per_page);
       // $sql = "SELECT * FROM products LIMIT $position, $item_per_page";
//        $res = $this->DataHandler->readData($sql);
    //    $results = $this->createtable($res);
     //   $pages = $this->DataHandler->countPages("SELECT COUNT(*) FROM products");
        //  $selectlist = $this->readproductIDs($sql);
       // return array($pages, $results);

        $sql = "SELECT * FROM products WHERE product_id != 0";
        $results = $this->DataHandler->readsData($sql);

        return $results;
    }

    public function __destruct()
    {
    }

    public function readProduct($id)
    {
        $sql = "SELECT * FROM products WHERE product_id='. $id .' ";
        $results = $this->DataHandler->readData($sql);
        return $results;


    }

    public function updateProduct($name, $phone, $email, $adress, $id)
    {

    }

    public function searchProduct($query)
    {
        $sql = 'SELECT * FROM products WHERE product_name LIKE "%' . $query . '%";';
        $results = $this->DataHandler->searchData($sql);
        return $results;
    }

    public function deleteProduct($id)
    {

        $sql = "DELETE  FROM products WHERE product_id =' . $id .'";
        $results = $this->DataHandler->deleteData($sql);

        return $results;


    }

   /* public function createtable($res)
    {


        $tableheader = false;
        $html = "";
        $html .= '<table>';

        while ($row = $res->Fetch(PDO::FETCH_ASSOC)) {
            if ($tableheader == false) {
                $html .= '<tr>';
                foreach ($row as $key => $value) {
                    $html .= '<th>  ' . $key . '</th>';
                }
                $html .= '<th colspan="3" style="text-align: left;">Actions';
                $html .= "</tr>";
                $tableheader = true;
            }
            $html .= '<tr>';

            $row['product_price'] = '€ ' . $row['product_price'];
            $row['product_price'] = str_replace('.', ',', $row['product_price']);
            foreach ($row as $value) {
                $html .= '<td> ' . $value . ' </td>';
            }
            $html .= '<td><button onclick="redirectTo">read</button></td> ';
            $html .= '<td><button onclick="redirectTo">update</button></td> ';
            $html .= '<td><button onclick="redirectTo">delete</button></td> ';
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;
    }$html*/
}
?>
