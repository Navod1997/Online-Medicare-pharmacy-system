<?php

if(isset($_GET["id"])){

    include 'db_connection.php';

    $id = $_GET["id"];

    $req = $_GET["req"];

    echo $id;

    echo '<br>';

    echo $req;

    echo '<br>';


    if ($req == "itemdelete"){
        $table = "item";
    }

    else{
        
        $table = "category";
    }

    echo $table;
    echo '<br>';

    echo "User: ". $id. "Delete from : ".$table."Table";
    echo '<br>';

    $sql = "DELETE FROM $table WHERE item_id='".$id."'";
    
    if ($connection->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $connection->error;
    }
    
    
    
    $connection->close();


}





?>