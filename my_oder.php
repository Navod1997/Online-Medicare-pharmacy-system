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

    
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <div class="navb1">
        <div class="header-top ">
         <nav class="navbar navbar-custom navbar-expand-md ">
            <div class="container">
                <div class="ht-left">
                </div>
                <?php
                if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!=""){
                    $name= $_SESSION["first_name"];

                    echo '<div class="ht-right">
                    <a href="my_account.php" class="login-panel">'.$name.'</a>
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
            </div>
        </div>';
                
             } ?>
            </div>
        </div>



        <!-- Breadcrumb Section Begin -->
        <div class="breacrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                            <div class="col-lg-5 offset-lg-5">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- oder list -->
        <div class="row">
        <div class="col-sm-4 col-lg-3">
            <nav id="navbar-example3" class="navbar navbar-text-dark bg-light flex-column mt-4" wit>
            <a class="navbar-brand" href="my_account.php">My Account</a>
            <!--<nav class="nav nav-pills flex-column">
                <a class="nav-link ml-3 my-1" href="eddit_acount.php">Eddit profile</a>
                <a class="nav-link ml-3 my-1" href="change_password.php">Change password</a>
            </nav>-->
            <a class="navbar-brand" href="#item-2">My order</a>
            </nav>
        </div>

            <div class="col-sm-6 col-lg-7">
                <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
                    <div class="register-login-section spad">
                        <div class="container-fluid my-5 d-flex justify-content-center">
                            <div class="card-body">     

                                <?php

                                    $sql = "SELECT * FROM orders where user_id=".$_SESSION["user_id"]."";

                                    $result = mysqli_query($connection, $sql);

                                    if($result->num_rows>0){

                                            (int)$item_size = 1 ;
                                            $current_page_number = 1 ;
                                            
                                        while($row=$result->fetch_assoc()){
                                            
                                            $orderid = $row["order_id"];
                                            // $order_total = $row["order_total"];
                                            $status = $row["status"];
                                            $deliveryType = $row["delivery_type"];
                                            $orderType = $row["orderType"];
                                            $total = $row["order_total"];

                                    echo    
                                            ' 
                                            <div class="row mt-4"'.$current_page_number.' pageclass>
                                                    <div class="col">
                                                        <div class="card">
                                                        <div class="card-body">
                                                                <div class="media">

                                                                <div class="row mb-4">
                                                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                                        <img class="img-fluid w-100"
                                                                            src="img\iteam\photo_1.jpg" alt="Iteam photo">                       
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                                                        
                                                                        <div class="d-flex justify-content-between">
                                                                            <div>
                                                                                
                                                                                <h5>Order Id : # '.$orderid.'</h5>  <br>
                                                                                
                                                                                <p class="mb-3 text-muted text-uppercase small">Delivery Type  :'.$deliveryType.'</h4>    
                                                                                <p class="mb-3 text-muted text-uppercase small">Total Price : Rs.'.$total.'</h4>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="d-flex justify-content-between align-items-center">

                                                                        
                                                                            <hr class="my-3 ">
                                                                            <div class="row">
                                                                            <td><span class="badge badge-info">'.$status.'</span></td>
                                                                            </div>          
                                                                        </div>
                                                                        </div>
                                                                
                                                                    </div>


                                                                </div>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                            
                                            
                                            if($item_size%4 == 0 ){
                            
                                                $current_page_number = $current_page_number +1 ;
        
        
                                            }
        
                                                $item_size =  $item_size+1;


                                        }

                                    }
                                    else{

                                        $current_page_number =0;
                                        echo "no result found";
                                        //echo '<script>alert("No Results Found");</script>';
                                    }
                                    $connection->close();


                                ?>             
                            </div>    
                        </div>
                    </div>    
                    
                </div>
            </div>

            <div class="container-fluid my-5 d-flex justify-content-center">
            <div class="loading-more">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        
                    
                        <input type="text" id="total_page" hidden value="<?php if($current_page_number){echo $current_page_number;}  ?>">
                        <input type="text" id="curent_page" hidden value="1" >
                        

                        <?php

                        if($current_page_number != 0){

                            echo '
                                    <li class="page-item" onclick="direct_to_page(-1)"><a class="page-link" href="#">Previous</a></li>
                                    ';

                            for($y=1; $y <= $current_page_number; $y++ ){

                                echo '

                                    <li class="page-item" id="'.$y.'" onclick="click_page(this.id)"><a class="page-link" href="#">'.$y.'</a></li>
                                
                                ';

                            }

                        
                            echo '
                                    <li class="page-item" onclick="direct_to_page(+1)"><a class="page-link" href="#">Next</a></li>
                                    ';
                        
                        }
                        
                        
                        ?>

                        
                        
                    </ul>
                </nav>
            </div>
            
            </div>
       


        </div>
    </div>


    

    <!-- Register Form Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img\slidephoto\logo2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: No.11,Medhagoda,Matara,Sri Lanka</li>
                            <li>Phone: +971524518</li>
                            <li>Email: Medicarepharmacy@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
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
    <script src="js/main.js"></script>
</body>

</html>
<!-- $(document).ready(function(){

$('.toggle-btn').click(function() {
$(this).toggleClass('active').siblings().removeClass('active');
});

}); -->

<script>

    // hide other pages items and only show 1st page items
    $( document ).ready(function() {

        $('.pageclass').hide();

        $('.page1').show();
    
    });


    // when user click page number page items show and other items hide
            function click_page (value){

            // alert(value);

                var total_page = document.getElementById("total_page").value;

                document.getElementById("curent_page").value = value;

                var tmp_pageid = "page"+value;


                $('.pageclass').hide();

                $('.'+tmp_pageid).show();

            }

    // next and previous btn function

            function direct_to_page(page){


                var current_page = document.getElementById("curent_page").value;
                var total_page = document.getElementById("total_page").value;

                //alert(page);

                var new_page = parseInt(current_page) + parseInt(page);

                if(total_page >= new_page && new_page > 0){

                    document.getElementById("curent_page").value = new_page;

                // alert("Select page is : "+new_page);

                    var tmp_pageid = "page"+new_page;


                $('.pageclass').hide();

                $('.'+tmp_pageid).show();

                }
                else {
                    alert("Not Avalible");
                }

            }


    </script>



