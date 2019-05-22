<?php
/*require_once 'DataHandler.php';


class Utilities extends DataHandler {


  public function searchProducts($query)
    {
        $min_length = 3;
        if (strlen($query) >= $min_length) {

            $result = $this->readsData('SELECT * FROM products WHERE product_name LIKE "%' . $query . '%";');

            $tableheader = false;
            $html = '';

            if ($result->num_rows > 0) {

                while ($row = $result->Fetch(PDO::FETCH_ASSOC)) {
                    if ($tableheader == false) {
                        $html .= '<tr>';
                        foreach ($row as $key => $value) {
                            $html .= '<th> '. $key .'</th>';
                        }
                        $html .= '<th>Actions';
                        $html .= "</tr>";
                        $tableheader = true;
                    }
                    $html .= '<tr>';

                    foreach ($row as $value) {
                        $html .= '<td> ' . $value . ' </td>';
                    }
                    $html .= '<td><button onclick="redirectTo">read</button></td> ';
                    $html .= '<td><button onclick="redirectTo">update</button></td> ';
                    $html .= '<td><button onclick="redirectTo">delete</button></td> ';
                    $html .= '</tr>';
                }

                $html .= '</table>';


            } else {
                $html = 'name is too short ';
            }

        } else {
            $html = "Minimum length is " . $min_length;
        }


        return $html;

    }





}

*/?>