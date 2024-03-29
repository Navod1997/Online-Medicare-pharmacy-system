<?php
include 'db_connection.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare online pharmacy</title>    
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

    <style>
        a {
        color: #67788a;
        text-decoration: none;
        background-color: transparent;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!--<div id="preloder">
        <div class="loader"></div>
    </div>-->
    <!-- Header Section Begin -->
    <div class="navb1">
        <div class="header-top ">
            <nav class="navbar navbar-custom navbar-expand-md">
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
                    <span class="text-dark">Welcome!</span><a class="text-white" href="my_account.php" class="login-panel">  '.$name.'</a>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<form class="ht-right ">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                
                <div class="lan-selector">
                </div>
            </div>
        </div>';
                
             } ?>
        </nav>    
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
                    
                    <!-- shop open,close time -->

                    <div class="col-lg-7 col-md-7">
                    </div> 

                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                        <a href="Prescription.php">
                        <img src="https://img.icons8.com/fluency-systems-filled/22/null/file-prescription.png"alt="Uplod Prescription"/>
                            </a>           
                            <li class="cart-icon">
                                <a href="testcheckout.php">
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
    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                        <li><a href="medicine_list.php?type=Medicine">Medicine</a></li>
                        <li><a href="medicine_list.php?type=Mediacal Divice">Medical Device</a></li>
                        <li><a href="medicine_list.php?type=Wellenss">Wellness</a></li>
                        <li><a href="medicine_list.php?type=Aurwedha">Ayurveda</a> </li>
                        <li><a href="medicine_list.php?type=Personal Care">Personal Care</a></li>
                        <li><a href="medicine_list.php?type=Other">Other</a></li>
                            </li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </header>
        <!-- catogory End -->

        <!-- slide photo -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="img\slidephoto\web-banner-3_1_.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img\slidephoto\web-banner-3_1_.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img\slidephoto\web-banners--prescription.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br>

        <!-- slide photo end-->

        <!-- pramotion-->
        <section class="women-banner spad">
            <div class="container-fluid">
                <div class="row">
                        <!-- <div class="filter-control">
                            <ul>
                                <li class="active">Promotions</li>
                            </ul>
                        </div> -->
                        <!-- <div class="product-slider owl-carousel">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="img\pramition\418beT7ZU2L.jpg" alt="" style="width:50px ;height: 50px;">
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Coat</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        Rs.20.00
                                        <span>Rs135.00</span>
                                    <ul class="list-group list-group-flush">
                                        <a href="#" type="button" class="btn btn-info">Order Now</a>
                                </UL>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="img\pramition\Face-shield-with-glasses.jpg" alt="">
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Shoes</div>
                                    <a href="#">
                                        <h5>Guangzhou sweater</h5>
                                    </a>
                                    <div class="product-price">
                                        Rs.20.00
                                        <span>Rs135.00</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <a href="#" type="button" class="btn btn-info">Order Now</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="img\pramition\jshshs.jpeg" alt="">
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Towel</div>
                                    <a href="#">
                                        <h5>Pure Pineapple</h5>
                                    </a>
                                    <div class="product-price">
                                        Rs.20.00
                                        <span>Rs135.00</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <a href="#" type="button" class="btn btn-info">Order Now</a>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="img\pramition\HAND-GEL-SANITIZER-BOTTLE-600x600.jpg" alt="">
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">Shoes</div>
                                    <a href="#">
                                        <h5>Guangzhou sweater</h5>
                                    </a>
                                    <div class="product-price">
                                        Rs.20.00
                                        <span>Rs135.00</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <a href="#" type="button" class="btn btn-info">Order Now</a>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div> -->
                </div>
                <div class="animate-contain" style="border-radius: 10px;">
                <div class="animated-text">
                <span><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/30/null/external-mother-babies-and-maternity-flaticons-flat-flat-icons-2.png"/>Happy Mother's Day! 30% off floral arrangements this weekend only. Come in from 8am to 6pm or shop online.</span>
                <span><img src="https://img.icons8.com/fluency/30/null/shopping-bag.png"/>Get 25% off your next shopping trip when you refer a friend. Offer expires on December 30th. We hope to see you soon!</span>
                <span><img src="https://img.icons8.com/fluency/30/null/heart-with-pulse.png"/>10% discount for heart patients if you book your order! Reply to this text to schedule your appointment!</span>
            </div>
            </div>
            
        </div>
        </section>
        <!-- pramotion End -->
        
        <!--Item_2 list -->
        <div class="header">
            <h1 class="section-title">Medicine</h1>
            <span class="section-divider"></span><br>
        </div>
        <div class="container-fluid">
            <div class="col-lg-12 order-1 order-lg-2" >
                <p class="text-right"><a href="medicine_list.php?type=Medicine">More Items</a></p>
            </div>
                <div class="container-fluid">
                    <div class="col-lg-12 order-1 order-lg-2" >      
                        <div class="product-list">
                            <div class="row">
                                <?php 
                                include 'db_connection.php';
                                if(isset($_GET['type'])){
                                    $type = $_GET['type'];
                                    //echo $cat."<br><br>" ;
                                }
                                else{
                                    //echo "no ctogory selected";
                                    //echo '<script>alert("No Catagory Selected !");</script>';
                                    $type="Medicine";
                                }
                                $sql = "SELECT * FROM category WHERE c_type='".$type."' AND `front_display`=1"; 
                                    $result = mysqli_query($connection, $sql);   
                                    if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()){
                                            //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                            //<a href="./page.php?name='.$row["c_name"].'&amp;age=16">Page</a>
                                    echo    
                                            ' 
                                            <div class="col-lg-3 col-sm-6">
                                            <div class="product-item">
                                        <div class="pi-pic">
                                            <a href="view_items.php?cat='.$row["c_name"].'&amp;type='.$type.'">
                                            <div class="card" style="width: 400px;">
                                            <img class="card-img" src="img/medicine catogoty/medicine/PHARMACEUTICAL.jpg" alt="Card image" style = "opacity:0.9;">
                                            <div class="card-img-overlay">
                                            <div class="card-body">
                                              <h5 class="card-title"><b>'.$row["c_name"].'</b></h5>
                                            </div>
                                            </div>
                                          </div></a>
                                        </div>
                                    </div>
                                            </div> 
                                            ';
                                        }
                                    }
                                    else{

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
        </div>
        <!--Item_2 list end -->
        

        <!-- Banner Section Begin -->
        <div class="banner-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="img\slidephoto\banner1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="img\slidephoto\banner2.png" alt="">
                            <div class="inner-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="img\slidephoto\banner3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!--Item_2 list -->
        
        <div class="header">
                <h1 class="section-title">Medical Device</h1>
                <span class="section-divider"></span><br>
        </div>
        <div class="container-fluid">
            <div class="col-lg-12 order-1 order-lg-2" >
                <p class="text-right"><a href="medicine_list.php?type=Mediacal Divice">More Items</a></p>
            </div>
        </div>
            <div class="container-fluid">
                <div class="col-lg-12 order-1 order-lg-2" > 
                    <div class="product-list">
                        <div class="row">
                            <?php 

                            include 'db_connection.php';
                            if(isset($_GET['type'])){
                                $type = $_GET['type'];
                                //echo $cat."<br><br>" ;
                            }
                            else{
                                //echo "no ctogory selected";
                                //echo '<script>alert("No Catagory Selected !");</script>';
                                $type="Mediacal Divice";
                            }
                            $sql = "SELECT * FROM category WHERE c_type='".$type."' AND `front_display`=1"; 
                                $result = mysqli_query($connection, $sql); 
                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc()){
                                        //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                        //<a href="./page.php?name='.$row["c_name"].'&amp;age=16">Page</a>
                                echo    
                                        ' 
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="product-item">
                                                <div class="pi-pic">
                                                    <a href="view_items.php?cat='.$row["c_name"].'&amp;type='.$type.'">
                                                    <div class="card" style="width: 400px;">
                                                    <img class="card-img" src="img/medicine catogoty/medicine/PHARMACEUTICAL.jpg" alt="Card image" style = "opacity:0.9;">
                                                    <div class="card-img-overlay">
                                                    <div class="card-body">
                                                    <h5 class="card-title"><b>'.$row["c_name"].'</b></h5>
                                                    </div>
                                                    </div>
                                                </div></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        ';
                                    }

                                }
                                else{

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
        </div>
        <!--Item_2 list end -->
        

        <!-- Big banner Section Begin -->
        <div class="banner-section spad">
            <div class="bigbaner">
                <div class="container-fluid">
                    <img src="img\slidephoto\babbbb.png" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
        <!-- Big banner Section End -->

        <!--Item_3 list -->

        <div class="header">
                <h1 class="section-title">Wellness</h1>
                <span class="section-divider"></span><br>
        </div>
            <div class="container-fluid">
                <div class="col-lg-12 order-1 order-lg-2" >
                    <p class="text-right"><a href="medicine_list.php?type=Wellenss">More Items</a></p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-lg-12 order-1 order-lg-2" >     
                    <div class="product-list">
                        <div class="row">
                            <?php 
                            include 'db_connection.php';
                            if(isset($_GET['type'])){
                                $type = $_GET['type'];
                                //echo $cat."<br><br>" ;
                                
                            }
                            else{
                                //echo "no ctogory selected";
                                //echo '<script>alert("No Catagory Selected !");</script>';
                                $type="Wellenss";
                            }

                            $sql = "SELECT * FROM category WHERE c_type='".$type."' AND `front_display`=1 ORDER BY front_display DESC"; 
                                $result = mysqli_query($connection, $sql);
                                
                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc()){
                                        //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                        //<a href="./page.php?name='.$row["c_name"].'&amp;age=16">Page</a>
                                    echo    
                                        ' 
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="product-item">
                                                <div class="pi-pic">
                                                    <a href="view_items.php?cat='.$row["c_name"].'&amp;type='.$type.'">
                                                    <div class="card" style="width: 400px;">
                                                    <img class="card-img" src="img/medicine catogoty/medicine/PHARMACEUTICAL.jpg" alt="Card image" style = "opacity:0.9;">
                                                    <div class="card-img-overlay">
                                                    <div class="card-body">
                                                    <h5 class="card-title"><b>'.$row["c_name"].'</b></h5>
                                                    </div>
                                                    </div>
                                                </div></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        ';
                                    }
                                }
                                else{

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
        </div>
        <br>
        <!--Item_3 list end -->
    

    <!-- Footer Section Begin -->
    <footer class="footer-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="home_page.php"><img src="img\slidephoto\logo2.png" alt="Medicare online pharmacy"></a>
                        </div>
                        <ul>
                            <li>Address: No.11,Medhagoda,Matara,Sri Lanka</li>
                            <li>Phone: +971524518</li>
                            <li>Email: medicarepharmacy@gmail.com</li>
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
                <!-- <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="copyright-text">                        
                         Copyright &copy;<script>document.write(new Date().getFullYear());</script> medicare.lk. All rights reserved.
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