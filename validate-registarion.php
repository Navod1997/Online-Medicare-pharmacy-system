<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["otpCode"])){
    
   
    
}
else{
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="zxx">

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
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
                    <!-- <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Medicarepharmacy@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +971524518
                    </div> -->
                </div>
                <?php
                if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!=""){
                    $name= $_SESSION["first_name"];

                    echo '<div class="ht-right">
                    <span class="text-dark">Welcome!</span><a class="text-white" href="my_account.php" class="login-panel">'.$name.'</>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                <div class="lan-selector">
                </div>
            </div>
        </div>';
                
             } ?>
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
                        <!-- <a href="Prescription.php">
                                <img src="img\slidephoto\UPLOAD YOUR.png" width="180" height="50" alt="Upload your Prescription" >
                            </a>            -->
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
                        <li><a href="medicine_list.php?type=Mediacal Divice">Medical device</a></li>
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


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                        <span>Forget password</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->

    <?php
    
    

    if(isset($_POST['otpSubmit'])){

        // echo "OTP is :" .$_SESSION['otpCode'];
        // echo " User input :" .$_POST['otp'];

        if($_SESSION['otpCode'] == $_POST['otp']){

            // echo "OTP is matched part run";
            


           // $_SESSION['otpCode'] ="" ;

                               $e_mail= $_SESSION['e_mail'] ;
                               $first_name = $_SESSION['first_name'] ;
                               $last_name = $_SESSION['last_name'] ;
                               $address = $_SESSION['address'] ;
                               $City = $_SESSION['City'] ;
                               $password = $_SESSION['password'];
                               $phone_number = $_SESSION['phone_number'];
                               $pass= md5($password);
            
            //inserting values into db
            $mql = "INSERT INTO user(first_name,last_name,e_mail,phone_number,address,city,password) 
            VALUES('$first_name','$last_name','$e_mail','$phone_number','$address','$City','$pass')";
           $create_user = mysqli_query($connection, $mql);//excute query

           if ($create_user){//cheak quary exsiqute

            
            $_SESSION['e_mail'] = "" ;
            $_SESSION['first_name'] = "";
            $_SESSION['last_name'] ="" ;
            $_SESSION['address'] ="";
            $_SESSION['City'] ="";
            $_SESSION['password']="";
            $_SESSION['phone_number']="";

            // $_SESSION['email'] = $_POST['e_mail'];

            echo '
                                    <script>
                                    Swal.fire({
                                            title: "Success!",
                                            text: "Account Created Successfully !",
                                            icon: "success",
                                            button: "OK!",
                                        }).then(function(){
                                                window.location = "home_page.php";
                                            });
                                    </script>
                                    ';

           

           }
           else{

            echo '
            <script>
            Swal.fire({
                    title: "Error",
                    text: "Something went wrong !",
                    icon: "error",
                    button: "OK!",
                }).then(function(){
                        window.location = "register.php";
                    });
            </script>
            ';



           }



        }

        // OTP does not match
        else{

            echo '
            <script>
                swal.fire({
                    title: "Somthing Wrong!",
                    text: "Invalid OTP!",
                    icon: "error",
                    button: "Try Again",
                }).then(function(){
                    window.location = "validate-registarion.php";
                    });
            </script>
            ';
        }
        
        
    }
    else{

        // click only valid user(from forgetpassword.php)
        if(isset($_SESSION['otpCode'])){

            
            echo '
       
            <div class="container">
            <div class="row">
            <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                        <h4>Enter Your OTP</h4>
                        <p class="m-2 p-2">Please, provide your email verification code to validate your identity</p>
                        <div class="col-12 mt-1 mb-2">
                            <label for="password" class="form-label">OTP code</label>
                            <input type="text" class="form-control" name="otp" id="otp" minlength="5" maxlength="5" required>
                            <div class="invalid-feedback">
                            OTP Required..
                            </div>
                            </div>
                            <div class="col-12 mt-2 ">
                            <button type="submit" name="otpSubmit" id="otpSubmit" class="site-btn login-btn">Submit</button>
                        </div>
                        <hr class="mt-4">
                        <div class="col-12">
                            <p class="text-center mb-0">If you want to back? <a href="signin.php">Signin</a></p>
                         </div>
                        </div>      
                    </form>  
                </div>
            </div>
            </div>
            </div><br><br> ';

            

        }
        else{

            echo '
                <script>
                    swal({
                        title: "Somthing Wrong!",
                        text: "Invalid Request!",
                        icon: "error",
                        button: "OK!",
                    }).then(function(){
                            window.location = "signin.php";
                        });
                </script>
                ';
        }

    }
    
  

    ?> <!-- forget password php function end -->


    <!-- update reset password -->
    <!-- update reset password -->



    
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

    <script>
    function passwordshow() {
        var $pwd = $(".pwd");
    var eye1 = document.getElementById("eye");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
        eye1.classList.add("fa-eye-slash");
        eye1.classList.remove("fa-eye");
        showPassword = true;
    } else {
        $pwd.attr('type', 'password');
        eye1.classList.remove("fa-eye-slash");
        eye1.classList.add("fa-eye");
        showPassword = false;
    }
    }
    </script>

</body>

</html>