<?php

require_once "model/db_connect.php";

$str = $_GET['q'];
    $conn = db_conn();
    // $selectQuery = "SELECT * FROM editor WHERE name LIKE '%{$str}%' ";
    $selectQuery = "SELECT * FROM `products` WHERE Name LIKE '%{$str}%' ";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<table>';
    echo '<thead>';

        echo '<td>Name</td>';
        echo '<td>BuyingPrice</td>';
        echo '<td>SellingPrice</td>';
        echo '<td>Displayable</td>';
                    
        echo '</thead>';
        echo '<tbody>';
echo '</tr>';
if (is_array($row) || is_object($row))
{
    
    foreach ($row as $i) {

        echo '<tr>';
        echo '<td>'.$i["Name"].'</td>';
        echo '<td>'.$i["BuyingPrice"].'</td>';
        echo '<td>'.$i["SellingPrice"].'</td>';
        echo '<td>'.$i["Displayable"].'</td>';
         
        echo '</br>';
     }

}
                    
echo '</tbody>';
echo '</table>';


?>

