 <!-- order insert -->
 <?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["email"])){
    
    
}
else{
    header("location:home_page.php");
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>online pharmacy</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body>


 <?php
                        

                        if(isset($_POST["order"])){

                        $user_id = $_SESSION["user_id"];
                        $total =$_SESSION["total"];
                        $address =$_POST["new_address"];
                        $first_name=$_POST["first_name"];
                        $last_name = $_POST["last_name"];
                        $phone_number = $_POST["new_phone_number"];
                        $e_mail = $_POST['e_mail'];
                        $delivery_type = $_POST["delivery_type"];
                        $city = $_POST['city'];


                        /// insert order details///
                        
                        $orderInsert = "INSERT INTO `orders`( `user_id`, `order_total`, `status`, `address`, `first_name`, `last_name`, `phone_number`, `e_mail`, `delivery_type`,`orderType`, `city`) 
                        VALUES ('".$user_id."','".$total."','pending','".$address."','".$first_name."','".$last_name."','".$phone_number."','".$e_mail."','".$delivery_type."','itemorder','".$city."')";

                        //echo $orderInsert;
   

                            if ($connection->query($orderInsert) === TRUE) {

                                
                               

                            } else {
                            echo "Error: ".  "<br>" . $connection->error;
                            }




                        ///get order id///

                        $Ordersql = "SELECT order_id FROM orders Where user_id='".$user_id."' ORDER BY order_id DESC;"; 
                        $OrderIdresult = mysqli_query($connection, $Ordersql);
                        $checkOrderIdResult = mysqli_num_rows($OrderIdresult);
                        $orderId = mysqli_fetch_row($OrderIdresult);
                        $latestId= $orderId[0];




                        // ////update quantitiy////

                        //     // echo '<br>';
                        $itemcode = $_SESSION['itemcode'];
                        $quntity = $_SESSION["quntity"];    
                        //     // echo '<br>';

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
                            
                            

                        //     ///// insert order details to order items table////

                                    
                                    if($checkOrderIdResult>0){

                                    $orderiteminsert = "INSERT INTO `orderitem` (`oder_id`, `iteam_id`, `qty`) 
                                    VALUES ('".$latestId."', '".$itemcode."','".$quntity."')";
                                        if ($connection->query($orderiteminsert) === TRUE) {

                                            //session data clear/unset
                                            unset($_SESSION["total"]);
                                            unset($_SESSION["quntity"]);
                                            unset($_SESSION['itemcode']);

                                            echo '<script>swal("Order success!", "Order success .!", "success").then (function(){
                                                window.location = "home_page.php" ;
                                            });
                                                </script>';
                                        
                                        } else {
                                        echo "Error: ".  "<br>" . $connection->error;
                                        }
                                        
                                    }
                        

                                
                    }
                            
            ?>
        <!-- end order insert -->

    </body>
</html>