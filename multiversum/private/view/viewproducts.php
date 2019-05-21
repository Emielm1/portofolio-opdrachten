<style>
    table {
        border-collapse: collapse;
        width: auto;
        font-size: 80%;
    }

    table, td, th, tr {
        border: 1px solid #2c3e50;

    }
    .button {
        background-color: #2c3e50;
        border: none;
        color: white;
        padding: 15px 32px;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
</style>

<h1>Edit products</h1>
<form  id="submit form" method="post" action="?op=create">
    <button class="button" type="submit" value="submit form">Create new product </button>





</form>




<?php

/*

$html = '';
$html = '<table>';

while($row = $contacts->Fetch(PDO::FETCH_ASSOC)) {

$html .= '<tr>';
    foreach ($row as $value) {
        $html .= '<td>'. $value . '</td>';

      }
    $html .= '<td>Read</td>';
    $html .= '<td>update</td>';
    $html .= '<td>delete</td>';
      $html .= '</tr>';
    }

$html .= '</table>';


var_dump($html);*/




function createTable($results)
{
    $tableheader = false;
    $html = "";
    $html .= '<table>';

    while ($row = $results->Fetch(PDO::FETCH_ASSOC)) {
        if ($tableheader == false) {
            $html .= '<tr>';
            foreach ($row as $key => $value) {
                $html .= '<th>  '. $key .'</th>';
            }
            $html .= '<th colspan="2">Actions';
            $html .= "</tr>";
            $tableheader = true;
        }
        $html .= '<tr>';
        $row['product_price'] = '€ '.$row['product_price'] ;
        $row['product_price'] = str_replace( '.' , ',',  $row['product_price']);
        foreach ($row as $value) {
            $html .= '<td> ' . $value . ' </td>';
        }
        $html .= '<td><button  class="button" onclick="redirectTo">update</button></td> ';
        $html .= '<td><a href="index.php?op=delete&id= '.$row['product_id'] .' "  ><button class="button">delete</button></a></td> ';
        $html .= '</tr>';
    }
    $html .= '</table>';

    return $html;
}

?>

<?php echo createtable($results);?>