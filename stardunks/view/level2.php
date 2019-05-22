
<?php
include 'header.php';
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
            $html .= '<th colspan="3" style="text-align: left;">Actions';
            $html .= "</tr>";
            $tableheader = true;
        }
        $html .= '<tr>';

        $row['product_price'] = '€ '.$row['product_price'] ;
        $row['product_price'] = str_replace( '.' , ',',  $row['product_price']);
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
}

?>

<?php echo createtable($results);?>



<script>
    function redirectTo(gang) {
window.location = gang
    }
</script>
