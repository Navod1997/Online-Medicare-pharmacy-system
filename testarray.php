<?php
//Database connection 
include 'db_connection.php';
session_start();

$tmp_array = array();

echo "Pre status of session array : ";

print_r($_SESSION['cart_items']);
echo'<br>';
print_r($_SESSION['item_qtt']);

echo '</br>';


if(in_array("1",$_SESSION['cart_items'])){

    echo "If part Run here";
    echo '</br>';


    $getPosition = array_search("1",$_SESSION['cart_items']);

    echo "Position is : ".$getPosition;
    echo '</br>';


    $new_qtt =100;

    $tmp_array = $_SESSION['item_qtt'];

    echo "Tmp array here : ";
    print_r($tmp_array);
    echo '</br>';


   $x = $tmp_array[$getPosition];

   $x = (int)$x + (int)$new_qtt;

   $tmp_array[$getPosition] = $x ;

   echo "Tmp array updated : ";
   print_r($tmp_array);
   echo '</br>';

   $_SESSION['item_qtt'] = $tmp_array ;

   echo "Updte Session qtt is  : ";
   
    print_r($_SESSION['item_qtt']);
    echo'<br>';

  

}
?>