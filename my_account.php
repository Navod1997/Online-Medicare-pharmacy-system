<!DOCTYPE html>
<html lang="zxx">

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
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Medicarepharmacy@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +971524518
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                    <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                </div>
            </div>
        </div>


        <!-- search nave -->
        
            <div class="inner-header">
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
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                        <button type="button" class="btn btn-primary"> <a href="Prescription.php">prescrption</button>            
                            <li class="cart-icon">
                                <a href="check-out.php">
                                    <i class="icon_bag_alt"></i>
                                </a>
                            </li>
                        </ul>
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
                        <li><a href="medicine_list.php?type=Mediacal Divice">Mediacal device</a></li>
                        <li><a href="medicine_list.php?type=Wellenss">Wellenss</a></li>
                        <li><a href="medicine_list.php?type=Aurwedha">Aurwedha</a> </li>
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


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>My Account</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">



                    <?php


                        include 'db_connection.php';

                        $id = $_GET["id"];

                        $sql = "SELECT * FROM user WHERE user_id = '".$id."' "; 
                        $result = mysqli_query($connection, $sql);

                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                    $id = $row["user_id"];
                           
                                
                               
                               echo  $first_name = $row["first_name_name"]  ;   
                               echo  $last_name = $row["last_name"];
                               echo  $e_mail =  $row["e_mail"];
                               echo  $phone_number= $row["phone_number"];
                               echo  $address = $row["address"];
                               echo  $password = $row["password"];
                              // echo  $status=$row["status"].'<br>' ;
                             //  echo  $last_update=$row["last_update"].'<br>';
                                   
                                        
                               
                                
                                


                            }



                        }
                        else{

                            echo "no result found";
                            //echo '<script>alert("No Results Found");</script>';
                        }
                        $connection->close();






                        ?>
                   





                        <h2>My Account</h2>

                        <form method="POST" action="" enctype="multipart/form-data">

                        <input type="text" name="id" id="" value=<?php echo $_GET["id"]; ?> />
                      
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputfirstName">First name</label>
                                <input type="text" class="form-control" placeholder="first Name *" value=<?php echo $first_name; ?> required/>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputlastName">Last name</label>
                                <input type="text" class="form-control" placeholder="Last Name *" value=<?php echo $last_name; ?> required/>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">E_mail</label>
                                <input type="email" class="form-control"  placeholder="E_mail *" value=<?php echo $e_mail; ?> required/>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputmobilenumber">Mobile number</label>
                                <input type="text" class="form-control" placeholder="E_mail *" value=<?php echo $phone_number; ?> required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" placeholder="E_mail *" value=<?php echo $e_mail; ?> required/>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputpassword">Password</label>
                                <input type="password" class="form-control" placeholder="E_mail *" value=<?php echo $password; ?> required/>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">submit</button>
                        </form>
                    </div>
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
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
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