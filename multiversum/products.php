<?php

class Product
{


    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "multiversum";

    private function createConn()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }


    public function getColumns($table)
    {
        $conn = $this->createConn();
        $sql = 'SHOW COLUMNS FROM ' . $table . ';';
        $result = $conn->query($sql);

        $fields = array();

        while ($row = $result->fetch_assoc()) {
            $fields[] = $row['Field'];
        }
        return $fields;
    }

    public function filterProducts()
    {

        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM products WHERE product_name LIKE "%' . "samsung" . '%";';

        $result = $conn->query($sql);

        $html = '';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';

            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_push($row, "$boo");
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {
                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . '</a>' . ' ';
            }

            $html .= '</li>';
        }
        return $html;
    }

    public function searchProducts($query)
    {
        $min_length = 3;
        if (strlen($query) >= $min_length) {
            $conn = $this->createConn();
            $sql = 'SELECT product_name, product_price, product_id FROM products WHERE product_name LIKE "%' . $query . '%";';

            $result = $conn->query($sql);

            $html = '';

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $html .= '<li class="product-item col-4">';
                    $html .= '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
                    $row['product_price'] = $row['product_price'] . "€";
                    $boo = '<img src="images/' . $row["product_id"] . '.png">';
                    array_push($row, "$boo");
                    $val = $row;
                    unset($val["product_id"]);
                    foreach ($val as $value) {
                        $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . '</a>' . ' ';
                    }
                    $html .= '</li>';


                }

            } else {
                $html = 'name is too short ';
            }

        } else {
            $html = "Minimum length is " . $min_length;
        }


        return $html;

    }

    public function displayRow1($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id < 7 and product_id > 0;';
        $result = $conn->query($sql);

        $html = '<ul><div class="product-list col-8">';
        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
            //$html .= '<input type="hidden" name="quantity" value="1"> ';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);

            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }

            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;
    }


    public function displayRow2($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id > 6 and product_id < 13 ';
        $result = $conn->query($sql);


        $html = '<ul><div class="product-list col-8">';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
           $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }
            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;
    }

    public function displayRow3($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id > 12 and product_id < 19;';
        $result = $conn->query($sql);

        $html = '<ul><div class="product-list col-8">';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
            $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }
            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;
    }

    public function displayRow4($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id < 24 and product_id > 17;';
        $result = $conn->query($sql);

        $html = '<ul><div class="product-list col-8">';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
            $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }
            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;

    }
    public function displayRowsale($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id = 1 or product_id = 5 or product_id = 4;';
        $result = $conn->query($sql);

        $html = '<ul><div class="product-list col-8">';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
            $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }
            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;

    }
    public function displayRow5($table)
    {
        $conn = $this->createConn();
        $sql = 'SELECT product_name, product_price, product_id FROM ' . $table . ' where product_id = 25;';
        $result = $conn->query($sql);

        $html = '<ul><div class="product-list col-8">';


        while ($row = $result->fetch_assoc()) {
            $html .= '<li class="product-item col-4">';
            $bro = '<form action="shoppingcart.php" method="GET"><input type="hidden" name="product_id" value=" ' . $row['product_id'] . '">
<button type="submit" class="fas"><i class="fas fa-cart-plus"></i></button></form>';
            $row['product_price'] = $row['product_price'] . "€";
            $boo = '<img src="images/' . $row["product_id"] . '.png">';
            array_splice($row, 0, 0, array($boo));
            array_splice($row, 1, 0, array($bro));
            $val = $row;
            unset($val["product_id"]);
            foreach ($val as $value) {

                $html .= '<a href="http://localhost/multiversum/producten.php?id=' . $row["product_id"] . '">' . $value . ' </a>';

            }
            $html .= '</li></form>';
        }
        $html .= '<ul/><div />';


        return $html;
    }

    public function shoppingCart()

    {
        if (isset($_COOKIE["cart"])) {
            $cart = json_decode($_COOKIE['cart'], true);
            $formattedCart = implode(', ', $cart);

            $conn = $this->createConn();
            $sql = 'SELECT product_name, product_price, product_id FROM products WHERE product_id IN (' . $formattedCart . ')';
            $result = $conn->query($sql);

            if (isset($_COOKIE["cart"])) {
                // $total = 0;
                $html = '';
                $html .= '<table>';
                $html .= '<tr >';
                foreach ($result as $values) {
                    $html .= '<td><img class="imgshop" src="images/' . $values["product_id"] . '.png"> </td>';
                    $html .= '<td> ' . $values["product_name"] . ' <br> ' . $values["product_price"] . ' € </td>';
                    //       $html .= '<td> ' . $values["item_quantity"] . ' </td>';


                    //    $html .= '<td> ' . $values["item_quantity"] . ' </td>';
                    //      $html .= '<td>' . number_format($values["item_quantity"] * $values["item_price"], 2) . ' </td>;';
                    $html .= '<td><a href="cart.php?action=delete&id=' . $values["product_id"] . '"><span class="text-danger"> X </span></a></td> ';



                    // $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    $html .= '</tr>';
                    $html .= '<tr>';

                }

                $html .= '</tr>';

                $html .= '</table>';
                return $html;
            }


            }else {
            echo '<h5 class="brillen"> no item(s) in cart </h5><br>';

        }

    }
}
