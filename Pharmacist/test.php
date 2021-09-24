<?php


include 'db_connection.php';
$c_name ="Navod";
$c_type = "Kalhaa";
$imgpath = "Test/Test/navodkalhara.jpg";

$sql = "INSERT INTO category (c_name, c_type, image_path)
VALUES ('John', 'Doe', 'john@example.com')";

        if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $connection->close();


?>