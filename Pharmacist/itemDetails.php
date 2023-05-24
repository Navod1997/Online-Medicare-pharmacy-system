<?php
include 'db_connection.php';
if(isset($_POST['item_code'])){

    $id = $_POST['item_code'];

    $itemListSql = "SELECT * FROM `item` where item_id ='".$id."' ";
    $itemListQuery = mysqli_query($connection, $itemListSql);

    $row = mysqli_fetch_assoc($itemListQuery);

    echo $row['item_name'].",".$row['unit_price']; 
}
?>