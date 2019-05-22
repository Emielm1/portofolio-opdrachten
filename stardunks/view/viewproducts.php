<style>
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
    }
    .button {
        background-color: #008CBA;;
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

<h1>Read products</h1>
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
            $html .= '<th>Actions';
            $html .= "</tr>";
            $tableheader = true;
        }
        $html .= '<tr>';
        foreach ($row as $value) {
            $html .= '<td> ' . $value . ' </td>';
        }
        $html .= '<td><button onclick="Redirect">read</button></td> ';
        $html .= '<td><button onclick="Redirect">update</button></td> ';
        $html .= '<td><button onclick="Redirect">delete</button></td> ';
        $html .= '</tr>';
    }
    $html .= '</table>';

    return $html;
}

?>

<?php echo createtable($results);?>



<script>
    function Redirect() {

    }
</script>
