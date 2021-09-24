<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">



<head>
    
    
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
</head>

<body>
    <!-- Page Preloder -->
    <!--<div id="preloder">
        <div class="loader"></div>
    </div>-->

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
                        +971 524 518
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
    
    <!-- catogory End -->


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
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
                        <h2>Login</h2>
                        <form action="" method="POST">
                            <div class="group-input">
                                <label for="username">email address *</label>
                                <input type="text" name="e_mail" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="text" name='password' id="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Save Password
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="forget_password.php" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="register.php" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        
       
        include 'db_connection.php'; //INCLUDE CONNECTION

        if(isset($_POST['submit']))  // if button is submit
        {
            
            $test = "12345";
            echo md5($test);
            echo '<br>';
            echo "we are in ifisset ";
            echo '<br>';

            $email = $_POST["e_mail"];  // records from login form
            $password = $_POST["password"];

            echo "Email is : " .$email ." Password is :".$password ;
            echo '<br>';

            echo "Encripted password value is : ".md5($password);
            
            if(!empty($email))   // records were not empty
            {
            $loginquery ="SELECT * FROM user WHERE e_mail='".$email."' && password='".md5($password)."'"; //selecting matching records
            $result=mysqli_query($connection, $loginquery); //executing
            $row=mysqli_fetch_array($result);
            
                     if(is_array($row))
                                        {
                                 //Admin
                                     if($row["status"]==1){
                                                
                                                if($row["user_type"]== "admin"){
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    $SESSION["type"]= "admin";
                                                    
                                                    //header("location:./admin/index.php");
                                                    echo("<script>location.href='Admin/index.php'</script>");
                                                    
                                                    
                                                }
                                                //pharmacise
                                                elseif($row["user_type"]=="pharmacist"){
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    $SESSION["type"]= "pharmacist";
                                                   
                                                    //header("location:emp/index.php");
                                                    echo("<script>location.href='Pharmacist/index.php'</script>");
                                                    
                                                }
                                                //Driver
                                                elseif($row["user_type"]=="drv"){
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    $SESSION["type"]= "drv";
                                                   
                                                    //header("location:./dilivery/index.php");
                                                    echo("<script>location.href='/dilivery/index.php'</script>");
                                                    
                                                }
                                                //User
                                                else{
                                                    //$_SESSION["email"] = $row['e_mail'];
                                                   // $SESSION["type"]= "user";
                                                   // header("location:home_page.php");
                                                   echo("<script>location.href='home_page.php'</script>");
                                                    
                                                }
                                            }
                                            else{
                                               
                                                 echo "Account Block!";
                                            }
                                            

                                        } 
                                    else
                                        {
                                               echo "Invalid Email or Password!";
                                        }
            }
             
        } ?>


    <!-- Register Form Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="home_page.php"><img src="img\slidephoto\logo2.png" alt=""></a>
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