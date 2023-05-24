<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["email"])){
    
    // if(isset($_POST["qunt"])){
    //     $_SESSION["quntity"] = $_POST["qunt"];
    // }elseif(isset($_SESSION["quntity"])){
    //     $itemcode =  $_SESSION['itemcode'];
    //     $sql = "SELECT * FROM item WHERE item_id='".$itemcode."'"; 
    //     $result = mysqli_query($connection, $sql);
    //     $row=mysqli_fetch_array($result);
    //         if($result->num_rows>0){
    //             $itemName=$row['item_name'];
    //             $unitPrice = $row['unit_price'];
    //             $quntity = $_SESSION["quntity"];
                
    //             $total = $quntity * $unitPrice;
                
    //             $total = number_format((float)$total, 2, '.', '');;

    //         }else {
    //             // echo'<script>alert("quntity not run")</script>';
    //         }
        
    // }else {
    //    // echo'alert("something wrong");';
    //     // header("location:item.php");
    // }
    
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
 
    <title>Medicare Online pharmacy</title>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

    <style>
        /* body{margin-top:20px;}
        select.form-control:not([size]):not([multiple]) {
            height: 44px;
        } */
        select.form-control {
            padding-right: 38px;
            background-position: center right 17px;
            background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNv…9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
            background-repeat: no-repeat;
            background-size: 9px 9px;
        }
        .form-control:not(textarea) {
            height: 44px;
        }
        /* .form-control {
            padding: 0 18px 3px;
            border: 1px solid #dbe2e8;
            border-radius: 22px;
            background-color: #fff;
            color: #606975;
            font-family: "Maven Pro",Helvetica,Arial,sans-serif;
            font-size: 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        } */

        .shopping-cart,
        .wishlist-table,
        .order-table {
            margin-bottom: 20px
        }

        .shopping-cart .table,
        .wishlist-table .table,
        .order-table .table {
            margin-bottom: 0
        }

        .shopping-cart .btn,
        .wishlist-table .btn,
        .order-table .btn {
            margin: 0
        }

        .shopping-cart>table>thead>tr>th,
        .shopping-cart>table>thead>tr>td,
        .shopping-cart>table>tbody>tr>th,
        .shopping-cart>table>tbody>tr>td,
        .wishlist-table>table>thead>tr>th,
        .wishlist-table>table>thead>tr>td,
        .wishlist-table>table>tbody>tr>th,
        .wishlist-table>table>tbody>tr>td,
        .order-table>table>thead>tr>th,
        .order-table>table>thead>tr>td,
        .order-table>table>tbody>tr>th,
        .order-table>table>tbody>tr>td {
            vertical-align: middle !important
        }

        .shopping-cart>table thead th,
        .wishlist-table>table thead th,
        .order-table>table thead th {
            padding-top: 17px;
            padding-bottom: 17px;
            border-width: 1px
        }

        .shopping-cart .remove-from-cart,
        .wishlist-table .remove-from-cart,
        .order-table .remove-from-cart {
            display: inline-block;
            color: #ff5252;
            font-size: 18px;
            line-height: 1;
            text-decoration: none
        }

        .shopping-cart .count-input,
        .wishlist-table .count-input,
        .order-table .count-input {
            display: inline-block;
            width: 100%;
            width: 86px
        }

        .shopping-cart .product-item,
        .wishlist-table .product-item,
        .order-table .product-item {
            display: table;
            width: 100%;
            min-width: 150px;
            margin-top: 5px;
            margin-bottom: 3px
        }

        .shopping-cart .product-item .product-thumb,
        .shopping-cart .product-item .product-info,
        .wishlist-table .product-item .product-thumb,
        .wishlist-table .product-item .product-info,
        .order-table .product-item .product-thumb,
        .order-table .product-item .product-info {
            display: table-cell;
            vertical-align: top
        }

        .shopping-cart .product-item .product-thumb,
        .wishlist-table .product-item .product-thumb,
        .order-table .product-item .product-thumb {
            width: 130px;
            padding-right: 20px
        }

        .shopping-cart .product-item .product-thumb>img,
        .wishlist-table .product-item .product-thumb>img,
        .order-table .product-item .product-thumb>img {
            display: block;
            width: 100%
        }

        @media screen and (max-width: 860px) {
            .shopping-cart .product-item .product-thumb,
            .wishlist-table .product-item .product-thumb,
            .order-table .product-item .product-thumb {
                display: none
            }
        }

        .shopping-cart .product-item .product-info span,
        .wishlist-table .product-item .product-info span,
        .order-table .product-item .product-info span {
            display: block;
            font-size: 13px
        }

        .shopping-cart .product-item .product-info span>em,
        .wishlist-table .product-item .product-info span>em,
        .order-table .product-item .product-info span>em {
            font-weight: 500;
            font-style: normal
        }

        .shopping-cart .product-item .product-title,
        .wishlist-table .product-item .product-title,
        .order-table .product-item .product-title {
            margin-bottom: 6px;
            padding-top: 5px;
            font-size: 16px;
            font-weight: 500
        }

        .shopping-cart .product-item .product-title>a,
        .wishlist-table .product-item .product-title>a,
        .order-table .product-item .product-title>a {
            transition: color .3s;
            color: #374250;
            line-height: 1.5;
            text-decoration: none
        }

        .shopping-cart .product-item .product-title>a:hover,
        .wishlist-table .product-item .product-title>a:hover,
        .order-table .product-item .product-title>a:hover {
            color: #0da9ef
        }

        .shopping-cart .product-item .product-title small,
        .wishlist-table .product-item .product-title small,
        .order-table .product-item .product-title small {
            display: inline;
            margin-left: 6px;
            font-weight: 500
        }

        .wishlist-table .product-item .product-thumb {
            display: table-cell !important
        }

        @media screen and (max-width: 576px) {
            .wishlist-table .product-item .product-thumb {
                display: none !important
            }
        }

        .shopping-cart-footer {
            display: table;
            width: 100%;
            padding: 10px 0;
            border-top: 1px solid #e1e7ec
        }

        .shopping-cart-footer>.column {
            display: table-cell;
            padding: 5px 0;
            vertical-align: middle
        }

        .shopping-cart-footer>.column:last-child {
            text-align: right
        }

        .shopping-cart-footer>.column:last-child .btn {
            margin-right: 0;
            margin-left: 15px
        }

        @media (max-width: 768px) {
            .shopping-cart-footer>.column {
                display: block;
                width: 100%
            }
            .shopping-cart-footer>.column:last-child {
                text-align: center
            }
            .shopping-cart-footer>.column .btn {
                width: 100%;
                margin: 12px 0 !important
            }
        }

        .coupon-form .form-control {
            display: inline-block;
            width: 100%;
            max-width: 235px;
            margin-right: 12px;
        }

        .form-control-sm:not(textarea) {
            height: 36px;
        }

///////////////////////


.input-label {
	color: #8597a3;
	position: absolute;
	top: 1.5rem;
	transition: .25s ease;
}

.input-field {
	border: 0;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

    </style>

    
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

       <!-- Header Section Begin -->
        <div class="navb1">
        <div class="header-top ">
        <nav class="navbar navbar-custom navbar-expand-md ">
            <div class="container">
                <div class="ht-left">
                    <!-- <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Medicarepharmacy@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +971 524 518
                    </div> -->
                </div>
                <?php
                if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!=""){
                    $name= $_SESSION["first_name"];

                    echo '<div class="ht-right">
                    Wellcome !<a href="my_account.php" class="login-panel">'.$name.'</a>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                <div class="lan-selector">
                </div>
                ';
                
                } 
                ?>
            </div>
        </nav>
        </div>
        </div>


        <!-- search nave -->
        
        <div class="inner-header">
            <div class="container">
                <div class="row justify-content-md-center">
                <div class="row align-items-center">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="home_page.php">
                                <img src="img\slidephoto\logo1.png" alt="Medicare online pharmacy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">   
                            <div class="input-group">
                                <!-- <input type="text" placeholder="Search">
                                <button type="button"><i class="ti-search"></i></button> -->
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                        <a href="Prescription.php">
                        <img src="https://img.icons8.com/fluency-systems-filled/22/null/file-prescription.png"alt="Uplod Prescription"/>
                            </a>           
                            <li class="cart-icon">
                                <a href="Add_to_card.php">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div> 

        <!-- catogory -->        
        <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
            <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="medicine_list.php?type=Medicine">Medicine</a></li>
                        <li><a href="medicine_list.php?type=Mediacal Divice">Mediacal device</a></li>
                        <li><a href="medicine_list.php?type=Wellenss">Wellenss</a></li>
                        <li><a href="medicine_list.php?type=Aurwedha">Aurwedha</a> </li>
                        <li><a href="medicine_list.php?type=Personal Care">Personal Care</a></li>
                        <li><a href="medicine_list.php?type=Other">Other</a></li>
                    </ul>
                </nav>
            <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        </div>
        <!-- catogory End -->

        <!--End Header Section Begin -->
    
    

        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Breadcrumb Section Begin -->

<!-- order checkout cart -->

                <div class="container padding-bottom-3x mb-1">
                <div class="row">
                <div class="col-sm-8">
                    <!-- Alert-->
                    <!-- Shopping Cart-->
                    <div class="table-responsive shopping-cart">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Subtotal</th>
                                    <!-- <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#" >Clear Cart</a></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php

                                //////////////// order total calculation ////////////

                                if(!empty($_SESSION['cart_items']) && !empty($_SESSION['item_qtt'])){

                                

                                    $cartItemsId = $_SESSION['cart_items'];
                                    $countItemQnt =$_SESSION['item_qtt'];

                                    // get length of the item quentity
                                    $arrLength = count($countItemQnt);

                                    // loop through the array

                                    //
                                    $total=0.00;

                                    for($i = 0; $i < $arrLength; $i++) {

                                        // echo '<br>';
                                        $itemcode = $cartItemsId[$i];
                                        $quntity = $countItemQnt[$i];  
                                        

                                        // echo '<br>';

                                        $getItemQuntity = "SELECT unit_price,item_name,category_type,data_path FROM item Where item_id='".$itemcode."'";
                                        $getItemQuntityResult = mysqli_query($connection, $getItemQuntity);

                                        $row = mysqli_fetch_assoc($getItemQuntityResult);
                                        $unitPrice=number_format((float)$row['unit_price'], 2, '.', '');
                                        $data_path = $row['data_path'];
                                        
                                        $subTotal=$unitPrice*$quntity;

                                        ///$currntQnt= (int)$row['quantity'];
                                        
                                        $total = (float)$total+$subTotal;

                                        $total = number_format((float)$total, 2, '.', '');

                                        $_SESSION['total'] = $total;
                                        

                                        echo '<tr>
                                        <td>
                                            <div class="product-item">
                                                <a class="product-thumb" href="#"><img src="items/'.$row['data_path'].'" alt="Product"></a>
                                                <div class="product-info">
                                                    <h4 class="product-title">'.$row['item_name'].'</h4><span><em>Category:'.$row['category_type'].'</em></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">'.$quntity.'</td>
                                        <td class="text-center text-lg text-medium">Rs. '.$unitPrice.'</td>
                                        <td class="text-center text-lg text-medium">Rs. '.$subTotal.'</td>

                                       
                                        <td class="text-center"><a name="'.$itemcode.'" onclick="remove_item_from_cart(this.name)" class="remove-from-cart" href="" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="fa fa-trash" ></i></a></td>
                                    </tr>';
                                    }
                                }
                                ?>                              
                            </tbody>
                        </table>
                    </div>  
                </div>
                <div class="col-sm">
                <form action =""  method="post" >
                <div class="table-responsive shopping-cart">
                    <div class="card" style="">
                    <div class="card-body">

                        <h5 class="mb-3">Billing Details</h5>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-12">


                            <?php 

                                if(isset($_SESSION["user_id"])){
                                $user_id = $_SESSION['user_id'];
                                //echo $cat."<br><br>" ;


                                $sql = "SELECT * FROM user WHERE user_id='".$user_id."'"; 
                                $result = mysqli_query($connection, $sql);
                                $row=mysqli_fetch_array($result);
                                    if($result->num_rows>0){

                                    $first_name = $row["first_name"];
                                    $last_name = $row["last_name"];
                                    $e_mail = $row["e_mail"];
                                    $city = $row["city"];



                                    if(isset($_SESSION['details_edit'])){

                                        $phone_number = $_SESSION["new_phone_number"];
                                        $address = $_SESSION["new_address"];
                                        // $city = $_SESSION["new_city"];

                                    }
                                    else{

                                        $phone_number = $row["phone_number"];
                                        $address = $row["address"];
                                        $city = $row["city"];
                                    }


                                    }

                                }

                            ?>


                                
				
		            
                                <div class="form-group"><label for="first-name" class="input-label">First Name</label>
                                <input type="text" class="input-field col s6" value="<?php echo $first_name;?>" class="form-control" name="first_name" id="first_name" > </div>

                                <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> 
                                <input type="text" class="input-field col s6" value="<?php echo $phone_number;?>" class="form-control" name="new_phone_number" id="new_phone_number" > 
                                <!-- <p  class="text-primary mb-0" onclick="edit_enable()">
                                        <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span> -->
                                </div>

                                <div class="form-group"> <label for="address">Address</label> 
                                <input type="text" class="input-field col s6" value="<?php echo $address;?>" class="form-control" name="new_address" id="new_address"  >
                                <!-- <p  class="text-primary mb-0" onclick="edit_enable()">
                                        <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span> -->
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"> <label for="last-name">Last Name</label> 
                                <input type="text" class="input-field col s6" value="<?php echo $last_name;?>" class="form-control" name="last_name" id="last_name" > </div>

                                <div class="form-group"> <label for="email">E_mail</label> 
                                <input type="email" class="input-field col s6" value="<?php echo $e_mail;?>" class="form-control" name="e_mail" id="e_mail" > </div><br>



                                <div class="form-group"> <label for="last-name">City</label> 
                                <select class="browser-default custom-select" select name="city" id="delivery">
                                    <option  selected ><?php echo $city;?></option>
                                                
                                                <?php 

                                                    include 'db_connection.php'; // connection



                                                    $sql = "SELECT city_name FROM delivary_citys "; 
                                                        $result = mysqli_query($connection, $sql);


                                                        
                                                        if($result->num_rows>0){
                                                            while($row=$result->fetch_assoc()){
                                                                //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;

                                                        echo    
                                                                ' 
                                                                
                                                                            <option value="'.$row["city_name"].'">'.$row["city_name"].'</option>
                                                                    
                                                                
                                                                ';


                                                            }
                                                            


                                                        }
                                                        else{

                                                            echo "no result found";
                                                            //echo '<script>alert("No Results Found");</script>';
                                                        }
                                                      //  $connection->close();



                                                    ?>
                                                
                                        </select>

                                        <p  class="text-primary mb-0" onclick="edit_enable()">
                                        <!-- <span class="text-primary mb-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</span> -->
                            </div>
                        </div>
                        <div class="container">
                        <div class="row justify-content-md-center"> 
                            <button class="site-btn login-btn" type="submit" name="Save_changes" id="update_details" style="display:none">Save Details</button><br><br>
                        </div>
                        </div>

                        <?php 

                            if(isset($_POST["Save_changes"])){

                                $_SESSION["details_edit"]= "details_updated";
                                $_SESSION["new_address"]  = $_POST["new_address"];
                                // $_SESSION["new_city"]  = $_POST["new_city"];
                                $_SESSION["new_phone_number"] = $_POST["new_phone_number"];

                                // echo "new  address is : ". $_SESSION["new_address"];
                                // echo '<br>';
                                // echo "new phone number is : ".$_SESSION["new_phone_number"];

                            }


                        ?>

                        <div class="row justify-content-center">
                                
                                <div class="form-group"> <label for="exampleFormControlTextarea2">Delivery Method</label> 
                                <select class="browser-default custom-select" id="delivery" name="delivery_type">
                                            <!-- <option selected disabled>Choose delivery method</option> -->
                                            <option value="takeaway">Pick Up</option>     
                                            <option value="cash_on_delivery">Cash On Delivery</option>
                                        </select>
                               
                                </div>
                                </div>

                                
                        </div>
                        
                        <?php

                            if(!empty($_SESSION['cart_items']) && !empty($_SESSION['item_qtt'])){
                            echo'
                                <div class="mb-3">
                                <div class="pt-4">
                                    <h5 class="mb-3">The total amount of</h5>
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Temporary amount
                                        <span>Rs.'.$total.'</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span>Free</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                        <strong>The total amount of</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                        </div>
                                        <span><strong>Rs.'.$total.'</strong></span>
                                    </li>
                            </ul>';
                            }
                            ?>
                            <!-- <button type="button" class="btn btn-primary btn-block">go to checkout</button> -->
                                <div class="d-flex justify-content-center">
                                        <div class="row" style="padding:50px;">
                                            <button type="submit" name="order" value="Check Out" class="site-btn login-btn">Check Out</button>
                                        </div>
                                </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>    
                </div>
            </div>
            
            
        </div>
    </div>
</form>

<!------------------------------------------------- end order checkout cart -------------------------------------------------------->


        <!-- order insert -->

            <?php
                        

                        if(isset($_POST["order"]) && !empty($_SESSION["total"])&& !empty($_SESSION["cart_items"])){
                            
                        //echo '<script>alert("'.$_POST["new_address"].'")</script>';

                        // $user_id =  $_SESSION["user_id"];
                        // $total = $_SESSION["total"];
                        // $address= $_POST["new_address"];
                        // $first_name = $_POST['first_name'];
                        // $last_name = $_POST['last_name'];
                        // $phone_number = $_POST['new_phone_number'];
                        // $e_mail = $_POST['e_mail'];
                        // $delivery_type= $_POST["delivery_type"];
                        // $city = $_POST['city'];
                        

                        $user_id = $_SESSION["user_id"];
                        $total =$_SESSION["total"];
                        $address =$_POST["new_address"];
                        $first_name=$_POST["first_name"];
                        $last_name = $_POST["last_name"];
                        $phone_number = $_POST["new_phone_number"];
                        $e_mail = $_POST['e_mail'];
                        $delivery_type = $_POST["delivery_type"];
                        $city = $_POST["city"];


                        //// insert order details////
                        
                        $orderInsert = "INSERT INTO `orders`( `user_id`, `order_total`, `status`, `address`, `first_name`, `last_name`, `phone_number`, `e_mail`, `delivery_type`,`orderType`, `city`) 
                        VALUES ('".$user_id."','".$total."','pending','".$address."','".$first_name."','".$last_name."','".$phone_number."','".$e_mail."','".$delivery_type."','itemorder','".$city."')";

                       
                        //echo '<script>alert("'.$orderInsert.'")</script>';    

                            if ($connection->query($orderInsert) === TRUE) {

                                

                            } else {
                            echo "Error: ".  "<br>" . $connection->error;
                            }


            
                                
                        //echo '<script>alert("'.$oderinsert.'")</script>';

                        ////get order id////
                        $Ordersql = "SELECT order_id FROM orders Where user_id='".$user_id."' ORDER BY order_id DESC;"; 
                        $OrderIdresult = mysqli_query($connection, $Ordersql);
                        $checkOrderIdResult = mysqli_num_rows($OrderIdresult);
                        $row = mysqli_fetch_row($OrderIdresult);
                        $latestId= $row[0];


                        ////update quantitiy////

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
                            
                            
                            ///// insert order details to order items table////

                                    
                                    if($checkOrderIdResult>0){

                                    $orderiteminsert = "INSERT INTO `orderitem` (`oder_id`, `iteam_id`, `qty`) 
                                    VALUES ('".$latestId."', '".$itemcode."','".$quntity."')";
                                        if ($connection->query($orderiteminsert) === TRUE) {

                                            unset($_SESSION['cart_items']);
                                            unset($_SESSION['item_qtt']);
                                           // echo"<script>location.reload();</script>";
                                           echo '<script>swal("Order success!", "Order success .!", "success").then (function(){
                                            window.location = "home_page.php" ;
                                        });
                                            </script>';
                                        
                                        } else {
                                        echo "Error: ".  "<br>" . $connection->error;
                                        }
                                        
                                    }



                        }

                        //unset($_SESSION['cart_items']);
                        //unset($_SESSION['item_qtt']);
                        //echo"<script>location.reload();</script>";

                                
                    }
                            
            ?>
        <!-- end order insert -->
    
        

        <!-- Footer Section Begin -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="home_page.php"><img src="img\slidephoto\logo2.png" alt="Medicare online pharmacy"></a>
                            </div>
                            <ul>
                                <li>Address: No.11,Medhagoda,Matara,Sri Lanka</li>
                                <li>Phone: +971524518</li>
                                <li>Email: Medicarepharmacy@gmail.com</li>
                            </ul>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer-widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="check-out.php">Checkout</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="my_account.php">My Account</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="home_page.php">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            
                                <input type="text" placeholder="Enter Your Mail">
                                <button type="button">Subscribe</button>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="copyright-text">                        
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Medicare.lk. All rights reserved.
                            </div>
                            <div class="payment-pic">
                                <img src="img/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/jquery.dd.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
       <!-- <script src="js/main.js"></script> -->

        <script>
            ////clear cart
            function clear(){
                document.location = 'clearCart.php';
            }


            function edit_enable(){

                document.getElementById('address').disabled = false;
                document.getElementById('phone_number').disabled = false;
                document.getElementById("update_details").style.display = '';

                swal("info", "Now you are able to edit address & contact details");
              // swal("Error!", "Incorrect email or password!", "error");

            }

        </script>


        <script>
            function test(click){
                alert(click);
            }
        </script>

<script>

function remove_item_from_cart(item_id){
event.preventDefault();
   var x = item_id;

 $.ajax(
        {
            type:"POST",
            url: "tmp_add_to_cart.php",
            data: {
                remove_from_cart : "kalhara",
                item_code : item_id,
                  },    
            success: function (test) { 

                console.log(test);

                if(test == "Data remove from array session"){
                    
                    alert("item delete from cart");
                    location.reload(1);
                }else{
                    alert("unable to remove item from cart");
                }
                
                       
            },
            error: function (jqXhr, textStatus, errorMessage) { // error callback 
                       
                alert("System error");
            }
        });


}


</script>

     
</body>

</html>
