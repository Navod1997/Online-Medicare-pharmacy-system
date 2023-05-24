<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["admin_id"])){

    if(!empty($_GET['id'])){
        $_SESSION['itmTmpId']=$_GET['id'];
    }
    
}
else{
    header("location:../home_page.php");
}
?>

<!DOCTYPE html>
<html lang>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    
    <title>Admin_panale</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!--<div class="preloader">-->
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper-->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <img src="assets\images\logo2.png" alt="homepage" class="light-logo" style="width:140px;">
                </div>
                <!-- Search -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> 
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- Profile -->
                    <div class="ht-right">
                         <a href="my_account.php" class="login-panel"><i class="fa fa-user" style="width:50px;color: white;"></i></a>
                          <a href="../logout.php" class="login-panel"><i class="fa fa-sign-out" style="width:50px;color: white;"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Main wrapper-->

        <!-- Sidebar-->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">orders</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="delivery_city.php" aria-expanded="false"><i class="mdi mdi-monitor"></i><span class="hide-menu">Delivery city</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar scroll-->
       
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">View order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">View order</li>
                        </ol>
                    </div>
                </div>
            
        <!-- End Page wrapper  -->

           
        <!-- category -->

        <div class="container content-invoice">
        <form action = "" method = "post">
            <div class="load-animate animated fadeInUp">
            <div class="card"> 
                <div class="container">
                <div class="row">




                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2 class="title">Medicare pharmacy</h2>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ht-right">
                    <p>Date/Time: <span id="datetime"></span></p>
                <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = dt.toLocaleString();
                </script>
                </div>

                </div>

                <input id="currency" type="hidden" value="$">
                <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                    <h3>From,</h3>
                        <h6> Medicare pharmacy </h6>
                        <h6> Main rode </h6>
                        <h6> Matara </h6>
                        <h6> 0715236981 </h6>
                        <h6> Medicarepharmacy@gmail.com </h6><br>

                   
                     
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ht-right">

                    <h3>To,</h3>

                    <?php


                        if(isset($_GET['id'])){


                            $id = $_GET['id'];
                            
                            include 'db_connection.php';

                            $sql = "SELECT * FROM orders WHERE order_id ='".$id."'" ; 
                            $result = mysqli_query($connection, $sql);
    
                            if($result->num_rows>0){
                                $row=$result->fetch_assoc();
                                    $id = $row["order_id"];
                                    $_SESSION['cNumber'] =$row["phone_number"];
                                    $status = $row['status'];
    
                            echo   
                                    '   <h5>'.$row["first_name"] .'</h5>
                                        <h5>'.$row["address"] .'</h5>
                                        <h5>'.$row["phone_number"] .'</h5>
                                    ';
    
    
                                
    
    
    
                            }
                            else{
    
                                echo "no result found";
                                //echo '<script>alert("No Results Found");</script>';
                            }



                        }

                       
                        $connection->close();






                    ?>
                                            
                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered table-hover" id="invoiceItem">
                <thead>
                    <tr>
                        <th width="15%">Item No</th>
                        <th width="40%">Item Name</th>
                        <th width="15%">Quantity</th>
                        <th width="15%">Price</th>
                        <th width="15%">Total</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                        if(isset($_GET['id'])){


                            $id = $_GET['id'];
                            
                            include 'db_connection.php';

                            $sql = "SELECT iteam_id,item_name,qty,unit_price,order_total FROM orders,item,orderitem WHERE orders.order_id = orderitem.oder_id AND item.item_id = orderitem.iteam_id AND orders.order_id ='".$id."'" ; 
                            $result = mysqli_query($connection, $sql);

                            if($result->num_rows>0){
                                while($row=$result->fetch_assoc()){
                                // $id = $row["order_id"];
                                
                                 $qty = number_format((float)$row['qty'], 2, '.', '');
                                 $unit_price = number_format((float)$row['unit_price'], 2, '.', '');
                                 $subtotal = number_format((float)$qty*$unit_price, 2, '.', '');
                                 $total = $row['order_total']; 

                            echo    
                                    ' <tr>
                                        <td> <h5>'.$row["iteam_id"].'</h5> </td>
                                        <td><h5>'.$row["item_name"].'</h5> </td>
                                        <td><h5>'.$row["qty"].'</h5> </td>
                                        <td> <h5>'.$row["unit_price"].'</h5> </td>
                                        <td> <h5>'. $subtotal.'</h5> </td>
                                    
                                </tr> 

                                ';

                            
                                    }



                                }
                                else{

                                    echo "no result found";
                                    //echo '<script>alert("No Results Found");</script>';
                                }



                            }

                ?>
                </tbody>

            </table>
            


            <div class="row">
            <div class="container">
             <!-- total display -->
                <div class="float-sm-right">
                    <div class="form-group">
                        <label>Total:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs</div>
                                <input value="<?php echo $total; ?>" type="text" class="form-control" name="totalAftertax" id="allTotal" readonly >
                            </div>
                        </div>
                    </div>
                </div>
            <!-- total display -->

            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            
                <h3>Notes: </h3>
                <div class="form-group">
                   <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
                </div>
                <br>

                 <?php

                    include 'db_connection.php';

                    if(isset($_POST["Accept"])) {

                    $number ="94".$_SESSION['cNumber'];
                    $msg="Your order accepted. order reference id is: ".$_GET["id"].". Thank you!";
                   // include('../sms/send.php');
                    
                    $order_id = $_GET["id"];

                    $sql = 'UPDATE `orders` SET `status`="accept" WHERE order_id = '.$order_id.'' ;
                    
                   



                            if ($connection->query($sql) === TRUE) {
                                echo '<script>swal("Order accept!", "Order is accept.!", "success").then (function(){
                                    window.location = "oders.php" ;
                                });
                                    </script>';
         
                                    } else {
                                    echo "Error: " . $sql . "<br>" . $connection->error;
                                    }
                                    
                                    unset($_SESSION['cNumber']);
                                    $connection->close();

                        }

                        if(isset($_POST["Reject"])) {

                            $number ="94".$_SESSION['cNumber'];
                            $msg="Your order rejected.order reference id is: ".$_GET["id"].". Thank you!";
                           // include('../sms/send.php');
                            $order_id = $_SESSION['itmTmpId'];
        
                            $sql = 'UPDATE `orders` SET `status`="reject" WHERE order_id = '.$order_id.'' ;
        
                                    if ($connection->query($sql) === TRUE) {
                                        
                 
                                            //////////// update reject order////////////////

                                            // $user_id =$_POST['userId'];

                                            // $latestId= $_SESSION['itmTmpId'];


                                            // ////update quantitiy////

                                            // $cartItemsId = $_SESSION['cart_items'];
                                            // $countItemQnt =$_SESSION['item_qtt'];


                                            // $arrLength = count($countItemQnt);

                                            // loop through the array

                                            $getOrderItem = "SELECT * FROM `orderitem` WHERE oder_id = '.$order_id.'";
                                            $itemListQuery = mysqli_query($connection, $getOrderItem);
                                            while($listOrderItem=$itemListQuery->fetch_assoc())
                                            {
                                                // echo'
                                                // <script>
                                                // alert("'.$listOrderItem['iteam_id'].'");
                                                // consol.log('.$listOrderItem['qty'].');
                                                // </script>';

                                                // echo '<br>';
                                                $itemcode = $listOrderItem['iteam_id'];
                                                $quntity = $listOrderItem['qty'];   
                                                echo'
                                                <script>
                                                 alert("'.$quntity.'");
                                                 </script>';
                                                // echo '<br>';
                                                

                                                $getItemQuntity = "SELECT quantity FROM item Where item_id='".$itemcode."'";
                                                $getItemQuntityResult = mysqli_query($connection, $getItemQuntity);

                                                $row = mysqli_fetch_assoc($getItemQuntityResult);
                                                
                                                $currntQnt= (int)$row['quantity'];

                                                /////check valid quntity///////
                                                
                                                    $updateQnt= $currntQnt + (int)$quntity;
                                                
                                                    $updateQntStatus = "UPDATE `item` SET `quantity`='".$updateQnt."' Where item_id='".$itemcode."'";
                                
                                                    $getItemQuntityResult = mysqli_query($connection, $updateQntStatus);
                                                
                                               
                                                
                                                
                                                ///// insert order details to order items table//
                                            }


                                            ///////////////////update reject order/////////////////////
                                            echo '<script>swal("Order Reject!", "Order is accept.!", "error").then (function(){
                                                window.location = "oders.php" ;
                                            });
                                                </script>';


                                            } else {
                                            echo "Error: " . $sql . "<br>" . $connection->error;
                                            }
        
                                            $connection->close();
        
                                }

                ?>

                


                <?php 
                    if($status=="pending"){
                        echo '<div class="row">
                        <div class="form-group">
                            <input type="submit" name="Accept" value="Accept Order"  href="Admin\oders.php"  class="btn btn-success submit_btn invoice-save-btm">
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <input type="submit" name="Reject" value="Reject Order"  class="btn btn-danger">
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                

                
                 <!-- print invoice -->
                <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                    <p>invoice print :
                     <a href="<?php echo "invoice.php?order_id=".$id ;  ?>"  class="login-panel"><i class="fa fa-print" aria-hidden="true"></i></a></p>
                </div>
                
                <!-- print email -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <p>Send e_mail :
                     <a href="<?php echo "invoice.php?order_id=".$id ;  ?>"  class="login-panel"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
                </div>
                </div>
                
            </div>
            </div>

        </form>
        </div>
         


        <!-- End category-->

        <!-- footer -->
            <!--<footer class="footer">
                © 2021 Medicare Online Pharmacy System Admin by Kalhara
            </footer>
        </div>-->
        <!-- End footer -->

    
    <!-- All Jquery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>