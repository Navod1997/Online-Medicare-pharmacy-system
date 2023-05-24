<?php

session_start();

if (isset($_POST["add_to_cart"])){

    $item_code = $_POST["item_code"];
    $item_qtt  = $_POST["item_qtt"];


    if (!isset($_SESSION['cart_items'] ) && !isset($_SESSION['item_qtt'] )){

        $_SESSION['cart_items'] = array();
        $_SESSION['item_qtt'] = array();

       $A =  array_push($_SESSION['cart_items'],$item_code);
       $B =   array_push($_SESSION['item_qtt'],$item_qtt);

        if ($A && $B){

            echo "Data added to array session";
        }
        else {
            echo "someting went wrong";
        }
            

    }
    else{

       $A = array_push($_SESSION['cart_items'],$item_code);
       $B = array_push($_SESSION['item_qtt'],$item_qtt);

       if ($A && $B){

        echo "Data added to array session";
    }
    else {
        echo "someting went wrong";
    }



    }


}

if(isset($_GET["test"])){

   
    echo "Items : ";

    echo '<br>';

    print_r($_SESSION['cart_items']);

    echo '<br>';

    echo "Quantities : ";

    echo '<br>';

    print_r($_SESSION['item_qtt']);

}


?>