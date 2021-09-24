<!DOCTYPE html>
<html >

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
    </header>
    <!-- catogory End -->
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
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
                    <div class="register-form">
                        <h2>Register</h2>
                        <form method="POST" action="" >
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">First name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">E_mail</label>
                                <input type="email" class="form-control" name="e_mail" id="e_mail" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Mobile number</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_numbe" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Password</label>
                                <input type="text" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Confirm Password</label>
                                <input type="text" class="form-control" name="confirm_password" id="confirm_password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required onclick="validate_input()">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                                </div>
                            </div>     
                            <button type="submit" name="register" id="register" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="login.php" class="or-login">Or Login</a>
                        </div>
                    </div>





                <?php


                    include 'db_connection.php'; // connection
                    if(isset($_POST['register'] )) //if submit btn is pressed
                    {
                        if(empty($_POST['first_name']) ||  //if its empty
                            empty($_POST['last_name'])|| 
                            empty($_POST['e_mail']) ||  
                            empty($_POST['phone_number'])||
                            empty($_POST['address'])||
                            empty($_POST['password']) ||
                            empty($_POST['confirm_password']))
                            {
                                echo "All fields must be Required!";
                            }
                        else
                        {
                        
                             $check_email = mysqli_query($connection, "SELECT e_mail FROM user where e_mail = '".$_POST['e_mail']."' ");

                             if($check_email->num_rows>0){
                                   // echo "Email Alrady Use";
                                   echo '<script>alert("Error : This Email used by another user !")</script>';

                                 }
                            else{

                             //inserting values into db
                                $mql = "INSERT INTO user(first_name,last_name,e_mail,phone_number,address,password) 
                                VALUES('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['e_mail']."','".$_POST['phone_number']."','".$_POST['address']."','".md5($_POST['password'])."')";
                               $create_user = mysqli_query($connection, $mql);

                               if ($create_user){

                                session_start();

                                $_SESSION['email'] = $_POST['e_mail'];

                                echo("<script>location.href='login.php'</script>");
                                exit();
                               }
                               else{

                                echo "Unable to create account";
                               }
                               


                                }
                        
                     
                        } 
                            
                            
                            
                        }
                  

                ?>






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

    <script >

                function validate_input(){

                   // alert("Kalhara");
                   var pass1 = document.getElementById("password").value;
                   var pass2 = document.getElementById("confirm_password").value;

                   if(pass1 != pass2){

    
                        document.getElementById("password").style.borderColor = "red"; 
                        document.getElementById("confirm_password").style.borderColor = "red"; 

                        document.getElementById("password").value="";
                        document.getElementById("confirm_password").value="";

                         document.getElementById("gridCheck").checked=false;
                         document.getElementById("register").disabled=true;

                         alert("Your password not mtched !");


                   }
                   else{

                    alert("password  matched " +pass1+": with re password :"+pass2);

                    document.getElementById("password").style.borderColor = "blue"; 
                    document.getElementById("confirm_password").style.borderColor = "blue";

                    document.getElementById("register").disabled=false;
                        
                       

                   }

                }
    </script>
</body>

</html>