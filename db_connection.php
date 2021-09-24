<?php
$servername="localhost";
$username="root" ; 
$password="" ;
$database="online_pharmacy_db";

//create_connection

$connection = mysqli_connect($servername,$username,$password,$database) ;

//cheak_connection

if ($connection -> connect_error ) {
        die("connection failed:" .$connection -> connect_error);
}
else{
    //echo "connection successfully";
    //mysqli_close ($connection);
}

// mysqli object-oriented


?>