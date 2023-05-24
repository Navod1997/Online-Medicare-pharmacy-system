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


<?php
            

            $user_id = $_SESSION["user_id"] ;

            $sql = "SELECT * FROM user WHERE `user_id` ='$user_id' ";
            $result = mysqli_query($connection, $sql); //executing
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result) > 0)

            {
                $first_name = $row['first_name'];
                $last_name =$row['last_name'];
                $email =$row['e_mail'];
                $phone_number =$row['phone_number'];
                $address =$row['address'];
                $city =$row['city'];
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
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Medicarepharmacy@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +971524518
                    </div>
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
                <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                <div class="lan-selector">
                </div>
                ';
                    
                } 
                ?>
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

    <!-- Breadcrumb Form Section Begin -->
    <div class="row">
    <div class="col-sm-4 col-lg-3">
        <nav id="navbar-example3" class="navbar navbar-text-dark bg-light flex-column mt-4" wit>
        <a class="navbar-brand" href="#item-1">My Account</a>
        <a class="navbar-brand" href="my_oder.php">My Order</a>
        <!-- <a class="navbar-brand" href="#item-3">Navbar</a> -->
            </nav>
        </nav>
        </nav>
    </div>
  
  
    <div class="col-sm-6 col-lg-7">
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
            <div class="register-login-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="register-form">
                            <h2>My Account</h2>
                            <form method="POST" action="" >
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">First name</label>
                                    <input type="text" value="<?php echo $first_name;?>" class="form-control" name="first_name" id="first_name" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last name</label>
                                    <input type="text" value="<?php echo $last_name;?>" class="form-control" name="last_name" id="last_name" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">E_mail</label>
                                    <input type="email" value="<?php echo $email;?>" class="form-control" name="e_mail" id="e_mail" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Mobile number</label>
                                    <input type="text" value="<?php echo $phone_number;?>" class="form-control" name="phone_number" id="phone_numbe" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address</label>
                                    <input type="text" value="<?php echo $address;?>" class="form-control" name="address" id="address" disabled>
                                </div>   
                                <div class="form-group">
                                    <label for="inputAddress2">City</label>
                                    <input type="text" value="<?php echo $city;?>" class="form-control" name="city" id="city" disabled>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5.5">
                                        <a href="eddit_acount.php" class="primary-btn pd-cart">EDDIT PROFILE</a>
                                    </div>
                                    <div class="form-group col-md-6.5">
                                        <a href="change_password.php" class="primary-btn pd-cart">CHANGE PASSWORD</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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