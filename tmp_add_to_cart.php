<?php

session_start();

if(isset($_SESSION['user_id']) || $_SESSION["admin_id"] || $_SESSION["pharmacist_id"]){

    if (isset($_POST["add_to_cart"])){

    $item_code = $_POST["item_code"];
    $item_qtt  = $_POST["item_qtt"];


    //fist time add items
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

        //same items
        if(in_array($item_code,$_SESSION['cart_items'])){

           // echo "If part Run here";
          // echo '</br>';
        
        
            $getPosition = array_search($item_code,$_SESSION['cart_items']);
        
          //  echo "Position is : ".$getPosition;
           // echo '</br>';
        
        
            $new_qtt =$item_qtt;
        
            $tmp_array = $_SESSION['item_qtt'];
        
            //echo "Tmp array here : ";
            //print_r($tmp_array);
            //echo '</br>';
        
        
           $x = $tmp_array[$getPosition];
        
           $x = (int)$x + (int)$new_qtt;
        
           $tmp_array[$getPosition] = $x ;
        
           //echo "Tmp array updated : ";
          // print_r($tmp_array);
           //echo '</br>';
        
           $_SESSION['item_qtt'] = $tmp_array ;
           echo "Data added to array session";
          // echo "Updte Session qtt is  : ";
           
           // print_r($_SESSION['item_qtt']);
           // echo'<br>';
        
          
        //anotheher new items
        }else{

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

//remove
if(isset($_POST['remove_from_cart'])){
    $itemId = $_POST['item_code'];

    $getPosition = array_search($itemId,$_SESSION['cart_items']);
   $A = array_splice($_SESSION['cart_items'], $getPosition, 1);
   $B = array_splice($_SESSION['item_qtt'], $getPosition, 1);

   if ($A && $B){

    echo "Data remove from array session";
    }
    else {
        echo "someting went wrong";
    }
}

}else{
    echo"some thing wrong";
}




?>