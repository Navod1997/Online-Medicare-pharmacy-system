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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
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

    <!-- Login Section Begin -->
    

    <div class="register-login-section spad">
        <div class="container">
        <div class="card" style="border-radius:0rem;height:535px">
            <div class="row">                
                <div class="col-sm">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <div class="login-form">
                            <h2>Login</h2>
                            <form action="" method="POST">
                                <div class="group-input">
                                    <label for="username">Email Address *</label>
                                    <input type="text" name="e_mail" id="username"  required>
                                </div>
                                <div class="group-input">
                                    <label for="pass">Password *</label>
                                    <input type="password" name='password' id="pass" class="pwd"  required >
                                    <i class="fa fa-eye" onclick = "passwordshow()"></i>
                                </div>
                                <!-- <div class="group-input gi-check">
                                    <div class="gi-more"> -->
                                        <!-- <label for="save-pass">
                                            Save Password
                                            <input type="checkbox" id="save-pass">
                                            <span class="checkmark"></span>
                                        </label> -->
                                        <!-- <a href="forget_password.php" class="forget-pass">Forget your Password</a> -->
                                    <!-- </div>
                                </div> -->
                                <button type="submit" name="submit" class="site-btn login-btn" required>Sign In</button>
                            </form>
                            <!-- <div class="switch-login">
                                <a href="register.php" class="or-login">Or Create An Account</a>
                            </div> -->
                            <a class="small text-muted" href="forget_password.php">Forgot password?</a>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                    href="register.php" style="color: #393f81;">Register here</a></p>
                            <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="login-form">
                        <img src="https://img.graphicsurf.com/2020/09/people-in-pharmacy-vector-illustration-768x512.jpg" class="" alt="Responsive image" style="height: 500px;">
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
            
           
            $email = $_POST['e_mail'];
            $password = $_POST['password'];
            
            if(!empty($email))   // records were not empty
            {
            $loginquery ="SELECT * FROM user WHERE e_mail='".$email."' && password='".md5($password)."'"; //selecting matching records
            $result=mysqli_query($connection, $loginquery); //executing
            $row=mysqli_fetch_array($result);
            
            if ( mysqli_num_rows($result) > 0){

                if(is_array($row))
                                        {
                                 
                                     if($row["status"]==1){
                                         
                                                //Admin
                                                if($row["user_type"]== "admin"){
                                                    //$_SESSION["email"] = $row['e_mail'];
                                                    //$_SESSION["type"]= "admin";
                                                    //$_SESSION["first_name"]= $row['first_name'];
                                                    //$_SESSION["last_name"] = $row['last_name'];
                                                    //$_SESSION["phone_number"] = $row['phone_number'];
                                                    //$_SESSION["address"] = $row['address'];
                                                    $_SESSION["admin_id"] = $row['user_id'];
                                                    
                                                    //header("location:./admin/index.php");
                                                    echo("<script>location.href='Admin/index.php'</script>");
                                                    
                                                    
                                                }
                                                //pharmacise
                                                elseif($row["user_type"]=="pharmacist"){
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    $_SESSION["type"]= "pharmacist";
                                                    $_SESSION["pharmacist_id"] = $row['user_id'];
                                                   
                                                    //header("location:emp/index.php");
                                                    echo("<script>location.href='Pharmacist/index.php'</script>");
                                                    
                                                }
                                                //Driver
                                                elseif($row["user_type"]=="rider"){
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    $_SESSION["type"]= "driver";
                                                    $_SESSION["driver_id"] = $row['user_id'];
                                                   
                                                    //header("location:./dilivery/index.php");
                                                    echo("<script>location.href='Rider/index.php'</script>");
                                                    
                                                }
                                                //User
                                                else{
                                                    $_SESSION["email"] = $row['e_mail'];
                                                    //$_SESSION["type"]= "user";
                                                    $_SESSION["first_name"]= $row['first_name'];
                                                    $_SESSION["last_name"] = $row['last_name'];
                                                    $_SESSION["phone_number"] = $row['phone_number'];
                                                    $_SESSION["address"] = $row['address'];
                                                    $_SESSION["user_id"] = $row['user_id'];
                                                    $_SESSION["city"] = $row['city'];

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
                                            
                                        }

            }else{
               
                echo '<script>swal("Error!", "Incorrect email or password!", "error");</script>';
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