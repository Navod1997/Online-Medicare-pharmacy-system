<?php
session_start();
include('./db_connection.php');

$user_id = $_SESSION["user_id"];
$total =$_SESSION["total"];
$address =$_POST["new_address"];
 $first_name=$_POST["first_name"];
$last_name = $_POST["last_name"];
$phone_number = $_POST["new_phone_number"];
$e_mail = $_POST['e_mail'];
$delivery_type = $_POST["delivery_type"];
$city = $_POST['city'];


///////////////////////////////////////////////// insert order details////////////////////////////////////////////

$orderInsert = "INSERT INTO `orders`( `user_id`, `order_total`, `status`, `address`, `first_name`, `last_name`, `phone_number`, `e_mail`, `delivery_type`, `city`) 
VALUES ('".$user_id."','".$total."','pending','".$address."','".$first_name."','".$last_name."','".$phone_number."','".$e_mail."','".$delivery_type."','".$city."')";

    if ($connection->query($orderInsert) === TRUE) {
    
        echo '<script>alert("'.$_POST["new_address"].'");</script>';

    } else {
    echo "Error: ".  "<br>" . $connection->error;
    }


                



////////////////////////////////////////get order id//////////////////////////////////////////////////////////////
    $Ordersql = "SELECT order_id FROM orders Where user_id='".$user_id."' ORDER BY order_id DESC;"; 
    $OrderIdresult = mysqli_query($connection, $Ordersql);
    $checkOrderIdResult = mysqli_num_rows($OrderIdresult);
    $row = mysqli_fetch_row($OrderIdresult);
    $latestId= $row[0];





////////////////////////////////////////update quantitiy////////////////////////////////////////////////////////////

                $cartItemsId = $_SESSION['cart_items'];
                $countItemQnt =$_SESSION['item_qtt'];


                $arrLength = count($countItemQnt);

                // loop through the array

                ///

                for($i = 0; $i < $arrLength; $i++) {

                    // echo '<br>';
                    $itemcode = $cartItemsId[$i];
                    $quntity = $countItemQnt[$i];    
                    // echo '<br>';

                    $getItemQuntity = "SELECT quantity FROM item Where item_id='".$itemcode."'";
                    $getItemQuntityResult = mysqli_query($connection, $getItemQuntity);

                    $row = mysqli_fetch_assoc($getItemQuntityResult);
                    
                    $currntQnt= (int)$row['quantity'];

                    /////check valid quntity///////
                    if($currntQnt >= (int)$quntity){
                        $updateQnt= $currntQnt - (int)$quntity;
                    
                        $updateQntStatus = "UPDATE `item` SET `quantity`='".$updateQnt."' Where item_id='".$itemcode."'";
    
                        $getItemQuntityResult = mysqli_query($connection, $updateQntStatus);
                      
                    }else{
                        echo"Order quntity invalid";
                    }
                    
                    
                ////////////////////////////////////////////

                    ///// insert order details to order items table////

                            
                            if($checkOrderIdResult>0){

                            $orderiteminsert = "INSERT INTO `orderitem` (`oder_id`, `iteam_id`, `qty`) 
                            VALUES ('".$latestId."', '".$itemcode."','".$quntity."')";
                                if ($connection->query($orderiteminsert) === TRUE) {
                                
                                } else {
                                echo "Error: ".  "<br>" . $connection->error;
                                }
                                
                            }


                    ///////////////////////////////////////////////////





                }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////






        //  for($i = 0; $i < $arrLength; $i++) {
        //             echo '<br>';
        //             echo $cartItemsId[$i];
        //             echo'<script>alert("hi");</script>';
        //             echo $countItemQnt[$i];    
        //             echo '<br>';
        //         }
                

//unset($_SESSION['cart_items']);
//unset($_SESSION['item_qtt']);

               


?>